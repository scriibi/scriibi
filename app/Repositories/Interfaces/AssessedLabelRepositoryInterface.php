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
}

?>