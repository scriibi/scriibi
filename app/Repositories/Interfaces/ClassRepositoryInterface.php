<?php

namespace App\Repositories\Interfaces;

interface ClassRepositoryInterface
{
    /**
     * Return all the classes of a specified teacher within a specified school
     * @param $teacherId
     * @param $schoolId
     * @return array
     */
    public function getClassesOfTeacher($teacherId, $schoolId): array;

    /**
     * Return all the classes of all specified scriibi levels which are
     * currently active
     * @param $scriibiIds
     * @param $schoolId
     * @return array
     */
    public function getClassesOfScriibiLevels($scriibiIds, $schoolId): array;

    /**
     * Return all the ids of the currently active
     * classes associated with the specified teacher
     * @param $teacherId
     * @param $schoolId
     * @return array
     */
    public function getClassIdsOfTeacher($teacherId, $schoolId): array;

    /**
     * Return all the ids of the currently active
     * classes associated with the specified students
     * @param $studentIds
     * @return array
     */
    public function getClassIdsOfStudents($studentIds): array;

    /**
     * Return all the ids of the classes associated
     * with the specified writing task
     * @param $writingTaskId
     * @return array
     */
    public function getClassIdsOfWritingTask($writingTaskId): array;
}

?>
