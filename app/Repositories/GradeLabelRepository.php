<?php

namespace App\Repositories;

use Exception;
use App\GradeLabel;
use App\Repositories\Interfaces\GradeLabelRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class GradeLabelRepository implements GradeLabelRepositoryInterface
{
    /**
     * @var GradeLabel
     */
    protected $gradeLabel;

    public function __construct(GradeLabel $gradeLabel)
    {
        $this->gradeLabel = $gradeLabel;
    }

    /**
     * Return the assessed labels of a specified curriculum school type
     * @param $id
     * @return array
     */
    public function getGradeLabels($id): array
    {
        try
        {
            return $this->gradeLabel
                ->where('curriculum_school_type_id', $id)
                ->get()
                ->toArray();
        }
        catch(QueryException $e)
        {
            return [];
        }
    }

    /**
     * Return the grade labels for the specified scriibi levels
     * of a specified curriculum school type
     * @param $scriibiLevels
     * @param $curriculumSchoolTypeId
     * @return array
     */
    public function getGradeLabelsForAUser($scriibiLevels, $curriculumSchoolTypeId): array
    {
        try
        {
            return $this->gradeLabel
                ->whereIn('scriibi_level_id', $scriibiLevels)
                ->where('curriculum_school_type_id', $curriculumSchoolTypeId)
                ->get()
                ->toArray();
        }
        catch(QueryException $e)
        {
            return [];
        }
    }
}

?>
