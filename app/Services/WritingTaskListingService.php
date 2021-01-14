<?php

namespace App\Services;

use Exception;
use App\Services\RubricListingService;
use App\Repositories\Interfaces\ClassRepositoryInterface as ClassRepository;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface as WritingTaskRepository;

class WritingTaskListingService
{
    /**
     * @var WritingTaskRepositoryInterface
     */
    protected $writingTaskRepositoryInterface;
    /**
     * @var ClassRepository
     */
    protected $classRepositoryInterface;
    /**
     * @var RubricListingService
     */
    protected $rubricListingService;

    public function __construct(WritingTaskRepository $writingTaskRepoInt, ClassRepository $classRepoInt, RubricListingService $rubricListingService)
    {
        $this->writingTaskRepositoryInterface = $writingTaskRepoInt;
        $this->classRepositoryInterface = $classRepoInt;
        $this->rubricListingService = $rubricListingService;
    }

    /**
     * Returns all the writing tasks that belong to the teacher's class team
     * with their associated rubric skills
     * @param $teacherId
     * @param $schoolId
     * @return array
     */
    public function getTeacherWritingTasks($teacherId, $schoolId): array
    {
        try
        {
            $classes = $this->classRepositoryInterface->getClassIdsOfTeacher($teacherId, $schoolId);
            return $this->getWritingTasks($classes);
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Retrieves all writing tasks (with rubrics, classes and status)
     * associated with the specified classes
     * @param $classIds
     * @return array
     */
    protected function getWritingTasks($classIds): array
    {
        try
        {
            $writingTasks = $this->writingTaskRepositoryInterface->getWritingTasksOfClasses($classIds);
            $length = count($writingTasks);
            $temporary = [];

            for($i = 0; $i < $length; $i++)
            {
                array_push($temporary, $writingTasks[$i]['rubrics'][0]['id']);
            }

            $rubrics = $this->rubricListingService->getRubricsWithSkills($temporary);
            for($j = 0; $j < $length; $j++)
            {
                $writingTasks[$j]['rubrics'] = $rubrics[$writingTasks[$j]['rubrics'][0]['id']];
            }
            return $writingTasks;
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}
?>
