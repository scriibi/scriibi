<?php

namespace App\Http\Controllers;

use Auth;
use Mixpanel;
use Exception;
use App\WritingTask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssessmentListController extends Controller
{
    public function GenerateAssessmentList(){
        try{
            $writting_taskList = array();
            $writing_task_controller = new WritingTasksController();
            $writing_tasks = $writing_task_controller->index();
            $mp = Mixpanel::getInstance("627c101ab25b3d2d138fec9b3fd83987");

            foreach($writing_tasks as $wt){
                array_push($writting_taskList, new WritingTask($wt->writing_task_Id, $wt->task_name, $wt->writing_Task_Description, $wt->created_at, $wt->created_Date, $wt->created_By_Teacher_User_Id, $wt->teaching_period_Id, $wt->fk_rubric_id));
            }
            $mp->identify(Auth::user()->user_Id);
            $mp->track("Landed on a Key Page", array(
                    "Page Id"           => "P002",
                    "Page Name"         => "Assessment List"
                )
            );
            return view('assessment-list', ['assessmentList' => $writting_taskList]);
        }catch(Exception $ex){
            //todo
        }
    }
}
