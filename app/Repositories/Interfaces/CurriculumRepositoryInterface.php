<?php

namespace App\Repositories\Interfaces;

interface CurriculumRepositoryInterface
{
    /**
     * Return all curriculums in the system
     * @return array
     */
    public function all(): array;

    /**
     * Return the Curriculum associated with the specified
     * curriculum school type
     * @param $curriculumSchoolTypeId
     * @return array
     */
    public function getCurriculumFromCurriculumSchoolType($curriculumSchoolTypeId): array;
}

?>
