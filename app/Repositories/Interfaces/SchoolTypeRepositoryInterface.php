<?php

namespace App\Repositories\Interfaces;

interface SchoolTypeRepositoryInterface
{
    /**
     * Returns all school types in the system
     * @return array
     */
    public function all(): array;
}

?>
