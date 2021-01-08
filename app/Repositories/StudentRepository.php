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
}

?>
