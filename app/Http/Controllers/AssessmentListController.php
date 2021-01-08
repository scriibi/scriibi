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
//            $writting_taskList = array();
//            $writing_task_controller = new WritingTasksController();
//            $writing_tasks = $writing_task_controller->index();
//
//            foreach($writing_tasks as $wt){
//                array_push($writting_taskList, new WritingTask($wt->writing_task_Id, $wt->task_name, $wt->writing_Task_Description, $wt->created_at, $wt->created_Date, $wt->created_By_Teacher_User_Id, $wt->teaching_period_Id, $wt->fk_rubric_id));
//            }
            return view('assessment-list', [
                'assessmentList' => []
            ]);
        }catch(Exception $ex){
            //todo
        }
    }

    public function GenerateDeletedAssessmentList(){
        try{
            $deleted_writing_taskList = array();
            $writing_task_controller = new WritingTasksController();
            $writing_tasks = $writing_task_controller->getSoftDeletes();
            if(count($writing_tasks) > 0){
                foreach($writing_tasks as $wt){
                    array_push($deleted_writing_taskList, new WritingTask($wt->writing_task_Id, $wt->task_name, $wt->writing_Task_Description, $wt->created_at, $wt->created_Date, $wt->created_By_Teacher_User_Id, $wt->teaching_period_Id, $wt->fk_rubric_id));
                }
            }
            //dd($deleted_writing_taskList);
            return view('assessment-trashcan', ['assessmentList' => $deleted_writing_taskList]);
        }catch(Exception $e){
            $e;
        }
    }
}
