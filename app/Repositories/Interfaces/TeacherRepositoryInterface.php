<?php

namespace App\Repositories\Interfaces;

interface TeacherRepositoryInterface
{
    /**
    * Return the school of a specified teacher
    * @param $id
    * @return object
    */
    public function getTeacherSchool($id): ?object;
}

?>
