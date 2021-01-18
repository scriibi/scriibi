<?php

namespace App\Repositories\Interfaces;

use App\WritingTask;

interface WritingTaskRepositoryInterface
{
    /**
     * Returns all writing task (assessment) details for a specified Id value
     * @param $id
     * @return array
     */
    public function getWritingTask($id): array;

    /**
     * Returns an ORM resource instance of a specified writing task
     * @param $id
     * @return array
     */
    public function getWritingTaskInstance($id): ?WritingTask;

    /**
     * Create and save a WritingTask instance
     * @param $writingTask
     * @return WritingTask|null
     */
    public function addWritingTask($writingTask): ?WritingTask;

    /**
     * Return all the assessments associated with the
     * specified classes
     * @param array $classes
     * @return array
     */
    public function getWritingTasksOfClasses(array $classes): array;

    /**
     * Return all the students who are associated with a given writing task
     * @param $taskId
     * @return array
     */
    public function getStudentsOfWritingTask($taskId): array;
}

?>
