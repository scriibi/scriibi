<?php

namespace App\Repositories\Interfaces;

interface TeachingPeriodRepositoryInterface
{
    /**
     * Returns the teaching period that a specified day belongs to, to do
     * this the given date should be greater than the start_date and lesser
     * than the end_date along with year and curriculum school type match
     * @param $year
     * @param $date
     * @param $curriculumSchoolTypeId
     * @return array
     * @throws Exception
     */
    public function getTeachingPeriodOfDate($year, $date, $curriculumSchoolTypeId): array;

    /**
     * Returns the specified teaching periods belonging to a specified year and
     * curriculum school type sorted by start date
     * @param $year
     * @param $curriculumSchoolTypeId
     * @return array
     * @throws Exception
     */
    public function getTeachingPeriodIdsOfYear($year, $curriculumSchoolTypeId): array;

    /**
     * Return all teaching periods for the specified curriculum school type
     * @param $curriculumSchoolTypeId
     * @return array
     */
    public function getTeachingPeriodsForCurriculumSchoolType($curriculumSchoolTypeId): array;

    /**
     * Return all teaching periods for the specified ids
     * ordered by start date in ASC
     * @param $teachingPeriodIds
     * @return array
     */
    public function getTeachingPeriods($teachingPeriodIds): array;
}
?>
