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
     * Return a specific rubric with its associated skills
     * @param $id
     * @return array
     */
    public function getRubricWithSkillIds($id): array;

    /**
    * Return all specified rubrics with their associated skills and traits
    * @param array
    * @return array
    */
    public function getRubricsWithGroupedSkills(array $ids): array;

    /**
    * Return a specific rubric with its associated skills and traits
    * @param $id
    * @return array
    */
    public function getRubricWithGroupedSkills($id): array;

    /**
    * Return all rubrics (ids) that belong to a specific teacher
    * @param $id
    * @return array
    */
    public function getTeacherTemplateIds($id): array;

    /**
     * Returns all scriibi rubrics (ids) that belong to a specific
     * scriibi level and curriculum school type
     * @param $level
     * @param $curriculumSchoolTypeId
     * @return array
     */
    public function getScriibiRubricIds($level, $curriculumSchoolTypeId): array;

    /**
     * Returns the rubric associated with a specified writing task
     * @param $taskId
     * @return array
     */
    public function getRubricOfWritingTask($taskId): array;

    /**
    * Create and save a new Rubric instance
    * @param $name
    * @param $scriibiLevel
    * @return Rubric
    */
    public function addRubric($name, $scriibiLevel): ?Rubric;

    /**
     * Update an existing Rubric instance
     * @param $id
     * @param $name
     * @param $scriibiLevel
     * @return Rubric
     */
    public function updateRubric($id, $name, $scriibiLevel): ?Rubric;

    /**
     * Destroy a specified rubric resource
     * @param $id
     * @return bool
     */
    public function destroyRubric($id): bool;
}

?>
