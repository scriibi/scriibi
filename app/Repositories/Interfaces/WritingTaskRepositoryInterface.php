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

    /**
     * Return the task and the specified student who is associated with
     * a given writing task
     * @param $writingTaskId
     * @param $studentId
     * @return array
     */
    public function getStudentOfWritingTask($writingTaskId, $studentId): array;

    /**
     * Return the task skills (pivot between writing_task and skill table)
     * of the specified writing task
     * @param $writingTaskId
     * @return array
     */
    public function getTaskSkillsOfWritingTask($writingTaskId): array;

    /**
     * Return the writing tasks associated with the specified teaching
     * periods and also associated with the specified school
     * @param $teachingPeriodIds
     * @param $schoolId
     * @return array
     */
    public function getWritingTasksOfTeachingPeriods($teachingPeriodIds, $schoolId): array;

    /**
     * Updates the specified writing task with the
     * passed in information
     * @param $id
     * @param $name
     * @param $description
     * @param $assessedDate
     * @param $teachingPeriod
     * @return bool
     */
    public function updateWritingTask($id, $name, $description, $assessedDate, $teachingPeriod): bool;

    /**
     * Set the timestamp for the soft delete column of the specified
     * writing task
     * @param $writingTaskId
     * @return bool
     */
    public function softDeleteWritingTask($writingTaskId): bool;

    /**
     * Get all soft deleted writing tasks which belong to the specified
     * classes
     * writing task
     * @param $classes
     * @return bool
     */
    public function getSoftDeletedWritingTasksOfClasses($classes): array;

    /**
     * Find and restore a specified writing task resource instance
     * writing task
     * @param $writingTaskId
     * @return bool
     */
    public function restoreSoftDeletedWritingTasks($writingTaskId): bool;

    /**
     * Find and restore a specified writing task resource instance
     * writing task
     * @param $schoolId
     * @return array
     */
    public function getWritingTasksOfSchool($schoolId): array;

    /**
     * Find and restore a specified writing task resource instance
     * writing task
     * @param $classId
     * @return array
     */
    public function getWritingTasksOfClass($classId): array;
}

?>
