<?php

namespace App\Repositories;

use Exception;
use App\TeachingPeriod;
use App\Repositories\Interfaces\TeachingPeriodRepositoryInterface;

class TeachingPeriodRepository implements TeachingPeriodRepositoryInterface
{
    /**
     * @var TeachingPeriod
     */
    protected $teachingPeriod;

    public function __construct(TeachingPeriod $teachingPeriod)
    {
        $this->teachingPeriod = $teachingPeriod;
    }

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
    public function getTeachingPeriodOfDate($year, $date, $curriculumSchoolTypeId): array
    {
        try
        {
            return $this->teachingPeriod
                ->where('year', $year)
                ->where('start_date', '<', $date)
                ->where('end_date', '>', $date)
                ->where('curriculum_school_type_id', $curriculumSchoolTypeId)
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            throw $e;
        }
    }

    /**
     * Returns all teaching periods belonging to a specified year and
     * curriculum school type sorted by start date
     * @param $year
     * @param $curriculumSchoolTypeId
     * @return array
     * @throws Exception
     */
    public function getTeachingPeriodIdsOfYear($year, $curriculumSchoolTypeId): array
    {
        try
        {
            return $this->teachingPeriod
                ->where('year', $year)
                ->where('curriculum_school_type_id', $curriculumSchoolTypeId)
                ->orderBy('start_date', 'asc')
                ->get()
                ->map(function($teachingPeriod)
                {
                    return $teachingPeriod->id;
                })
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all teaching periods for the specified curriculum school type
     * @param $curriculumSchoolTypeId
     * @return array
     */
    public function getTeachingPeriodsForCurriculumSchoolType($curriculumSchoolTypeId): array
    {
        try
        {
            return $this->teachingPeriod
                ->where('curriculum_school_type_id', $curriculumSchoolTypeId)
                ->orderBy('start_date', 'asc')
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}

?>
