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
        $rubricList1 = new RubricList();
        $returnList1 = $rubricList1->GenerateTeacherSpecificRubricList();
        $rubricList2 = new RubricList();
        $returnList2 = $rubricList2->GenerateScriibiSpecificRubricList();
        return view('assessment-setup', ['rubrics' => $returnList1, 'scriibiRubrics' => $returnList2]);
    }
}
