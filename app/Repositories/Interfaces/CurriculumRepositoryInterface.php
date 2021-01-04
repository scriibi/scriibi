<?php

namespace App\Repositories\Interfaces;

interface CurriculumRepositoryInterface
{
    /**
     * Return all curriculums in the system
     * @return array
     */
    public function all(): array;
}

?>
