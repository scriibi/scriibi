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
                $classes = $classRepository->getClassesOfTeacher(Auth::user()->id, $userSchool['id']);
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

    public function getGrowthView($selection = null, $subselection = null, UserRepositoryInterface $userRepository, DataViewService $dataViewService, ScriibiLevelRepositoryInterface $scriibiLevelRepository, SkillRepositoryInterface $skillRepository, ClassRepositoryInterface $classRepository, GradeLabelRepositoryInterface $gradeLabelRepository, TeachingPeriodRepositoryInterface $teachingPeriodRepository)
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
            }else{
                $classes = $classRepository->getClassesOfTeacher(Auth::user()->id, $userSchool['id']);
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
            $dataset = $dataViewService->getGrowthOfWritingDataSet('class', '36', $userSchool, $scriibiLevels);
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

    public function assessmentView($assessmentId){
        $teacherAssessment = writing_tasks::teacherTasks(Auth::user()->user_Id);
        $temp = array();
        foreach($teacherAssessment as $ta){
            array_push($temp, $ta->writing_task_Id);
        }
        if(in_array($assessmentId, $temp)){
            $assessmentView = new App\DataViewWrittingTask($assessmentId);
            $assessmentView->generateDataTable();
            $dataTable = $assessmentView->getDataTable();
            $skills = $assessmentView->getSkills();
            $writingTask = $assessmentView->getWritingTasks();
            return view('assessment-data-view', ['dataTable' => $dataTable, 'skills' => $skills, 'writingTask' => $writingTask]);
        }else{
            abort(403, 'You Cannot View This Assessment!');
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
}
