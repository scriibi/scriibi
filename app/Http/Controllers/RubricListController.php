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
    public function GenerateUserRubrics(Request $request){
        try{
            $rubricList = new RubricList();
            $returnList = $rubricList->GenerateTeacherSpecificRubricList();
            $rubricsData = [];
            foreach($returnList as $r){
                $skills = [];
                $traitsSkills = $r->getRubricTraitSkills();
                foreach($traitsSkills as $ts){
                    $skillObjects = $ts->getSkills();
                    foreach($skillObjects as $so){
                        array_push($skills, (object) array('name' => $so->getName(), 'color' => $ts->getColor()));
                    }
                }
                array_push($rubricsData, (object) array('id' => $r->getId(), 'name' => $r->getName(), 'skills' => $skills));
            }
            $mp = Mixpanel::getInstance("11fbca7288f25d9fb9288447fd51a424");

            $mp->identify(Auth::user()->user_Id);
            $mp->track("Page Viewed", array(
                    "Page Id"           => "P003",
                    "Page Name"         => "Rubric List",
                    "Page URL"          => "",
                    "Check Email"       => ""
                )
            );
            if($request->path() === 'rubric-list-mine')
                return (json_encode($rubricsData));
            if($request->path() === 'rubric-list')
                return view('rubric-list', ['rubrics' => json_encode($rubricsData)]);
            }catch(Exception $ex){
            //todo
        }
    }

    // public function GenerateScriibiRubrics(){
    //     try{

    //     }catch(Exception $e){
    //         //todo
    //     }
    // }

    public function GenerateRubricDetails($rubric_id){
        $rubricList = new RubricList();
        $rubricDetails = $rubricList->GenerateSingleRubric($rubric_id);
        return view('rubric-details', ['data' => $rubricDetails]);
    }

    public function GenerateScriibiRubrics(){
        try{
            $rubricList = new RubricList();
            $returnList = $rubricList->GenerateScriibiSpecificRubricList();
            $rubricsData = [];
            foreach($returnList as $r){
                $skills = [];
                $traitsSkills = $r->getRubricTraitSkills();
                foreach($traitsSkills as $ts){
                    $skillObjects = $ts->getSkills();
                    foreach($skillObjects as $so){
                        array_push($skills, (object) array('name' => $so->getName(), 'color' => $ts->getColor()));
                    }
                }
                array_push($rubricsData, (object) array('id' => $r->getId(), 'name' => $r->getName(), 'skills' => $skills));
            }   
                // dd($rubricsData);
                return (json_encode($rubricsData));
            }catch(Exception $ex){
            //todo
        }
    }
}
