<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;
use Mixpanel;
use Exception;
use App\writing_tasks;

class DataViewController extends Controller
{
    public function overview(){
        try{
            $overView = new App\DataViewOverview();
            $overView->generateDataTable();
            $dataTable = $overView->getDataTable();
            $writingTasks = $overView->getWritingTasks();
            $mp = Mixpanel::getInstance("2407d4231d98a30fa9d448eaa58bde99");
            $mp->identify(Auth::user()->user_Id);
            $mp->track("Landed on a Key Page", array(
                    "Page Id"           => "P004",
                    "Page Name"         => "Data View"
                )
            );
            return view('overall-data-view', ['dataTable' => $dataTable, 'writingTasks' => $writingTasks]);
        }catch(Exception $ex){
            //todo
        }
        
    }

    // public function studentView($student){
    //     //
    // }

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
}
