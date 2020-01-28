<?php

namespace App\Http\Controllers;

use App\WritingTask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssessmentListController extends Controller
{
    public function GenerateAssessmentList(){
        $writting_taskList = array();
        $writing_task_controller = new WritingTasksController();
        $writing_tasks = $writing_task_controller->index();
        foreach($writing_tasks as $wt){
            array_push($writting_taskList, new WritingTask($wt->writing_task_Id, $wt->task_name, $wt->writing_Task_Description, $wt->created_at, $wt->created_Date, $wt->created_By_Teacher_User_Id, $wt->teaching_period_Id, $wt->fk_rubric_id));
        }
        return view('Assessment-list', ['assessmentList' => $writting_taskList]);
    }
}
