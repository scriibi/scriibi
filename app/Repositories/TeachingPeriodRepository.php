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
}

?>
