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
use App\Repositories\Interfaces\SkillRepositoryInterface as SkillRepository;

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
    /**
     * @var SkillRepository
     */
    protected $skillRepositoryInterface;

    public function __construct(TaskRepository $writingTaskRepoInt, TeachingPeriodRepository $teachingPeriodRepoInt, RubricRepository $rubricRepoInt, StudentRepository $studentRepoInt, ClassRepository $classRepoInt, SkillRepository $skillRepoInt)
    {
        $this->writingTaskRepositoryInterface = $writingTaskRepoInt;
        $this->rubricRepositoryInterface = $rubricRepoInt;
        $this->teachingPeriodRepositoryInterface = $teachingPeriodRepoInt;
        $this->studentRepositoryInterface = $studentRepoInt;
        $this->classRepositoryInterface = $classRepoInt;
        $this->skillRepositoryInterface = $skillRepoInt;
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

    /**
     * Disassociate the specified students from the writing task,
     * delete any marks awarded and detach any classes that no longer
     * should be associated with the writing task
     * @param $students
     * @param $writingTaskId
     * @return bool
     */
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
            foreach ($existingStudents as $existingStudent)
            {
                if(!array_key_exists($existingStudent['classes'][0]['id'], $filteredClasses))
                {
                    $filteredClasses[$existingStudent['classes'][0]['id']] = true;
                }
            }

            $existingClassesCount = count($classesOfWritingTask);
            $classesToDetach = [];
            for ($k = 0; $k < $existingClassesCount; $k++)
            {
                if(!array_key_exists($classesOfWritingTask[$k], $filteredClasses))
                {
                    array_push($classesToDetach, $classesOfWritingTask[$k]);
                }
            }
            DB::beginTransaction();
            $writingTaskInstance->classes()->detach($classesToDetach);
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

    /**
     * Return the writing task with the associated student who
     * is passed in through the parameter
     * @param $writingTaskId
     * @param $studentId
     * @return array
     */
    public function getStudentOfTask($writingTaskId, $studentId): array
    {
        try
        {
            return $this->writingTaskRepositoryInterface->getStudentOfWritingTask($writingTaskId, $studentId);
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Updates a specified writing task with the passed in information
     * @param $updatedDetails
     * @return bool
     */
    public function updateWritingTask($updatedDetails): bool
    {
        try
        {
            $assessedYear = $this->extractYearFromDate($updatedDetails['assessedDate']);
            $newTeachingPeriod = $this->teachingPeriodRepositoryInterface->getTeachingPeriodOfDate($assessedYear,$updatedDetails['assessedDate'], $updatedDetails['curriculumSchoolType']);
            $this->writingTaskRepositoryInterface->updateWritingTask($updatedDetails['id'], $updatedDetails['name'], $updatedDetails['description'], $updatedDetails['assessedDate'], $newTeachingPeriod[0]['id']);
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Add the deletedAt timestamp to a specified writing task
     * @param $writingTaskId
     * @return bool
     */
    public function softDeleteWritingTask($writingTaskId): bool
    {
        try
        {
            $result = $this->writingTaskRepositoryInterface->softDeleteWritingTask($writingTaskId);
            if($result)
            {
                return true;
            }
            else
            {
                throw new Exception('Could not perform soft delete');
            }
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Remove the deletedAt timestamp from a specified writing task
     * @param $writingTaskId
     * @return bool
     */
    public function restoreSoftDeletedWritingTask($writingTaskId): bool
    {
        try
        {
            return $this->writingTaskRepositoryInterface->restoreSoftDeletedWritingTasks($writingTaskId);
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Returns all skills which have already been assessed for a
     * specified writing task
     * @param $writingTaskId
     * @return array
     */
    public function getAssessedSkills($writingTaskId): array
    {
        try
        {
            $results = [];
            $assessedSkillsHashMap = [];
            $results = DB::table('task_skill_student_result')->where('writing_task_id', $writingTaskId)->get()->toArray();

            foreach ($results as $result)
            {
                if(!array_key_exists($result->skill_id, $assessedSkillsHashMap))
                {
                    $assessedSkillsHashMap[$result->skill_id] = true;
                }
            }
            return array_keys($assessedSkillsHashMap);
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    /**
     * Update the skills of an existing writing task and also remove any
     * results of removed skills (if marks are available)
     * @param $object
     * @return bool
     */
    public function updateSkills($object): bool
    {
        try
        {
            $skillsToRemove = [];
            $updatedSkillsHashMap = [];
            $writingTask = $this->writingTaskRepositoryInterface->getWritingTaskInstance($object['writingTaskId']);
            $existingSkills = $this->skillRepositoryInterface->getSkillsIdsOfWritingTask($object['writingTaskId']);

            foreach ($object['skills'] as $skill)
            {
                $updatedSkillsHashMap[$skill] = true;
            }

            foreach ($existingSkills as $existingSkill)
            {
                if(!array_key_exists($existingSkill, $updatedSkillsHashMap))
                {
                    array_push($skillsToRemove, $existingSkill);
                }
                else
                {
                    unset($updatedSkillsHashMap[$existingSkill]);
                }
            }
            $skillsToAdd = array_keys($updatedSkillsHashMap);
            DB::table('task_skill_student_result')
                ->where('writing_task_id', $object['writingTaskId'])
                ->whereIn('skill_id', $skillsToRemove)
                ->delete();
            $writingTask->skills()->detach($skillsToRemove);
            $writingTask->skills()->attach($skillsToAdd);

            $status = 'change';
            if(!empty($skillsToAdd))
            {
                $status = 'all incomplete';
            }
            elseif (empty($skillsToAdd) && empty($skillsToRemove))
            {
                $status = 'no change';
            }
            if(!$this->updateStudentStatus($object['writingTaskId'], $status))
            {
                throw new Exception('Unable to update student status');
            }
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Updates the student status for an updated writing task
     * @param $writingTaskId
     * @param $status
     * @return bool
     */
    protected function updateStudentStatus($writingTaskId, $status): bool
    {
        try
        {
            if(isset($status))
            {
                if($status === 'no change')
                {
                    return true;
                }
                else if($status === 'all incomplete')
                {
                    DB::table('writing_task_student')
                        ->where('writing_task_id', $writingTaskId)
                        ->update(['status_flag' => 'incomplete']);
                }
                else
                {
                    $studentResultHashMap = $studentsToSetComplete  = $studentsToSetIncomplete = [];
                    $skillCount = $this->skillRepositoryInterface->getSkillCountOfWritingTask($writingTaskId);

                    $results = DB::table('task_skill_student_result')->where('writing_task_id', $writingTaskId)->get()->toArray();
                    foreach ($results as $result)
                    {
                        if(!array_key_exists($result->student_id, $studentResultHashMap))
                        {
                            $studentResultHashMap[$result->student_id] = 1;
                        }
                        else
                        {
                            $studentResultHashMap[$result->student_id]++;
                        }
                    }

                    foreach ($studentResultHashMap as $key => $value)
                    {
                        if($value < $skillCount)
                        {
                            array_push($studentsToSetIncomplete, $key);
                        }
                        else
                        {
                            array_push($studentsToSetComplete, $key);
                        }
                    }
                    if(!empty($studentsToSetComplete))
                    {
                        DB::table('writing_task_student')
                            ->where('writing_task_id', $writingTaskId)
                            ->whereIn('student_id', $studentsToSetComplete)
                            ->update(['status_flag' => 'complete']);
                    }
                    if(!empty($studentsToSetIncomplete))
                    {
                        DB::table('writing_task_student')
                            ->where('writing_task_id', $writingTaskId)
                            ->whereIn('student_id', $studentsToSetIncomplete)
                            ->update(['status_flag' => 'incomplete']);
                    }
                }
                return true;
            }
        }
        catch (Exception $e)
        {
            return false;
        }
    }
}
?>
