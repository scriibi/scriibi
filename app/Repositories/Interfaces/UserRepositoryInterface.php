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

    /**
     * Return the specified user with position of
     * the teacher (if available)
     * @param $id
     * @param $position
     * @return array
     */
    public function getUserPosition($id, $position): array;
}

?>
