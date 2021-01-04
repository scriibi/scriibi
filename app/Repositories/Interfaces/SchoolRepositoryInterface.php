<?php

namespace App\Repositories\Interfaces;

interface SchoolRepositoryInterface
{
    /**
     * Return all the schools in the system
     * @return array
     */
    public function all(): array;
}

?>
