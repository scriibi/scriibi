<?php

namespace App\Http\Middleware\ResourceAuth;

use Auth;
use Closure;
use Exception;
use App\Utils\Sanitize;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\RubricRepositoryInterface as RubricRepository;

class RubricAuth
{
    /**
     * @var RubricRepository $rubricRepositoryInterface
     */
    private $rubricRepositoryInterface;

    public function __construct(RubricRepository $rubricRepoInt)
    {
        $this->rubricRepositoryInterface = $rubricRepoInt;
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
            $isValidRubric = true;
            $error = '';

            // Check if query string contains a rubric id
            if($request->has('rubric'))
            {
                $rubricId = null;
                // Check the request method to determine where to retrieve the rubric id from
                if($request->isMethod('post'))
                {
                    $rubricId = Sanitize::sanitizeInteger($request->input('rubric'));
                }
                else
                {
                    $rubricId = Sanitize::sanitizeInteger($request->query('rubric'));
                }
                if(is_numeric($rubricId))
                {
                    // If the query string contains a writing task then check if the rubric id values match
                    if($request->has('task') && is_numeric($request->query('task')))
                    {
                        $rubricOfTask = $this->rubricRepositoryInterface->getRubricOfWritingTask($request->query('task'));
                        // Check if rubric id matches the rubric associated with the task
                        if((int) $rubricOfTask[0]['id'] !== (int)$rubricId)
                        {
                            $isValidRubric = false;
                            $error = 'Rubric does not match Writing Task';
                        }
                    }
                    // If no writing task is found then check if the rubric is owned by the current user
                    else
                    {
                        $userId = Auth::user()->id;
                        $rubricIds = $this->rubricRepositoryInterface->getTeacherTemplateIds($userId);

                        if(!in_array($rubricId, $rubricIds))
                        {
                            $isValidRubric = false;
                            $error = 'Rubric does not belong to current user';
                        }
                    }
                }
                else
                {
                    $isValidRubric = false;
                    $error = 'Invalid Type: rubric';
                }
            }
            else
            {
                $isValidRubric = false;
                $error = 'No Rubric value found';
            }

            if(!$isValidRubric)
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
}
