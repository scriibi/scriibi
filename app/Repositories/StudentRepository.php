<?php

namespace App\Repositories;

use Exception;
use App\Student;
use App\Repositories\Interfaces\StudentRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class StudentRepository implements StudentRepositoryInterface
{
    /**
     * @var Student
     */
    protected $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    /**
     * Return all details of the specified student
     * @param $id
     * @return array
     */
    public function getStudent($id): array
    {
        try
        {
            return $this->student::find($id)->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all the students who are associated with a given class
     * @param $id
     * @return array
     */
    public function getStudentsOfClass($id): array
    {
        try
        {
            return $this->student
                ->whereHas('classes', function($query) use($id)
                {
                    $query->where('class.id', $id);
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
     * Return all the students who are associated with a given classes
     * @param $ids
     * @return array
     */
    public function getStudentsOfClasses($ids): array
    {
        try
        {
            return $this->student
                ->whereHas('classes', function($query) use($ids)
                {
                    $query->whereIn('class.id', $ids);
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
     * Return all the specified student details with their associated,
     * currently active classes
     * !!! A student can belong to only 1 ACTIVE class at any given moment
     * @param $ids
     * @return array
     */
    public function getStudentsWithActiveClasses($ids): array
    {
        try
        {
            return $this->student
                ->whereIn('student.id', $ids)
                ->with(['classes' => function($query)
                {
                    $query->where('class.status_flag', 'active');
                }])
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all student details for the specified ids
     * @param $ids
     * @return array
     */
    public function getStudents($ids): array
    {
        try
        {
            return $this->student
                ->whereIn('id', $ids)
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all student ids associated with a specified writing task
     * @param $writingTaskId
     * @return array
     */
    public function getStudentIdsOfWritingTask($writingTaskId): array
    {
        try
        {
            return $this->student
                ->whereHas('writingTasks', function ($query) use($writingTaskId)
                {
                    $query->where('writing_task.id', $writingTaskId);
                })
                ->get()
                ->map(function ($student)
                {
                    return $student->id;
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
