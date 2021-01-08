<?php

namespace App\Repositories;

use Exception;
use App\WritingTask;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface;

class WritingTaskRepository implements WritingTaskRepositoryInterface
{
    /**
     * @var WritingTask
     */
    protected $writingTask;

    public function __construct(WritingTask $writingTask)
    {
        $this->writingTask = $writingTask;
    }

    /**
     * Create and save a WritingTask instance
     * @param $writingTask
     * @return WritingTask|null
     */
    public function addWritingTask($writingTask): ?WritingTask
    {
        try
        {
            $newWritingTask = new $this->writingTask;
            $newWritingTask->name = $writingTask['name'];
            $newWritingTask->description = $writingTask['description'];
            $newWritingTask->assessed_date = $writingTask['assessed_date'];
            $newWritingTask->primary_owner_id = $writingTask['primary_owner_id'];
            $newWritingTask->group_count = $writingTask['group_count'];
            $newWritingTask->school_id = $writingTask['school_id'];
            $newWritingTask->teaching_period_id = $writingTask['teaching_period'];
            $newWritingTask->status_id = $writingTask['status_id'];
            $newWritingTask->save();
            return $newWritingTask;
        }
        catch (Exception $e)
        {
            return null;
        }
    }
}

?>
