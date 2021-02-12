<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;
use Mixpanel;
use Exception;
use App\writing_tasks;
use App\Services\DataViewService;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\SkillRepositoryInterface;
use App\Repositories\Interfaces\ClassRepositoryInterface;
use App\Repositories\Interfaces\GradeLabelRepositoryInterface;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface;
use App\Repositories\Interfaces\ScriibiLevelRepositoryInterface;
use App\Repositories\Interfaces\TeachingPeriodRepositoryInterface;
class DataViewController extends Controller
{
    public function getTraitView($selection = null, $subselection = null, UserRepositoryInterface $userRepository, DataViewService $dataViewService, ScriibiLevelRepositoryInterface $scriibiLevelRepository, SkillRepositoryInterface $skillRepository, ClassRepositoryInterface $classRepository, GradeLabelRepositoryInterface $gradeLabelRepository)
    {
        try
        {
            $position = 'Leader';
            $userSchool = $userRepository->getTeacherSchool(Auth::user()->id)[0];
            $userPosition = $userRepository->getUserPosition(Auth::user()->id, $position);
            $classes = null;
            if(!empty($userPosition))
            {
                if($selection === null)
                {
                    $selection = 'school';
                }
                $privilage = 'Leader';
                $grades = $gradeLabelRepository->getGradeLabels($userSchool['curriculum_school_type_id']);
                $classes = $classRepository->getClassesOfSchool($userSchool['id']);
            }
            else
            {
                $teacherScriibiLevels = $scriibiLevelRepository->getScriibiLevelsOfTeacher(Auth::user()->id);
                $classes = $classRepository->getClassesOfScriibiLevels($teacherScriibiLevels, $userSchool['id']);
                if($selection === null)
                {
                    $selection ='class';
                    $subselection = $classes[0]['id'];
                }
                $privilage = 'Teacher';
                $scriibiLevelsOfUser = $scriibiLevelRepository->getScriibiLevelsOfTeacher(Auth::user()->id);
                $grades = $gradeLabelRepository->getGradeLabelsForAUser($scriibiLevelsOfUser, $userSchool['curriculum_school_type_id']);
            }
            $dataset = $dataViewService->getTraitsOfWritingDataSet($selection, $subselection, $userSchool);
            $scriibiLevels = $this->getscriibiLevelHashMap($scriibiLevelRepository);
            $skills = $skillRepository->getAllSkills();
            return view('traits-data-view',
                [
                    'dataset' => $dataset,
                    'scriibiLevels' => $scriibiLevels,
                    'skills' => $skills,
                    'privilage' => $privilage,
                    'selection' => $selection,
                    'subselection' => $subselection,
                    'grades' => $grades,
                    'classes' => $classes,
                    'currentView' => 'trait'
                ]
            );
        }
        catch(Exception $e)
        {
            throw $e;
        }
    }

    public function getGrowthView($selection = null, $subselection = null, UserRepositoryInterface $userRepository, DataViewService $dataViewService, ScriibiLevelRepositoryInterface $scriibiLevelRepository, ClassRepositoryInterface $classRepository, GradeLabelRepositoryInterface $gradeLabelRepository, TeachingPeriodRepositoryInterface $teachingPeriodRepository)
    {
        try
        {
            $position = 'Leader';
            $userSchool = $userRepository->getTeacherSchool(Auth::user()->id)[0];
            $userPosition = $userRepository->getUserPosition(Auth::user()->id, $position);
            $classes = null;
            if(!empty($userPosition))
            {
                if($selection === null)
                {
                    $selection = 'school';
                }
                $privilage = 'Leader';
                $grades = $gradeLabelRepository->getGradeLabels($userSchool['curriculum_school_type_id']);
                $classes = $classRepository->getClassesOfSchool($userSchool['id']);
            }
            else
            {
                $teacherScriibiLevels = $scriibiLevelRepository->getScriibiLevelsOfTeacher(Auth::user()->id);
                $classes = $classRepository->getClassesOfScriibiLevels($teacherScriibiLevels, $userSchool['id']);
                if($selection === null)
                {
                    $selection ='class';
                    $subselection = $classes[0]['id'];
                }
                $privilage = 'Teacher';
                $scriibiLevelsOfUser = $scriibiLevelRepository->getScriibiLevelsOfTeacher(Auth::user()->id);
                $grades = $gradeLabelRepository->getGradeLabelsForAUser($scriibiLevelsOfUser, $userSchool['curriculum_school_type_id']);
            }
            $scriibiLevels = $this->getscriibiLevelHashMap($scriibiLevelRepository);
            $dataset = $dataViewService->getGrowthOfWritingDataSet($selection, $subselection, $userSchool, $scriibiLevels);
            $teachingPeriods = $teachingPeriodRepository->getTeachingPeriods($dataset['teachingPeriods']);
            return view('growth-data-view',
                [
                    'dataset' => $dataset['studentTemplates'],
                    'scriibiLevels' => $scriibiLevels,
                    'teachingPeriods' => $teachingPeriods,
                    'privilage' => $privilage,
                    'selection' => $selection,
                    'subselection' => $subselection,
                    'grades' => $grades,
                    'classes' => $classes,
                    'currentView' => 'growth'
                ]
            );
        }
        catch (Exception $e)
        {
            // todo
        }
    }

