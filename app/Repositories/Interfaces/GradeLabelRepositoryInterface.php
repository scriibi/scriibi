<?php

namespace App\Repositories\Interfaces;

interface GradeLabelRepositoryInterface
{
    /**
     * Return the grade labels of a specified curriculum school type
     * @param $id
     * @return array
     */
    public function getGradeLabels($id): array;

    /**
     * Return the grade labels for the specified scriibi levels
     * of a specified curriculum school type
     * @param $scriibiLevels
     * @param $curriculumSchoolTypeId
     * @return array
     */
    public function getGradeLabelsForAUser($scriibiLevels, $curriculumSchoolTypeId): array;
}

?>
