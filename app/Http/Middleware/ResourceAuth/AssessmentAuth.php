<?php

namespace App\Http\Middleware\ResourceAuth;

use Auth;
use Closure;
use Exception;
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
            $userId = Auth::user()->id;
            $school = $this->userRepositoryInterface->getTeacherSchool($userId)->toArray()[0];
            $classIds = array_map(array($this, 'extractIdValues'), $this->classRepositoryInterface->getClassesOfTeacher($userId, $school['id']));
            $taskIds = array_map(array($this, 'extractIdValues'), $this->writingTaskRepositoryInterface->getWritingTasksOfClasses($classIds));

            if(!in_array($request->route('assessment_id'), $taskIds))
            {
                return redirect('/assessment-list');
            }
            return $next($request);
        }
        catch (Exception $e)
        {
            return redirect('/assessment-list');
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