    public function getAssessmentView($selection = null, $subselection = null, $writingTask = null, UserRepositoryInterface $userRepository, DataViewService $dataViewService, ScriibiLevelRepositoryInterface $scriibiLevelRepository, SkillRepositoryInterface $skillRepository, ClassRepositoryInterface $classRepository, GradeLabelRepositoryInterface $gradeLabelRepository, WritingTaskRepositoryInterface $writingTaskRepository)
    {
        try
        {
            $writingTaskAvailability = true;
            $position = 'Leader';
            $userSchool = $userRepository->getTeacherSchool(Auth::user()->id)[0];
            $userPosition = $userRepository->getUserPosition(Auth::user()->id, $position);
            $classes = null;
            if(!empty($userPosition))
            {
                if($selection === null)
                {
                    $selection = 'school';
                }
                $privilage = 'Leader';
                $grades = $gradeLabelRepository->getGradeLabels($userSchool['curriculum_school_type_id']);
                $classes = $classRepository->getClassesOfSchool($userSchool['id']);
            }
            else
            {
                $teacherScriibiLevels = $scriibiLevelRepository->getScriibiLevelsOfTeacher(Auth::user()->id);
                $classes = $classRepository->getClassesOfScriibiLevels($teacherScriibiLevels, $userSchool['id']);
                if($selection === null)
                {
                    $selection ='class';
                    $subselection = $classes[0]['id'];
                }
                $privilage = 'Teacher';
                $scriibiLevelsOfUser = $scriibiLevelRepository->getScriibiLevelsOfTeacher(Auth::user()->id);
                $grades = $gradeLabelRepository->getGradeLabelsForAUser($scriibiLevelsOfUser, $userSchool['curriculum_school_type_id']);
            }
            if($writingTask ===  null)
            {
                if ($selection === 'school')
                {
                    $writingTaskList = $writingTaskRepository->getWritingTasksOfSchool($userSchool['id']);
                }
                else if  ($selection === 'class')
                {
                    $writingTaskList = $writingTaskRepository->getWritingTasksOfClass($subselection);
                }
                else  if ($selection ===  'grade')
                {
                    $temp = $classRepository->getClassesOfScriibiLevel($subselection, $userSchool['id']);
                    $writingTaskList = $writingTaskRepository->getWritingTasksOfClasses($this->extractIdValues($temp));
                }

                if(!empty($writingTaskList))
                {
                    $writingTask = $writingTaskList[0]['id'];
                }
                else
                {
                    $writingTaskAvailability = false;
                }
            }
            else
            {
                if ($selection === 'school')
                {
                    $writingTaskList = $writingTaskRepository->getWritingTasksOfSchool($userSchool['id']);
                }
                else if  ($selection === 'class')
                {
                    $writingTaskList = $writingTaskRepository->getWritingTasksOfClass($subselection);
                }
                else  if ($selection ===  'grade')
                {
                    $temp = $classRepository->getClassesOfScriibiLevel($subselection, $userSchool['id']);
                    $writingTaskList = $writingTaskRepository->getWritingTasksOfClasses($this->extractIdValues($temp));
                }
            }
            if($writingTaskAvailability)
            {
                $scriibiLevels = $this->getscriibiLevelHashMap($scriibiLevelRepository);
                $dataset = $dataViewService->getAssessmentDataSet($writingTask);
                $skillSet = null;
                if(!empty($dataset))
                {
                    $skillSetAsIds = $dataset[array_key_first($dataset)]['skills'];
                    $skillSet = $skillRepository->getSkillsWithTraits(array_keys($skillSetAsIds));
                }
            }
            else
            {
                $dataset = null;
                $scriibiLevels = null;
                $skillSet = null;
                $writingTaskList = null;
                $writingTask = null;
            }
            return view('assessments-data-view',
                [
                    'dataset' => $dataset,
                    'scriibiLevels' => $scriibiLevels,
                    'skills' => $skillSet,
                    'privilage' => $privilage,
                    'selection' => $selection,
                    'subselection' => $subselection,
                    'grades' => $grades,
                    'classes' => $classes,
                    'assessmentList' => $writingTaskList,
                    'currentAssessment' => $writingTask,
                    'currentView' => 'assessment'
                ]
            );
        }
        catch (Exception $e)
        {
            throw $e;
        }
    }

    protected function getscriibiLevelHashMap($scriibiLevelRepository): array
    {
        try
        {
            $scriibiLevelHashMap = [];
            $scriibiLevels = $scriibiLevelRepository->all();
            $scriibiLevelCount = count($scriibiLevels);
            for($i = 0; $i < $scriibiLevelCount; $i++)
            {
                $scriibiLevelHashMap[$scriibiLevels[$i]['id']] = $scriibiLevels[$i]['scriibi_level'];
            }
            return $scriibiLevelHashMap;
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
}
