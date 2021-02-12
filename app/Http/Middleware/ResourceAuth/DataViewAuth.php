<?php

namespace App\Http\Middleware\ResourceAuth;

use Auth;
use Closure;
use Exception;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface as WritingTaskRepository;
use App\Repositories\Interfaces\ClassRepositoryInterface as ClassRepository;
use App\Repositories\Interfaces\ScriibiLevelRepositoryInterface as ScriibiLevelRepository;

class DataViewAuth
{
    /**
     * @var UserRepository
     */
    private $userRepositoryInterface;

    /**
     * @var WritingTaskRepository
     */
    private $writingTaskRepositoryInterface;

    /**
     * @var ClassRepository
     */
    private $classRepositoryInterface;

    /**
     * @var ScriibiLevelRepository
     */
    private $scriibiLevelRepositoryInterface;

    public function __construct(UserRepository $userRepoInt, WritingTaskRepository $writingTaskRepoInt, ClassRepository $classRepoInt, ScriibiLevelRepository $scriibiLevelRepoInt)
    {
        $this->userRepositoryInterface = $userRepoInt;
        $this->writingTaskRepositoryInterface = $writingTaskRepoInt;
        $this->classRepositoryInterface = $classRepoInt;
        $this->scriibiLevelRepositoryInterface = $scriibiLevelRepoInt;
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
            $position = 'Leader';
            $selection = $request->route('selection');
            $subSelection = $request->route('subselection');
            $assessment = $request->route('assessment');
            if($selection === null && $subSelection === null && $assessment === null)
            {
                return $next($request);
            }

            $userSchool = $this->userRepositoryInterface->getTeacherSchool(Auth::user()->id)[0];
            $userPosition = $this->userRepositoryInterface->getUserPosition(Auth::user()->id, $position);
            if(!empty($userPosition))   // if school leader
            {
                if($selection === 'school')
                {
                    if($assessment === null)
                    {
                        return $next($request);
                    }
                    else
                    {
                        $result = $this->taskInSchool($assessment, $userSchool['id']);
                        if(!$result)
                        {
                            return redirect('/growth-view');
                        }
                        else
                        {
                            return $next($request);
                        }
                    }
                }
                else if($selection === 'class')
                {
                    if($assessment === null)
                    {
                        if($this->classInSchool($subSelection, $userSchool['id']))
                        {
                            return $next($request);
                        }
                        else
                        {
                            return redirect('/growth-view');
                        }
                    }
                    else
                    {
                        if($this->classInSchool($subSelection, $userSchool['id']))
                        {
                            $result = $this->taskInSchool($assessment, $userSchool['id']);
                            if(!$result)
                            {
                                return redirect('/growth-view');
                            }
                            else
                            {
                                return $next($request);
                            }
                        }
                        else
                        {
                            return redirect('/growth-view');
                        }
                    }

                }
                else if ($selection === 'grade')
                {
                    if($assessment === null)
                    {
                        return $next($request);
                    }
                    else
                    {
                        $result = $this->taskInSchool($assessment, $userSchool['id']);
                        if(!$result)
                        {
                            return redirect('/growth-view');
                        }
                        else
                        {
                            return $next($request);
                        }
                    }
                }
                else
                {
                    return redirect('/growth-view');
                }
            }
            else    //  if teacher
            {
                if($selection === 'class')
                {
                    if($assessment === null)
                    {
                        $classScriibiLevels = $this->scriibiLevelRepositoryInterface->getScriibiLevelsOfClass($subSelection);
                        if($this->teacherOwnsLevel(Auth::user()->id, $classScriibiLevels))
                        {
                            return $next($request);
                        }
                        else
                        {
                            return redirect('/growth-view');
                        }
                    }
                    else
                    {
                        $classScriibiLevels = $this->scriibiLevelRepositoryInterface->getScriibiLevelsOfClass($subSelection);
                        if($this->teacherOwnsLevel(Auth::user()->id, $classScriibiLevels))
                        {
                            if($this->teacherCanViewTask(Auth::user()->id, $userSchool['id'], $assessment))
                            {
                                return $next($request);
                            }
                            else
                            {
                                return redirect('/growth-view');
                            }
                        }
                        else
                        {
                            return redirect('/growth-view');
                        }
                    }
                }
                else if ($selection === 'grade')
                {
                    if($assessment === null)
                    {
                        if($this->teacherOwnsLevel(Auth::user()->id, [$subSelection]))
                        {
                            return $next($request);
                        }
                        else
                        {
                            return redirect('/growth-view');
                        }
                    }
                    else
                    {
                        if($this->teacherOwnsLevel(Auth::user()->id, [$subSelection]))
                        {
                            if($this->teacherCanViewTask(Auth::user()->id, $userSchool['id'], $assessment))
                            {
                                return $next($request);
                            }
                            else
                            {
                                return redirect('/growth-view');
                            }
                        }
                        else
                        {
                            return redirect('/growth-view');
                        }
                    }
                }
                else
                {
                    return redirect('/growth-view');
                }
            }
        }
        catch (Exception $e)
        {
            return redirect('/growth-view');
        }
    }

    protected function classInSchool($classId, $schoolId): bool
    {
        $class = $this->classRepositoryInterface->getClass($classId);

        if((int)$class['school_id'] !== (int)$schoolId)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    protected function taskInSchool($writingTaskId, $schoolId): bool
    {
        $result = false;
        $writingTask = $this->writingTaskRepositoryInterface->getWritingTask($writingTaskId);

        if(!empty($writingTask))
        {
            if((int)$writingTask[0]['school_id'] === (int)$schoolId)
            {
                $result = true;
            }
        }
        return $result;
    }

    protected function teacherOwnsLevel($teacherId, $scriibiLevels): bool
    {
        $result = false;
        $teacherLevels = $this->scriibiLevelRepositoryInterface->getScriibiLevelsOfTeacher($teacherId);
        if(!empty($teacherLevels))
        {
            foreach ($scriibiLevels as $level)
            {
                if(in_array($level, $teacherLevels))
                {
                    $result = true;
                    break;
                }
            }
        }
        return $result;
    }

    protected function teacherCanViewTask($teacherId, $schoolId, $writingTaskId): bool
    {
        $result = false;
        $teacherScriibiLevels = $this->scriibiLevelRepositoryInterface->getScriibiLevelsOfTeacher(Auth::user()->id);
        $classIds = array_map(array($this, 'extractIdValues'), $this->classRepositoryInterface->getClassesOfScriibiLevels($teacherScriibiLevels, $schoolId));
        $taskIds = array_map(array($this, 'extractIdValues'), $this->writingTaskRepositoryInterface->getWritingTasksOfClasses($classIds));

        if(in_array($writingTaskId, $taskIds))
        {
            $result = true;
        }
        return $result;
    }

    /**
     * Callback for array_map to extract the id values of any compatible object
     * @param $obj
     * @return mixed
     */
    protected function extractIdValues($obj)
    {
        return $obj['id'];
    }
}
