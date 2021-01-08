<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    /**
    * Return the school of a specified teacher
    * @param $id
    * @return object
    */
    public function getTeacherSchool($id): ?object;

    /**
     * Return all the memberships of a specified user
     * @param $id
     * @return array
     */
    public function getUserMemberships($id): array;
}

?>
