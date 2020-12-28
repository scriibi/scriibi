<?php

namespace App\Repositories\Interfaces;

use App\Rubric;

interface RubricRepositoryInterface
{
    /**
    * Return all rubrics in the system
    * @return array
    */
    public function all(): array;

    /**
    * Return a specified rubric
    * @param $id
    * @return array
    */
    public function getRubric($id): array;

    /**
    * Return all specified rubrics
    * @param array
    * @return array
    */
    public function getRubrics(array $ids): array;

    /**
    * Return all specified rubrics with their associated skills and traits
    * @param array
    * @return array
    */
    public function getRubricsWithSkills(array $ids): array;

    /**
    * Return a specific rubric with its associated skills and traits
    * @param $id
    * @return array
    */
    public function getRubricWithSkills($id): array;

    /**
    * Return all rubrics (ids) that belong to a specific teacher
    * @param $id
    * @return array
    */
    public function getTeacherTemplates($id): array;

    /**
    * Create and save a new Rubric instance
    * @param $name
    * @param $scriibiLevel
    * @return Rubric
    */
    public function addRubric($name, $scriibiLevel): ?Rubric;
}

?>
