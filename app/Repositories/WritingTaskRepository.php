<?php

namespace App\Repositories;

use Exception;
use App\WritingTask;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface;
use phpDocumentor\Reflection\Types\This;

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
     * Returns all writing task (assessment) details for a specified Id value
     * @param $id
     * @return array
     */
    public function getWritingTask($id): array
    {
        try
        {
            return $this->writingTask
                ->where('id', $id)
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
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

    /**
     * Return all the assessments along with their rubrics,
     * classes and status associated with the specified classes
     * @param array $classes
     * @return array
     */
    public function getWritingTasksOfClasses(array $classes): array
    {
        try
        {
            return $this->writingTask
                ->whereHas('classes', function($query) use($classes)
                {
                    $query->whereIn('class.id', $classes);
                })
                ->with('classes')
                ->with('rubrics')
                ->with('status')
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return all the students who are associated with a given writing task
     * @param $taskId
     * @return array
     */
    public function getStudentsOfWritingTask($taskId): array
    {
        try
        {
            return $this->writingTask
                ->where('id', $taskId)
                ->with('students')
                ->get()
                ->map(function($writingTask)
                {
                    return $writingTask->students;
                })
                ->toArray()[0];
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}

?>
