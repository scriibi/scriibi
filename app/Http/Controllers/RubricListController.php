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
            $mp = Mixpanel::getInstance("627c101ab25b3d2d138fec9b3fd83987");

            $mp->identify(Auth::user()->user_Id);
            $mp->track("Landed on a Key Page", array(
                    "Page Id"           => "P003",
                    "Page Name"         => "Rubric List"
                )
            );
            return view('rubric-list', ['rubrics' => $returnList]);
        }catch(Exception $ex){
            //todo
        }
    }
}
