<?php

namespace App\Http\Controllers;

use App\RubricList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssessementSetupController extends Controller
{
    /**
     * creates a new RubricList instance, 
     * populates it with the rubrics associated with the currently logged in user
     * and returns back an assessment-setup page
     * 
     */
    public function GenerateAssessmentSetup(){
        $rubricList = new RubricList();
        $returnList = $rubricList->GenerateTeacherSpecificRubricList();
        return view('assessment-setup', ['rubrics' => $returnList]);
    }
}
