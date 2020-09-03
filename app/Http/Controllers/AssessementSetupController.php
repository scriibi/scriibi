<?php

namespace App\Http\Controllers;

use DB;
use Auth;
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
        $teacherLevel = DB::table('teachers_scriibi_levels')
            ->select('scriibi_levels_scriibi_Level_Id')
            ->where('teachers_user_Id', '=', Auth::user()->user_Id)
            ->get();
        $rubricList1 = new RubricList();
        $returnList1 = $rubricList1->GenerateTeacherSpecificRubricList();
        $rubricList2 = new RubricList();
        $returnList2 = $rubricList2->GenerateScriibiSpecificRubricList($teacherLevel[0]->scriibi_levels_scriibi_Level_Id);
        return view('assessment-setup', ['rubrics' => $returnList1, 'scriibiRubrics' => $returnList2]);
    }
}
