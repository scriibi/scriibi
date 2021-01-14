<?php

namespace App\Services;

use DB;
use Exception;
use App\Rubric;
use App\Repositories\Interfaces\RubricRepositoryInterface as RubricRepository;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface as TaskRepository;
use App\Repositories\Interfaces\TeachingPeriodRepositoryInterface as TeachingPeriodRepository;
use App\Repositories\Interfaces\StudentRepositoryInterface as StudentRepository;

class WritingTaskService
{
    /**
     * @var TaskRepository
     */
    protected $writingTaskRepositoryInterface;
    /**
     * @var RubricRepository
     */
    protected $rubricRepositoryInterface;
    /**
     * @var TeachingPeriodRepository
     */
    protected $teachingPeriodRepositoryInterface;
    /**
     * @var StudentRepository
     */
    protected $studentRepositoryInterface;

    public function __construct(TaskRepository $writingTaskRepoInt, TeachingPeriodRepository $teachingPeriodRepoInt, RubricRepository $rubricRepoInt, StudentRepository $studentRepoInt)
    {
        $this->writingTaskRepositoryInterface = $writingTaskRepoInt;
        $this->rubricRepositoryInterface = $rubricRepoInt;
        $this->teachingPeriodRepositoryInterface = $teachingPeriodRepoInt;
        $this->studentRepositoryInterface = $studentRepoInt;
    }

    /**
     * Returns all writing task details of a specified Id value
     * @param $id
     * @return array
     */
    public function getWritingTask($id): array
    {
        try
        {
            return $this->writingTaskRepositoryInterface->getWritingTask($id);
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Creates a new writing task along with a new rubric and creates all
     * required associations between the task and rubric, classes, students
     * and skills
     * @param $writingTask
     * @return bool
     */
    public function saveWritingTask($writingTask): bool
    {
        try
        {
            $newRubricName = 'Writing Task Rubric';
            $year = $this->extractYearFromDate($writingTask['date']);
            $teachingPeriod = $this->teachingPeriodRepositoryInterface->getTeachingPeriodOfDate($year, $writingTask['date'], $writingTask['school']['curriculum_school_type_id']);
            $writingTaskDetails =
                [
                    'name' => $writingTask['name'],
                    'description' => $writingTask['description'],
                    'assessed_date' => $writingTask['date'],
                    'primary_owner_id' => $writingTask['owner_id'],
                    'group_count' => 0,
                    'school_id' => $writingTask['school']['id'],
                    'teaching_period' => $teachingPeriod[0]['id'],
                    'status_id' => $writingTask['status']
                ];
            DB::beginTransaction();
            $newWritingTask = $this->writingTaskRepositoryInterface->addWritingTask($writingTaskDetails);
            $selectedRubric = $this->rubricRepositoryInterface->getRubricWithSkillIds($writingTask['rubric']);
            $newRubric = $this->createNewRubric($newRubricName, $selectedRubric[0]['scriibi_level_id'], $selectedRubric[0]['skills']);
            $students = $this->getTaskStudentPivotEntries($writingTask['class']);
            $newWritingTask->rubrics()->attach($newRubric->id);
            $newWritingTask->classes()->attach($writingTask['class']);
            $newWritingTask->skills()->attach($selectedRubric[0]['skills']);
            $newWritingTask->students()->attach($students);
            DB::commit();
            return true;
        }
        catch (Exception $e)
        {
            DB::rollBack();
            return false;
        }
    }

    /**
     * Creates a new rubric and associates it with the provided skills
     * @param $rubricName
     * @param $scriibiLevelId
     * @param $skills
     * @return Rubric|null
     */
    protected function createNewRubric($rubricName, $scriibiLevelId, $skills): ?Rubric
    {
        try
        {
            $newRubric = $this->rubricRepositoryInterface->addRubric($rubricName, $scriibiLevelId);
            $newRubric->skills()->attach($skills);
            return $newRubric;
        }
        catch (Exception $e)
        {
            return null;
        }
    }

    /**
     * Returns all students of the selected class mapped with the status
     * entries required by the association between writing task and student
     * @param $classId
     * @return array
     */
    protected function getTaskStudentPivotEntries($classId): array
    {
        try
        {
            $result = [];
            $students = $this->studentRepositoryInterface->getStudentsOfClass($classId);
            $length = count($students);
            for($i = 0; $i < $length; $i++)
            {
                $result[$students[$i]['id']] = ['status_flag' => 'incomplete'];
            }
            return $result;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Extracts and returns the year from a specified date
     * @param $date
     * @return string|null
     */
    public function extractYearFromDate($date): ?string
    {
        try
        {
            return date_create($date)->format('Y');
        }
        catch (Exception $e)
        {
            return null;
        }
    }
}
?>
