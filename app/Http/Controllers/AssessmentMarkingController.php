<?php

namespace App\Http\Controllers;

use App\ScriibiLevels;
use App\writing_tasks;
use App\students;
use Illuminate\Http\Request;

class AssessmentMarkingController extends Controller
{
    public function GenerateStudentMarkingPage($student_id, $writing_task_id){
        $student = students::find($student_id);
        $skills = writing_tasks::find($writing_task_id)->skills;
        //return view('assessment-marking');
        $student_assessed_level = $student->rubrik_level;
        $range = AssessmentMarkingController::getScriibiRange($student_assessed_level);
        return view('assessment-marking', ['rubrics' => $range]);
    }

    public function getScriibiRange($student_scriibi_level){
        $range = array();
        $scriibi_levels = array();
        if ($student_scriibi_level == 0){
            array_push($range, $student_scriibi_level - 2);
            array_push($range, $student_scriibi_level - 1);
            array_push($range, $student_scriibi_level);
            array_push($range, $student_scriibi_level + 1);
            array_push($range, $student_scriibi_level + 2); 
        }else{
            array_push($range, $student_scriibi_level - 4);
            array_push($range, $student_scriibi_level - 2);
            array_push($range, $student_scriibi_level);
            array_push($range, $student_scriibi_level + 2);
            array_push($range, $student_scriibi_level + 4); 
        }
        // foreach($range as $r){
        //     $scriibi_level = ScriibiLevels::find($r)->scriibi_Level_Id;
        //     array_push($scriibi_levels, $scriibi_level);
        // }

        return $range;
    }
}
