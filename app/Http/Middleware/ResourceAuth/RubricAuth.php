<?php

namespace App\Http\Middleware\ResourceAuth;

use Auth;
use Closure;
use Exception;
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
            $userId = Auth::user()->id;
            $rubricIds = $this->rubricRepositoryInterface->getTeacherTemplateIds($userId);
            $taskId = $request->route('taskId');
            if(!isset($taskId))
            {
                if(!in_array($request->route('rubricId'), $rubricIds))
                {
                    return redirect('/rubric-list');
                }
            }
            return $next($request);
        }
        catch (Exception $e)
        {
            return redirect('/rubric-list');
        }
    }
}
