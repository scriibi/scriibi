<?php

namespace App\Services;

use DB;
use Exception;
use App\Rubric;
use App\Repositories\Interfaces\RubricRepositoryInterface as RubricRepository;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface as TaskRepository;
use App\Repositories\Interfaces\TeachingPeriodRepositoryInterface as TeachingPeriodRepository;
use App\Repositories\Interfaces\StudentRepositoryInterface as StudentRepository;
use App\Repositories\Interfaces\ClassRepositoryInterface as ClassRepository;

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
    /**
     * @var ClassRepository
     */
    protected $classRepositoryInterface;

    public function __construct(TaskRepository $writingTaskRepoInt, TeachingPeriodRepository $teachingPeriodRepoInt, RubricRepository $rubricRepoInt, StudentRepository $studentRepoInt, ClassRepository $classRepoInt)
    {
        $this->writingTaskRepositoryInterface = $writingTaskRepoInt;
        $this->rubricRepositoryInterface = $rubricRepoInt;
        $this->teachingPeriodRepositoryInterface = $teachingPeriodRepoInt;
        $this->studentRepositoryInterface = $studentRepoInt;
        $this->classRepositoryInterface = $classRepoInt;
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
            $students = $this->getTaskStudentPivotEntries($this->studentRepositoryInterface->getStudentsOfClass($writingTask['class']));
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
     * Returns all students of the selected class attached with the status
     * entries required by the association between writing task and student
     * @param $students
     * @return array
     */
    protected function getTaskStudentPivotEntries($students): array
    {
        try
        {
            $result = [];
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

    /**
     * Accepts a list of student ids and writing task id and adds the
     * students to the task.
     * The classes of the new students are filtered from the existing
     * class associations on the writing task and the remaining classes
     * and linked with the task.
     * @param $students
     * @param $writingTaskId
     * @return array|null
     */
    public function addStudents($students, $writingTaskId): ?array
    {
        try
        {
            $taskClassHashMap = [];
            $studentClasses = $this->classRepositoryInterface->getClassIdsOfStudents($students);
            $taskClasses = $this->classRepositoryInterface->getClassIdsOfWritingTask($writingTaskId);
            $studentClassCount = count($studentClasses);
            $taskClassCount = count($taskClasses);
            for ($i = 0; $i < $taskClassCount; $i++)
            {
                $taskClassHashMap[$taskClasses[$i]] = true;
            }

            for ($j = 0; $j < $studentClassCount; $j++)
            {
                if(array_key_exists($studentClasses[$j], $taskClassHashMap))
                {
                    unset($studentClasses[$j]);
                }
            }
            $writingTask =  $this->writingTaskRepositoryInterface->getWritingTaskInstance($writingTaskId);
            if($writingTask !== null)
            {
                $studentDetails = $this->studentRepositoryInterface->getStudents($students);
                $taskStudentPivotEntries = $this->getTaskStudentPivotEntries($studentDetails);
                DB::beginTransaction();
                $writingTask->classes()->attach($studentClasses);
                $writingTask->students()->attach($taskStudentPivotEntries);
                DB::commit();
                return $studentDetails;
            }
            else
            {
                throw new Exception('The writing task was not found');
            }
        }
        catch (Exception $e)
        {
            DB::rollback();
            return null;
        }
    }

    public function deleteStudents($students, $writingTaskId): bool
    {
        try
        {
            $writingTaskInstance = $this->writingTaskRepositoryInterface->getWritingTaskInstance($writingTaskId);
            $classesOfWritingTask = $this->classRepositoryInterface->getClassIdsOfWritingTask($writingTaskId);
            $existingStudents = $this->studentRepositoryInterface->getStudentsWithActiveClasses($this->studentRepositoryInterface->getStudentIdsOfWritingTask($writingTaskId));
            $preFilterCount = count($existingStudents);
            for ($i = 0; $i < $preFilterCount; $i++)
            {
                if(in_array((string)$existingStudents[$i]['id'] ,$students))
                {
                    unset($existingStudents[$i]);
                }
            }

            $filteredClasses = [];
            $postFilterCount = count($existingStudents);
            for ($j = 0; $j < $postFilterCount; $j++)
            {
                if(array_key_exists($j, $existingStudents))
                {
                    if(!array_key_exists($existingStudents[$j]['classes'][0]['id'], $filteredClasses))
                    {
                        $filteredClasses[$existingStudents[$j]['classes'][0]['id']] = true;
                    }
                }
            }

            $existingClassesCount = count($classesOfWritingTask);
            for ($k = 0; $k < $existingClassesCount; $k++)
            {
                if(array_key_exists($classesOfWritingTask[$k], $filteredClasses))
                {
                    unset($classesOfWritingTask[$k]);
                }
            }
            DB::beginTransaction();
            $writingTaskInstance->classes()->detach($classesOfWritingTask);
            $writingTaskInstance->students()->detach($students);
            DB::table('task_skill_student_result')->where('writing_task_id', $writingTaskId)->whereIn('student_id', $students)->delete();
            DB::commit();
            return true;
        }
        catch (Exception $e)
        {
            DB::rollback();
            return false;
        }
    }
}
?>
