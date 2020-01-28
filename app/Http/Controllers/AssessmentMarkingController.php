<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentMarkingController extends Controller
{
    public function GenerateStudentMarkingPage($student_id, $writing_task_id){

        return view('assessment-marking');
    }
}
