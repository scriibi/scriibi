<?php

namespace App\Http\Controllers;

use App\WritingTask;
use App\writing_tasks;
use Illuminate\Http\Request;

class AssessmentEditController extends Controller
{
    public function generateAssessmentEdit($assessment_id){
        $writing_task_details = writing_tasks::find($assessment_id);
        $newWritingTask = new WritingTask($writing_task_details->writing_task_Id, $writing_task_details->task_name, $writing_task_details->writing_Task_Description, $writing_task_details->created_at, $writing_task_details->created_Date, $writing_task_details->created_By_Teacher_User_Id, $writing_task_details->teaching_period_Id, $writing_task_details->fk_rubric_id);
        $newWritingTask->populateStudents();

        return view('assessment-edit', ['writing_task' => $newWritingTask]);
    }
}
