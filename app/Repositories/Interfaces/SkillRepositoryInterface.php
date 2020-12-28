<?php

namespace App\Repositories\Interfaces;

interface SkillRepositoryInterface
{
    /**
    * Return the id values of all skills which are associated with a given rubric
    * @param $id
    * @return array
    */
    public function getSkillIdsOfRubric($id): array;
}

?>