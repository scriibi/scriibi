<?php

namespace App\Services;

use DB;
use Exception;
use App\Repositories\Interfaces\StudentRepositoryInterface as StudentRepository;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface as WritingTaskRepository;
use App\Repositories\Interfaces\ScriibiLevelRepositoryInterface as ScriibiLevelRepository;

class WritingTaskMarkingService
{
    /**
     * @var StudentRepository
     */
    protected $studentRepositoryInterface;
    /**
     * @var ScriibiLevelRepository
     */
    protected $scriibiLevelRepositoryInterface;
    /**
     * @var WritingTaskRepository
     */
    protected $writingTaskRepositoryInterface;

    public function __construct(StudentRepository $studentRepoInt, ScriibiLevelRepository $scriibiLevelRepoInt, WritingTaskRepository $writingTaskRepoInt)
    {
        $this->studentRepositoryInterface = $studentRepoInt;
        $this->scriibiLevelRepositoryInterface = $scriibiLevelRepoInt;
        $this->writingTaskRepositoryInterface = $writingTaskRepoInt;
    }

    public function getStudentSkillCardsWithExtras($student, $writingTaskId, $curriculumId): array
    {
        try
        {
            $skillCards = [];
            $studentTaskResultsHashMap = [];
            $prepopulatedResults = [];
            $range = $this->getScriibiRange($student['assessed_level_id']);
            $rangeForLabels = $this->getScriibiRangeDetails($range);
            $fullScriibiRange = $this->getFullScriibiRange();
            $taskSkills = $this->writingTaskRepositoryInterface->getTaskSkillsOfWritingTask($writingTaskId);
            $studentTaskResults = DB::table('task_skill_student_result')
                ->where('student_id', $student['id'])
                ->where('writing_task_id', $writingTaskId)
                ->get()
                ->toArray();
            $studentTaskResultsCount = count($studentTaskResults);

            for ($j = 0; $j < $studentTaskResultsCount; $j++)
            {
                $studentTaskResultsHashMap[$studentTaskResults[$j]->task_skill_id] = $studentTaskResults[$j]->result;
            }

            $length = count($taskSkills);
            for ($i = 0; $i < $length; $i++)
            {
                $globalCriteria = $this->getGlobalCriteria([$range[0], $range[2], $range[4]], $taskSkills[$i]['id']);
                $localCriteria = $this->getLocalCriteria([$range[0], $range[2], $range[4]], $taskSkills[$i]['id'], $curriculumId);
                if(array_key_exists($taskSkills[$i]['pivot']['id'], $studentTaskResultsHashMap))
                {
                    array_push($prepopulatedResults, $studentTaskResultsHashMap[$taskSkills[$i]['pivot']['id']] . "/" . $taskSkills[$i]['id']);
                }
                $skillCards[$taskSkills[$i]['id']] =
                    [
                        'name' => $taskSkills[$i]['name'],
                        'globalCriteria' => $globalCriteria,
                        'localCriteria' => $localCriteria
                    ];
            }
            return
                [
                    'skillCards' => $skillCards,
                    'rangeForLabels' => $rangeForLabels,
                    'fullScriibiRange' => $fullScriibiRange,
                    'prepopulatedResults' => $prepopulatedResults
                ];
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    public function getStudentSkillCardsForShiftedRange($writingTaskId, $curriculumId, $shift, $scriibiLevel)
    {
        try
        {
            $skillCards = [];
            $range = $this->getShiftedScriibiRange($shift, $scriibiLevel);
            $rangeForLabels = $this->getScriibiRangeDetails($range);
            $taskSkills = $this->writingTaskRepositoryInterface->getTaskSkillsOfWritingTask($writingTaskId);
            $length = count($taskSkills);
            for ($i = 0; $i < $length; $i++)
            {
                $globalCriteria = $this->getGlobalCriteria([$range[0], $range[2], $range[4]], $taskSkills[$i]['id']);
                $globalCriteria = empty($globalCriteria) ? ['', '', ''] : $globalCriteria;
                $localCriteria = $this->getLocalCriteria([$range[0], $range[2], $range[4]], $taskSkills[$i]['id'], $curriculumId);
                $skillCards[$taskSkills[$i]['id']] =
                    [
                        'name' => $taskSkills[$i]['name'],
                        'globalCriteria' => $globalCriteria,
                        'localCriteria' => $localCriteria
                    ];
            }
            return
                [
                    'skillCards' => $skillCards,
                    'rangeForLabels' => $rangeForLabels
                ];
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function getGlobalCriteria($range, $skillId): array
    {
        try
        {
            $result = [];
            foreach($range as $r){
                $skillLevelId = DB::table('skill_level')
                    ->select('id')
                    ->where('skill_id', '=', $skillId)
                    ->where('scriibi_level_id', '=', $r)
                    ->get()
                    ->toArray();
                if(empty($skillLevelId))
                {
                    array_push($result, '');
                }
                else
                {
                    $globalcriteriaId = DB::table('skill_level_global_criteria')
                        ->select('id')
                        ->where('skill_level_id', '=', $skillLevelId[0]->id)
                        ->get()
                        ->toArray()[0]->id;
                    $globalcriteriaDescription = DB::table('global_criteria')
                        ->select('description')
                        ->where('id', $globalcriteriaId)
                        ->get()
                        ->toArray()[0]->description;
                    array_push($result, $globalcriteriaDescription);
                }
            }
            return $result;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    protected function getLocalCriteria($range, $skillId, $curriculumId): array
    {
        try
        {
            $result = [];
            foreach($range as $r){
                $temp_array = [];
                $skillLevelId = DB::table('skill_level')
                    ->select('id')
                    ->where('skill_id', '=', $skillId)
                    ->where('scriibi_level_id', '=', $r)
                    ->get()
                    ->toArray();
                if(empty($skillLevelId))
                {
                    array_push($result, []);
                    continue;
                }
                $curriculumSkillLevelId = DB::table('curriculum_skill_level')
                    ->select('id')
                    ->where('curriculum_id', $curriculumId)
                    ->where('skill_level_id', $skillLevelId[0]->id)
                    ->get()
                    ->map(function($curriculumSkillLevel)
                    {
                        return $curriculumSkillLevel->id;
                    })
                    ->toArray();
                $localCriteriaIds = DB::table('curriculum_skill_level_local_criteria')
                    ->select('local_criteria_id')
                    ->whereIn('curriculum_skill_level_id', $curriculumSkillLevelId)
                    ->get()
                    ->map(function($localCriteriaId)
                    {
                        return $localCriteriaId->local_criteria_id;
                    })
                    ->toArray();
                foreach($localCriteriaIds as $id){
                    $localCriteriaDetails = DB::table('local_criteria')
                        ->select('code', 'elaboration')
                        ->where('id', $id)
                        ->get()
                        ->toArray();
                    $criteria_array = \json_decode(json_encode($localCriteriaDetails), true);    //convert results from object to array
                    if(!($localCriteriaDetails === NULL)){
                        array_push($temp_array, $criteria_array);
                    }
                }
                array_push($result, $temp_array);
            }
            return $result;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    public function getScriibiRange($scriibiLevelId): array
    {
        try
        {
            $rangeAsValues = $this->calculateLeftShift($scriibiLevelId);
            return $this->scriibiLevelRepositoryInterface->getScriibiLevelRangeIds($rangeAsValues);
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    public function getShiftedScriibiRange($shift, $scriibiLevel): array
    {
        try
        {
            $rangeAsValues = $shift == "left" ? $this->calculateLeftShift($scriibiLevel) : $this->calculateRightShift($scriibiLevel);
            return $this->scriibiLevelRepositoryInterface->getScriibiLevelRangeIds($rangeAsValues);
        }
        catch(Exception $e)
        {
            return [];
        }
    }

    public function calculateLeftShift($scriibiLevelId): array
    {
        try
        {
            $range = [];
            $scriibiLevelValue = $this->scriibiLevelRepositoryInterface->getScriibiLevelValue($scriibiLevelId);
            if ($scriibiLevelValue == 0.0){
                $counter = -0.75;
                while($counter <= 1.0){
                    if($counter >= 0.0){
                        $counter += 0.5;
                    }else{
                        $counter += 0.25;
                    }
                    array_push($range, $counter);
                }
            }else{
                $counter = $scriibiLevelValue - 1;
                while($counter <= ($scriibiLevelValue + 1)){
                    array_push($range, $counter);
                    $counter += 0.5;
                }
            }
            return $range;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    public function calculateRightShift($scriibiLevelId): array
    {
        try
        {
            $range = [];
            $scriibiLevelValue = $this->scriibiLevelRepositoryInterface->getScriibiLevelValue($scriibiLevelId);
            $counter = $scriibiLevelValue - 1;
            while($counter <= ($scriibiLevelValue + 1)){
                array_push($range, $counter);
                $counter += 0.5;
            }
            return $range;
        }
        catch (Exception  $e)
        {
            return [];
        }
    }

    public function getScriibiRangeDetails($scriibiLevelIds): array
    {
        try
        {
            $primarySpecialGrades = [
                119 => 'D',
                120 => '0.5',
                121 => 'F',
                123 => 'F.5'
            ];
            $result = $this->scriibiLevelRepositoryInterface->getScriibiLevelRangeDetails($scriibiLevelIds);
            $length = count($result);

            for($i = 0; $i < $length; $i++)
            {
                if (array_key_exists($result[$i]['id'], $primarySpecialGrades)){
                    $result[$i]['scriibi_level'] = $primarySpecialGrades[$result[$i]['id']];
                }
            }
            return $result;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    public function getFullScriibiRange(): array
    {
        try
        {
            $result = [];
            foreach($this->scriibiLevelRepositoryInterface->all() as $scriibiLevel)
            {
                $result[$scriibiLevel['id']] = $scriibiLevel['scriibi_level'];
            }
            return $result;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    public function saveMarks($studentId, $writingTaskId, $skillsAssessedArray, $comment, $status)
    {
        try
        {
            $taskSkills = $this->writingTaskRepositoryInterface->getTaskSkillsOfWritingTask($writingTaskId);
            $taskSkillsCount = count($taskSkills);
            DB::beginTransaction();
            for($i = 0; $i < $taskSkillsCount; $i++)
                if(array_key_exists($taskSkills[$i]['id'], $skillsAssessedArray)){
                {
                    $searchCriteria =
                        [
                            'writing_task_id' => $writingTaskId,
                            'skill_id' => $taskSkills[$i]['id'],
                            'student_id' => $studentId
                        ];
                    $resultRow =
                        [
                            'writing_task_id' => $writingTaskId,
                            'skill_id' => $taskSkills[$i]['id'],
                            'student_id' => $studentId,
                            'result' => $skillsAssessedArray[$taskSkills[$i]['id']],
                            'task_skill_id' => $taskSkills[$i]['pivot']['id']
                        ];
                    DB::table('task_skill_student_result')->updateOrInsert($searchCriteria, $resultRow);
                }
            }
            $comment = isset($comment) ? $comment : null;
            $status = (int)$status === 1 ? 'complete' : 'incomplete';
            DB::table('writing_task_student')
                ->where('student_id', $studentId)
                ->where('writing_task_id', $writingTaskId)
                ->update(
                    [
                        'comment' => $comment,
                        'status_flag' => $status
                    ]
                );
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
