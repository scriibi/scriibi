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
     * Return all the classes of a specified teacher within a specified school
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
     * Return all the classes of all specified scriibi levels and school
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
}

?>
