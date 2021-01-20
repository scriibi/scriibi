<?php

namespace App\Repositories\Interfaces;

interface AssessedLabelRepositoryInterface
{
    /**
    * Return the assessed labels of a specified curriculum school type
    * @param $id
    * @return array
    */
    public function getAssessedLabels($id): array;

    /**
     * Return the assessed label of a specified curriculum school type
     * and scriibi level
     * @param $curriculumSchoolTypeId
     * @param $scriibiLevelId
     * @return array
     */
    public function getAssessedLabel($curriculumSchoolTypeId, $scriibiLevelId): array;
}

?>
