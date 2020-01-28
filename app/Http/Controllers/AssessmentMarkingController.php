<?php

namespace App\Http\Controllers;

//use App\
use App\students;
use Illuminate\Http\Request;

class AssessmentMarkingController extends Controller
{
    public function GenerateStudentMarkingPage($student_id, $writing_task_id){
        $student = students::find($student_id);
        $skills = writing_tasks::find($writing_task_id)->skills;
        return view('assessment-marking');
        $student_assessed_level = $student->rubrik_level;
        //$find_scriibi_range  = 
    }

    public function getScriibiRange($student_scriibi_level){
        $range = array();
        //todo
    }
}
