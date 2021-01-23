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
     * Returns an ORM resource instance of a specified writing task
     * @param $id
     * @return array
     */
    public function getWritingTaskInstance($id): ?WritingTask
    {
        try
        {
            return $this->writingTask::find($id);
        }
        catch (Exception $e)
        {
            return null;
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

    /**
     * Return the task and the specified student who is associated with
     * a given writing task
     * @param $writingTaskId
     * @param $studentId
     * @return array
     */
    public function getStudentOfWritingTask($writingTaskId, $studentId): array
    {
        try
        {
            return $this->writingTask
                ->where('id', $writingTaskId)
                ->with(['students' => function($query) use($studentId)
                {
                    $query->where('student.id', $studentId);
                }])
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return the skills and task skills (pivot between writing_task
     * and skill table) of the specified writing task
     * @param $writingTaskId
     * @return array
     */
    public function getTaskSkillsOfWritingTask($writingTaskId): array
    {
        try
        {
            return $this->writingTask
                ->where('id', $writingTaskId)
                ->with('skills')
                ->get()
                ->map(function($writingTask)
                {
                    return $writingTask['skills'];
                })
                ->toArray()[0];
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Return the writing tasks associated with the specified teaching
     * periods and also associated with the specified school
     * @param $teachingPeriodIds
     * @param $schoolId
     * @return array
     */
    public function getWritingTasksOfTeachingPeriods($teachingPeriodIds, $schoolId): array
    {
        try
        {
            return $this->writingTask
                ->where('school_id', $schoolId)
                ->whereIn('teaching_period_id', $teachingPeriodIds)
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Updates the specified writing task with the
     * passed in information
     * @param $id
     * @param $name
     * @param $description
     * @param $assessedDate
     * @return bool
     */
    public function updateWritingTask($id, $name, $description, $assessedDate): bool
    {
        try
        {
            $this->writingTask
                ->where('id', $id)
                ->update(
                    [
                        'name' => $name,
                        'description' => $description,
                        'assessed_date' => $assessedDate,
                    ]
                );
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Set the timestamp for the soft delete column of the specified
     * writing task
     * @param $writingTaskId
     * @return bool
     */
    public function softDeleteWritingTask($writingTaskId): bool
    {
        try
        {
            $writingTask = $this->writingTask::findOrFail($writingTaskId);
            $writingTask->delete();
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Get all soft deleted writing tasks which belong to the specified
     * classes
     * @param $classes
     * @return bool
     */
    public function getSoftDeletedWritingTasksOfClasses($classes): array
    {
        try
        {
            return $this->writingTask::onlyTrashed()
                ->whereHas('classes', function($query) use($classes)
                {
                    $query->whereIn('class.id', $classes);
                })
                ->with('rubrics')
                ->get()
                ->toArray();
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Find and restore a specified writing task resource instance
     * writing task
     * @param $writingTaskId
     * @return bool
     */
    public function restoreSoftDeletedWritingTasks($writingTaskId): bool
    {
        try
        {
            $this->writingTask::withTrashed()
                ->where('id', $writingTaskId)
                ->restore();
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }
}

?>
