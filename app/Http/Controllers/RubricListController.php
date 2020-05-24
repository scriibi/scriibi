<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use Exception;
use App\Rubric;
use App\RubricList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubricListController extends Controller
{       
    /**
     * creates rubric objects for all rubrics of the currently logged in user
     */
    public function GenerateUserRubrics(){
        try{
            $rubricList = new RubricList();
            $returnList = $rubricList->GenerateTeacherSpecificRubricList();
            $mp = Mixpanel::getInstance("916bc248c70bef14305273a1d9142fa5");

            $mp->identify(Auth::user()->user_Id);
            $mp->track("Page Viewed", array(
                    "Page Id"           => "P003",
                    "Page Name"         => "Rubric List",
                    "Page URL"          => "",
                    "Check Email"       => ""
                )
            );
            return view('rubric-list', ['rubrics' => $returnList]);
        }catch(Exception $ex){
            //todo
        }
    }

    public function GenerateRubricDetails($rubric_id){
        $rubricList = new RubricList();
        $rubricDetails = $rubricList->GenerateSingleRubric($rubric_id);
        return view('rubric-details', ['data' => $rubricDetails]);
    }
}
