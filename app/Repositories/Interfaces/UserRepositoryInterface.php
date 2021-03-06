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

    /**
     * Return all teachers of a specified school
     * @param $schoolId
     * @return arrray
     */
    public function getAllTeachersOfSchool($schoolId): array;

    /**
     * Return all teachers of a specified school under the
     * specified grades (time consuming query)
     * @param $grades
     * @param $schoolId
     * @return array
     */
    public function getAllTeacherOfSpecifiedGrades($grades, $schoolId): array;
}

?>
