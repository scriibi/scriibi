<?php

namespace App\Repositories\Interfaces;

interface StudentRepositoryInterface
{
    /**
     * Return all the students who are associated with a given class
     * @param $id
     * @return array
     */
    public function getStudentsOfClass($id): array;

    /**
     * Return all the students who are associated with a given classes
     * @param $ids
     * @return array
     */
    public function getStudentsOfClasses($ids): array;
}

?>
