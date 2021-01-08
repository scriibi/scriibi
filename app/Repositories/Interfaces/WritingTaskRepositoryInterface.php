<?php

namespace App\Repositories\Interfaces;

use App\WritingTask;

interface WritingTaskRepositoryInterface
{
    /**
     * Create and save a WritingTask instance
     * @param $writingTask
     * @return WritingTask|null
     */
    public function addWritingTask($writingTask): ?WritingTask;
}

?>
