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
    public function getUserMemberships($id): ?array
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
}

?>
