<?php

namespace App\Services;

use DB;
use Exception;
use App\Repositories\Interfaces\SkillRepositoryInterface as SkillRepository;
use App\Repositories\Interfaces\ClassRepositoryInterface as ClassRepository;
use App\Repositories\Interfaces\StudentRepositoryInterface as StudentRepository;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface as WritingTaskRepository;
use App\Repositories\Interfaces\TeachingPeriodRepositoryInterface as TeachingPeriodRepository;

class DataViewService
{
    /**
     * @var StudentRepository
     */
    protected $studentRepositoryInterface;
    /**
     * @var ClassRepository
     */
    protected $classRepositoryInterface;
    /**
     * @var TeachingPeriodRepository
     */
    protected $teachingPeriodRepositoryInterface;
    /**
     * @var WritingTaskRepository
     */
    protected $writingTaskRepositoryInterface;
    /**
     * @var SkillRepository
     */
    protected $skillRepositoryInterface;

    public function __construct(StudentRepository $studentRepoInt, ClassRepository $classRepoInt, TeachingPeriodRepository $teachingPeriodRepoInt, WritingTaskRepository $writingTaskRepoInt, SkillRepository $skillRepoInt)
    {
        $this->studentRepositoryInterface = $studentRepoInt;
        $this->classRepositoryInterface = $classRepoInt;
        $this->teachingPeriodRepositoryInterface = $teachingPeriodRepoInt;
        $this->writingTaskRepositoryInterface = $writingTaskRepoInt;
        $this->skillRepositoryInterface = $skillRepoInt;
    }

