<?php

namespace App\Http\Controllers;

use App\RubricList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssessementSetup extends Controller
{
    public function GenerateAssessmentSetup(){
        $rubricList = new RubricList();
        $returnList = $rubricList->GenerateTeacherSpecificRubricList();
        return view('assessment-setup', ['rubrics' => $returnList]);
    }
}
