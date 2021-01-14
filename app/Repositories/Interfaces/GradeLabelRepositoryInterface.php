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
}

?>