    public function getTraitsOfWritingDataSet($selection, $subselection = null, $school): array
    {
        try
        {
            $limit = 3;
            $date = date('Y-m-d');
            $students = $this->getStudents($selection, $subselection, $school['id']);
            $studentIds = $this->extractIdValues($students);
            $allTeachingPeriods = $this->teachingPeriodRepositoryInterface->getTeachingPeriodsForCurriculumSchoolType($school['curriculum_school_type_id']);
            $teachingPeriodIds = $this->filterLatestTeachingPeriodsForLimit($date, $allTeachingPeriods, $limit);
            $writingTasks = $this->writingTaskRepositoryInterface->getWritingTasksOfTeachingPeriods($teachingPeriodIds, $school['id']);
            usort($writingTasks, array($this, 'sortWritingTasks'));
            $writingTaskIds = $this->extractIdValues($writingTasks);
            $results = DB::table('task_skill_student_result')
                ->whereIn('writing_task_id', $writingTaskIds)
                ->whereIn('student_id', $studentIds)
                ->get()
                ->toArray();
            $uniqueSkills = $this->filterUniqueSkills($results);
            ksort($uniqueSkills);
            $this->sortResults($results, $writingTaskIds);
            $studentTemplates = $this->createStudentDataTemplates($students, $uniqueSkills);

            $resultCount = count($results);
            for ($i = 0; $i < $resultCount; $i++)
            {
                $studentTemplates[$results[$i]->student_id]['skills'][$results[$i]->skill_id] = $results[$i]->result;
            }
            return $studentTemplates;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function filterUniqueSkills($marks): array
    {
        try
        {
            $uniqueSkillsHashMap = [];
            $count = count($marks);

            for ($i = 0; $i < $count; $i++)
            {
                if(!array_key_exists($marks[$i]->skill_id, $uniqueSkillsHashMap))
                {
                    $uniqueSkillsHashMap[$marks[$i]->skill_id] = null;
                }
            }
            return $uniqueSkillsHashMap;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    public function getGrowthOfWritingDataSet($selection, $subselection = null, $school, $allScriibiLevels): array
    {
        try
        {
            $limit = 3;
            $date = date('Y-m-d');
            $students = $this->getStudents($selection, $subselection, $school['id']);
            $studentIds = $this->extractIdValues($students);
            $teachingPeriodsOfYear = $this->teachingPeriodRepositoryInterface->getTeachingPeriodIdsOfYear(date_create($date)->format("Y"), $school['curriculum_school_type_id']);
            $allTeachingPeriods = $this->teachingPeriodRepositoryInterface->getTeachingPeriodsForCurriculumSchoolType($school['curriculum_school_type_id']);
            $studentTemplates = $this->createStudentTeachingPeriodTemplates($students, $teachingPeriodsOfYear);
            foreach ($teachingPeriodsOfYear as $tpy)
            {
                $teachingPeriodIds = $this->getSpecifiedTeachingPeriodForLimit($tpy, $allTeachingPeriods, $limit);
                $writingTasks = $this->writingTaskRepositoryInterface->getWritingTasksOfTeachingPeriods($teachingPeriodIds, $school['id']);

                if(!$this->checkWritingTaskExistanceForTeachingPeriod($writingTasks, $teachingPeriodIds[count($teachingPeriodIds)-1]))
                {
                    continue;
                }

                usort($writingTasks, array($this, 'sortWritingTasks'));
                $writingTaskIds = $this->extractIdValues($writingTasks);
                $results = DB::table('task_skill_student_result')
                    ->whereIn('writing_task_id', $writingTaskIds)
                    ->whereIn('student_id', $studentIds)
                    ->get()
                    ->toArray();
                $this->sortResults($results, $writingTaskIds);
                $studentSkillTemplates = $this->createStudentSkillDataTemplates($students);
                $resultCount = count($results);

                for ($i = 0; $i < $resultCount; $i++)
                {
                    $studentSkillTemplates[$results[$i]->student_id]['skills'][$results[$i]->skill_id] = $results[$i]->result;
                }

                foreach ($studentSkillTemplates as $key => $value)
                {
                    $studentTemplates[$key]['teachingPeriods'][$tpy] = $this->getSkillsAvg($value['skills'], $allScriibiLevels);
                }
            }
            return [
                'studentTemplates' => $studentTemplates,
                'teachingPeriods' => $teachingPeriodsOfYear
            ];
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    public function getAssessmentDataSet($writingTaskId): array
    {
        try
        {
            $studentsOfAssessment = $this->studentRepositoryInterface->getStudentsOfWritingTaskWithClassInfo($writingTaskId);
            $studentTemplates = $this->createStudentAssessmentSkillTemplate($studentsOfAssessment, $writingTaskId);
            $studentIds =  $this->extractIdValues($studentsOfAssessment);
            $results = DB::table('task_skill_student_result')
                ->where('writing_task_id', $writingTaskId)
                ->whereIn('student_id', $studentIds)
                ->get()
                ->toArray();
            $resultCount = count($results);

            for ($i = 0; $i < $resultCount; $i++)
            {
                $studentTemplates[$results[$i]->student_id]['skills'][$results[$i]->skill_id] = $results[$i]->result;
            }
            return $studentTemplates;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function checkWritingTaskExistanceForTeachingPeriod($writingTasks, $teachingPeriodId): bool
    {
        try
        {
            foreach ($writingTasks as $writingTask)
            {
                if((int)$writingTask['teaching_period_id'] === (int)$teachingPeriodId)
                {
                    return true;
                }
            }
            return false;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    protected function getSkillsAvg($skills, $allScriibiLevels): ?float
    {
        try
        {
            $total = 0;
            $skillCount = 0;
            foreach ($skills as $skill)
            {
                if($skill !== null)
                {
                    $total += $allScriibiLevels[$skill];
                    $skillCount++;
                }
            }
            return $total / $skillCount;
        }
        catch (Exception $e)
        {
            return null;
        }
    }

    protected function createStudentAssessmentSkillTemplate($students, $writingTaskId): array
    {
        try
        {
            $skillHashMap = [];
            $templates = [];
            $skillIds = $this->skillRepositoryInterface->getSkillsIdsOfWritingTask($writingTaskId);
            $skillCount = count($skillIds);
            for ($i = 0; $i < $skillCount; $i++)
            {
                $skillHashMap[$skillIds[$i]] = null;
            }
            $studentCount = count($students);
            for ($j = 0; $j < $studentCount; $j++)
            {
                $templates[$students[$j]['id']] =
                    [
                        'name' => $students[$j]['first_name'] . ' ' . $students[$j]['last_name'],
                        'class' => !empty($students[$j]['classes']) ? $students[$j]['classes'][0]['name'] : null,
                        'gradeLevel' => $students[$j]['grade_level_id'],
                        'assessedLevel' => $students[$j]['assessed_level_id'],
                        'skills' => $skillHashMap
                    ];
            }
            return $templates;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function createStudentTeachingPeriodTemplates($students, $teachingPeriodIds)
    {
        try
        {
            $templates = [];
            $teachingPeriodHashMap = [];

            foreach ($teachingPeriodIds as $teachingPeriod)
            {
                $teachingPeriodHashMap[$teachingPeriod] = null;
            }
            $studentCount = count($students);

            for ($j = 0; $j < $studentCount; $j++)
            {
                $templates[$students[$j]['id']] =
                    [
                        'name' => $students[$j]['first_name'] . ' ' . $students[$j]['last_name'],
                        'class' => !empty($students[$j]['classes']) ? $students[$j]['classes'][0]['name'] : null,
                        'gradeLevel' => $students[$j]['grade_level_id'],
                        'assessedLevel' => $students[$j]['assessed_level_id'],
                        'teachingPeriods' => $teachingPeriodHashMap
                    ];
            }
            return $templates;

        }
        catch (Exception $e)
        {
            return $e;
        }
    }

    protected function createStudentSkillDataTemplates($students): array
    {
        try
        {
            $skillHashMap = [];
            $templates = [];
            $skillIds = $this->skillRepositoryInterface->getAllSkillIds();
            $skillCount = count($skillIds);
            for ($i = 0; $i < $skillCount; $i++)
            {
                $skillHashMap[$skillIds[$i]] = null;
            }
            $studentCount = count($students);
            for ($j = 0; $j < $studentCount; $j++)
            {
                $templates[$students[$j]['id']] =
                    [
                        'name' => $students[$j]['first_name'] . ' ' . $students[$j]['last_name'],
                        'class' => !empty($students[$j]['classes']) ? $students[$j]['classes'][0]['name'] : null,
                        'gradeLevel' => $students[$j]['grade_level_id'],
                        'assessedLevel' => $students[$j]['assessed_level_id'],
                        'skills' => $skillHashMap
                    ];
            }
            return $templates;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function createStudentDataTemplates($students, $skills): array
    {
        try
        {
            $templates = [];
            $studentCount = count($students);
            for ($j = 0; $j < $studentCount; $j++)
            {
                $templates[$students[$j]['id']] =
                    [
                        'name' => $students[$j]['first_name'] . ' ' . $students[$j]['last_name'],
                        'class' => !empty($students[$j]['classes']) ? $students[$j]['classes'][0]['name'] : null,
                        'gradeLevel' => $students[$j]['grade_level_id'],
                        'assessedLevel' => $students[$j]['assessed_level_id'],
                        'skills' => $skills
                    ];
            }
            return $templates;
        }
        catch (Exception $e)
        {
            return [];
        }
    }


    protected function getStudents($selection, $subselection = null, $schoolId): array
    {
        try
        {
            $categories = [
                    1 => 'school',
                    2 => 'grade',
                    3 => 'class'
                ];
            switch ($selection)
            {
                case $categories[1]:
                    return $this->studentRepositoryInterface->getStudentsOfSchoolWithClassInfo($schoolId);
                case $categories[2]:
                    return $this->filterStudentsAgainstGradeLevel($this->studentRepositoryInterface->getStudentsOfClassesWithClassInfo($this->getClassesOfGrade($subselection, $schoolId)), $subselection);
                case $categories[3]:
                    return $this->studentRepositoryInterface->getStudentsOfClassWithClassInfo($subselection);
            }
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function filterStudentsAgainstGradeLevel($students, $gradeLevel): array
    {
        try
        {
            $temp = [];
            foreach ($students as $student)
            {
                if((int)$student['grade_level_id'] === (int)($gradeLevel))
                {
                    array_push($temp, $student);
                }
            }
            return $temp;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function getClassesOfGrade($subselection, $schoolId): array
    {
        try
        {
            $temp = [];
            $classes = $this->classRepositoryInterface->getClassesOfScriibiLevel($subselection, $schoolId);
            $classCount = count($classes);
            for($i = 0; $i < $classCount; $i++)
            {
                array_push($temp, $classes[$i]['id']);
            }
            return $temp;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function extractIdValues($data): array
    {
        try
        {
            $temp = [];
            $length = count($data);
            for($i = 0; $i < $length; $i++)
            {
                array_push($temp, $data[$i]['id']);
            }
            return $temp;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function sortWritingTasks($a, $b)
    {
        if(strtotime($a['assessed_date']) == strtotime($b['assessed_date']))
        {
            return 0;
        }
        if(strtotime($a['assessed_date']) > strtotime($b['assessed_date']))
        {
            return 1;
        }
        else
        {
            return -1;
        }
    }

    protected function filterLatestTeachingPeriodsForLimit($date, $teachingPeriods, $limit):array
    {
        try
        {
            $teachingPeriodIds = [];
            $filteredPeriods = array_filter($teachingPeriods, function ($period) use($date)
            {
                if($period['start_date'] <= $date){ return true; }
            });
            $filteredPeriodsPointer = count($filteredPeriods) - 1;
            for($i = 0; $i < $limit; $i++)
            {
                array_push($teachingPeriodIds, $filteredPeriods[$filteredPeriodsPointer]['id']);
                $filteredPeriodsPointer--;
            }
            return array_reverse($teachingPeriodIds);
        }
        catch (Exception$e)
        {
            return [];
        }
    }

    protected function sortResults(&$results, $order)
    {
        usort($results, function ($a, $b) use($order)
        {
            if(array_search($a->writing_task_id, $order) == array_search($b->writing_task_id, $order))
            {
                return 0;
            }
            if(array_search($a->writing_task_id, $order) > array_search($b->writing_task_id, $order))
            {
                return 1;
            }
            else
            {
                return -1;
            }
        });
    }

    protected function getSpecifiedTeachingPeriodForLimit($target, $teachingPeriods, $limit): array
    {
        try
        {
            $teachingPeriodIds = [];
            $startingIndex = null;
            $teachingPeriodsCount = count($teachingPeriods);
            for ($i = 0; $i < $teachingPeriodsCount; $i++)
            {
                if((int)$teachingPeriods[$i]['id'] === (int)$target)
                {
                    $startingIndex = $i;
                    break;
                }
            }
            for($j = 0; $j < $limit; $j++)
            {
                array_push($teachingPeriodIds, $teachingPeriods[$startingIndex]['id']);
                $startingIndex--;
            }
            return array_reverse($teachingPeriodIds);
        }
        catch (Exception $e)
        {
            return [];
        }
    }
}

?>
