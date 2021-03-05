<?php

namespace App\Repositories;

use Exception;
use App\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var User
     */
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
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
            return $this->user
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

    /**
     * Return all the memberships of a specified user
     * @param $id
     * @return array
     */
    public function getUserMemberships($id): array
    {
        try
        {
            return $this->user
                ->where('user.id', $id)
                ->with('memberships')
                ->get()
                ->map(function($user)
                {
                    $temp = [];
                    $length = count($user->memberships);
                    for($i = 0; $i < $length; $i++)
                    {
                        $temp[$user->memberships[$i]->id] = $user->memberships[$i]->name;
                    }
                    return $temp;
                })
                ->toArray();
        }
        catch(Exception $e)
        {
            return [];
        }
    }

    /**
     * Return the specified user with position of
     * the teacher (if available)
     * @param $id
     * @param $position
     * @return array
     */
    public function getUserPosition($id, $position): array
    {
        try
        {
            return $this->user
                ->where('user.id', $id)
                ->whereHas('positions', function($query)  use($position)
                {
                    $query->where('position.name', $position);
                })
                ->get()
                ->toArray();
        }
        catch(Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all teachers of a specified school
     * @param $schoolId
     * @return arrray
     */
    public function getAllTeachersOfSchool($schoolId): array
    {
        try
        {
            return $this->user
                ->whereHas('schools', function ($query) use($schoolId)
                {
                    $query->where('school.id', $schoolId);
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
     * Return all teachers of a specified school under the
     * specified grades (time consuming query)
     * @param $grades
     * @param $schoolId
     * @return array
     */
    public function getAllTeacherOfSpecifiedGrades($grades, $schoolId): array
    {
        try
        {
            return $this->user
                ->select('user.id')
                ->whereHas('schools', function ($query) use($schoolId)
                {
                    $query->where('school.id', $schoolId);
                })
                ->whereHas('scriibiLevels', function ($query) use($grades)
                {
                    $query->whereIn('scriibi_level.id', $grades);
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
