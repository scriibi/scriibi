<?php

namespace App\Repositories;

use Exception;
use App\AssessedLabel;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFound;

class AssessedLabelRepository implements AssessedLabelRepositoryInterface
{
    /**
     * @var AssessedLabel
     */
    protected $assessedLabel;

    public function __construct(AssessedLabel $assessedLabel)
    {
        $this->assessedLabel = $assessedLabel;
    }

    /**
    * Return the assessed labels of a specified curriculum school type
    * @param $id
    * @return array
    */
    public function getAssessedLabels($id): array
    {
        try
        {
            return $this->assessedLabel
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
     * Return the assessed label of a specified curriculum school type
     * and scriibi level
     * @param $curriculumSchoolTypeId
     * @param $scriibiLevelId
     * @return array
     */
    public function getAssessedLabel($curriculumSchoolTypeId, $scriibiLevelId): array
    {
        try
        {
            return $this->assessedLabel
                ->where('curriculum_school_type_id', $curriculumSchoolTypeId)
                ->where('scriibi_level_id', $scriibiLevelId)
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
