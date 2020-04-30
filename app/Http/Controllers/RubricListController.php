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
            $mp = Mixpanel::getInstance("2407d4231d98a30fa9d448eaa58bde99");

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
