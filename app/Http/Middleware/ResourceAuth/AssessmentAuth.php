<?php

namespace App\Http\Middleware\ResourceAuth;

use Auth;
use Closure;
use Exception;
use App\Utils\Sanitize;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use App\Repositories\Interfaces\ClassRepositoryInterface as ClassRepository;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface as WritingTaskRepository;

class AssessmentAuth
{
    /**
     * @var UserRepository $userRepositoryInterface
     */
    private $userRepositoryInterface;
    /**
     * @var ClassRepository $classRepositoryInterface
     */
    private $classRepositoryInterface;
    /**
     * @var WritingTaskRepository $writingTaskRepositoryInterface
     */
    private $writingTaskRepositoryInterface;

    private const POSSIBLESTATUS = [
        'NA' => true
    ];

    public function __construct(ClassRepository $classRepoInt, UserRepository $userRepoInt, WritingTaskRepository $writingTaskRepoInt)
    {
        $this->userRepositoryInterface = $userRepoInt;
        $this->classRepositoryInterface = $classRepoInt;
        $this->writingTaskRepositoryInterface = $writingTaskRepoInt;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try
        {
            $isValidTask = true;
            $error = '';
            // check if query string contains a task id
            if($request->has('task'))
            {
                $taskId = null;
                // Check the request method to determine where to retrieve the task id from
                if($request->isMethod('post'))
                {
                    $taskId = Sanitize::htmlSpecialChars(Sanitize::stripTags($request->input('task')));
                }
                else
                {
                    $taskId = Sanitize::htmlSpecialChars(Sanitize::stripTags($request->input('task')));
                }

                if(is_numeric($taskId))
                {
                    $userId = Auth::user()->id;
                    $school = $this->userRepositoryInterface->getTeacherSchool($userId)->toArray()[0];
                    $classIds = array_map(array($this, 'extractIdValues'), $this->classRepositoryInterface->getClassesOfTeacher($userId, $school['id']));
                    $taskIds = array_map(array($this, 'extractIdValues'), $this->writingTaskRepositoryInterface->getWritingTasksOfClasses($classIds));

                    if(!in_array($taskId, $taskIds))
                    {
                        $isValidTask = false;
                        $error = 'Does not exist for user';
                    }
                }
                else
                {
                    // check if the task is a known string
                    if(!array_key_exists($taskId, self::POSSIBLESTATUS))
                    {
                        $isValidTask = false;
                        $error = 'Not found for user';
                    }
                }
            }
            else
            {
                $isValidTask = false;
                $error = 'Not found';
            }

            if(!$isValidTask)
            {
                return redirect()->back()->withErrors($error);
            }
            return $next($request);
        }
        catch (Exception $e)
        {
            return redirect()->back()->withErrors('Oops! Something went wrong');
        }
    }

    /**
     * Callback for array_map to extract the id values of any compatible object
     * @param $obj
     * @return mixed
     */
    private function extractIdValues($obj)
    {
        return $obj['id'];
    }
}
