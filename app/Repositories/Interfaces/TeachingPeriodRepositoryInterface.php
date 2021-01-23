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
     * @param $limit
     * @return array
     * @throws Exception
     */
    public function getTeachingPeriodIdsOfYear($year, $curriculumSchoolTypeId, $limit): array;
}
?>
