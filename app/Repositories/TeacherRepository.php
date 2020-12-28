<?php

namespace App\Repositories;

use Exception;
use App\User;
use App\Repositories\Interfaces\TeacherRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class TeacherRepository implements TeacherRepositoryInterface
{
    /**
     * @var User
     */
    protected $teacher;

    public function __construct(User $teacher)
    {
        $this->teacher = $teacher;
    }

    /**
    * Return the school of a specified teacher
    * @param $id
    * @return object
    */
    public function getTeacherSchool($id): ?object
    {
        try
        {
            return $this->teacher
                ->with('schools')
                ->where('user.id', $id)
                ->get()
                ->map(function($teacher)
                {
                    return $teacher->schools[0];
                });
        }
        catch(QueryException $e)
        {
            return null;
        }
    }
}

?>
