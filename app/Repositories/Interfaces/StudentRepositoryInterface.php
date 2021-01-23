<?php

namespace App\Repositories\Interfaces;

interface StudentRepositoryInterface
{
    /**
     * Return all details of the specified student
     * @param $id
     * @return array
     */
    public function getStudent($id): array;

    /**
     * Return all the students who are associated with a given class
     * @param $id
     * @return array
     */
    public function getStudentsOfClass($id): array;

    /**
     * Return all the students who are associated with a given class
     * with the associated class  details
     * @param $id
     * @return array
     */
    public function getStudentsOfClassWithClassInfo($id): array;

    /**
     * Return all the students who are associated with a given classes
     * @param $ids
     * @return array
     */
    public function getStudentsOfClasses($ids): array;

    /**
     * Return all the students who are associated with a given classes
     * with the class details
     * @param $ids
     * @return array
     */
    public function getStudentsOfClassesWithClassInfo($ids): array;

    /**
     * Return all the specified student details with their associated,
     * currently active classes
     * !!! A student can belong to only 1 ACTIVE class at any given moment
     * @param $ids
     * @return array
     */
    public function getStudentsWithActiveClasses($ids): array;

    /**
     * Return all student details for the specified ids
     * @param $ids
     * @return array
     */
    public function getStudents($ids): array;

    /**
     * Return all student ids associated with a specified writing task
     * @param $writingTaskId
     * @return array
     */
    public function getStudentIdsOfWritingTask($writingTaskId): array;

    /**
     * Return all students of the specified school
     * @param $schoolId
     * @return array
     */
    public function getStudentsOfSchoolWithClassInfo($schoolId): array;
}

?>
