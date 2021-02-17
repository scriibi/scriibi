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

    /**
     * Return the id values of all skills
     * @return array
     */
    public function getAllSkillIds(): array;

    /**
     * Return all skills
     * @return array
     */
    public function getAllSkills(): array;

    /**
     * Return all skill Ids that are associated with a writing task
     * @param $writingTaskId
     * @return array
     */
    public function getSkillsIdsOfWritingTask($writingTaskId): array;

    /**
     * Return the number of skills associated with a writing task
     * @param $writingTaskId
     * @return int|null
     */
    public function getSkillCountOfWritingTask($writingTaskId): ?int;

    /**
     * Return all specified skill details along with the associated
     * traits
     * @param $skillIds
     * @return array
     */
    public  function getSkillsWithTraits($skillIds): array;
}

?>
