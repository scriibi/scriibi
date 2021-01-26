<?php

namespace App\Repositories;

use Exception;
use App\Clss;
use App\Repositories\Interfaces\ClassRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class ClassRepository implements ClassRepositoryInterface
{
    /**
     * @var Clss
     */
    protected $class;

    public function __construct(Clss $class)
    {
        $this->class = $class;
    }

    /**
     * Return all the currently active classes of a specified teacher
     * within a specified school
     * @param $teacherId
     * @param $schoolId
     * @return array
     */
    public function getClassesOfTeacher($teacherId, $schoolId): array
    {
        try
        {
            return $this->class
                ->where('school_id', $schoolId)
                ->where('status_flag', 'active')
                ->whereHas('teachers', function ($query) use($teacherId)
                {
                    $query->where('user.id', $teacherId);
                })
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all the classes of all specified scriibi levels which are
     * currently active within the specified school
     * @param $scriibiIds
     * @param $schoolId
     * @return array
     */
    public function getClassesOfScriibiLevels($scriibiIds, $schoolId): array
    {
        try
        {
            return $this->class
                ->where('school_id', $schoolId)
                ->where('status_flag', 'active')
                ->whereHas('scriibiLevels', function ($query) use($scriibiIds)
                {
                    $query->whereIn('scriibi_level.id', $scriibiIds);
                })
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all the classes of all specified scriibi level which are
     * currently active within the specified school
     * @param $scriibiId
     * @param $schoolId
     * @return array
     */
    public function getClassesOfScriibiLevel($scriibiId, $schoolId): array
    {
        try
        {
            return $this->class
                ->where('school_id', $schoolId)
                ->where('status_flag', 'active')
                ->whereHas('scriibiLevels', function ($query) use($scriibiId)
                {
                    $query->where('scriibi_level.id', $scriibiId);
                })
                ->get()
                ->toArray();

        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all the ids of the currently active
     * classes associated with the specified teacher
     * @param $teacherId
     * @param $schoolId
     * @return array
     */
    public function getClassIdsOfTeacher($teacherId, $schoolId): array
    {
        try
        {
            return $this->class
                ->where('school_id', $schoolId)
                ->where('status_flag', 'active')
                ->whereHas('teachers', function ($query) use($teacherId)
                {
                    $query->where('user.id', $teacherId);
                })
                ->get()
                ->map(function($class)
                {
                    return $class->id;
                })
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all the ids of the currently active
     * classes associated with the specified students
     * @param $studentIds
     * @return array
     */
    public function getClassIdsOfStudents($studentIds): array
    {
        try
        {
            return $this->class
                ->where('status_flag', 'active')
                ->whereHas('students', function ($query) use($studentIds)
                {
                    $query->whereIn('student.id', $studentIds);
                })
                ->get()
                ->map(function($class)
                {
                    return $class->id;
                })
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all the ids of the classes associated
     * with the specified writing task
     * @param $writingTaskId
     * @return array
     */
    public function getClassIdsOfWritingTask($writingTaskId): array
    {
        try
        {
            return $this->class
                ->whereHas('writingTasks', function ($query) use($writingTaskId)
                {
                    $query->where('writing_task.id', $writingTaskId);
                })
                ->get()
                ->map(function($class)
                {
                    return $class->id;
                })
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all the currently active classes
     * associated with the specified school
     * @param $schoolId
     * @return array
     */
    public function getClassesOfSchool($schoolId): array
    {
        try
        {
            return $this->class
                ->where('school_id', $schoolId)
                ->where('status_flag', 'active')
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {

        }
    }
}

?>
