<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use Exception;
use App\Rubric;
use App\RubricList;
use Illuminate\Http\Request;
use App\Services\RubricListingService;
use App\Http\Controllers\Controller;

class RubricListController extends Controller
{       
    /**
     * creates rubric objects for all rubrics of the currently logged in user
     */
    public function GenerateUserRubrics(Request $request, RubricListingService $rubricListingServiceInstance){
        try{
            $rubrics = $rubricListingServiceInstance->getTeacherTemplateList(Auth::user()->id);
            return view('rubric-list', ['rubrics' => json_encode($rubrics)]);
            // if($request->path() === 'rubric-list-mine')
            //     return (json_encode($rubricsData));
            // if($request->path() === 'rubric-list')
            //     return view('rubric-list', ['rubrics' => json_encode($rubricsData)]);
        }catch(Exception $ex){
            throw $ex;
        }
    }

    public function GenerateRubricDetails($rubric_id, RubricListingService $rubricListingServiceInstance){
        $rubrics = $rubricListingServiceInstance->getTeacherTemplate($rubric_id);
        return view('rubric-details', ['data' => $rubrics]);
        // $rubricList = new RubricList();
        // $rubricDetails = $rubricList->GenerateSingleRubric($rubric_id);
    }

    /**
     * creates rubric objects for all scriibi levels
    */
    public function GenerateScriibiRubricsForLevel($teacherLevel){
        try{
            $rubricList = new RubricList();
            if($teacherLevel === "NA"){
                $teacherLevel = $rubricList->getTeacherLevel(Auth::user()->user_Id);
            }
            $returnList = $rubricList->GenerateScriibiSpecificRubricList($teacherLevel);
            $rubricsData = RubricListController::expandTraits($returnList);
            $school_type_controller = new SchoolTypeController();
            $assessed_label_list = AssessedLevelLabelController::indexBySchoolType($school_type_controller->getSchoolTypeOfCurrentUser());
            $dataSet = ['assessed_labels' => $assessed_label_list, 'rubrics' => $rubricsData, 'teacher_level' => $teacherLevel]; 
            return (json_encode($dataSet));
        }catch(Exception $ex){
        //todo
        }
    }

    public function expandTraits($returnList){
        $returnData = [];
        foreach($returnList as $r){
            $skills = [];
            $traitsSkills = $r->getRubricTraitSkills();
            foreach($traitsSkills as $ts){
                $skillObjects = $ts->getSkills();
                foreach($skillObjects as $so){
                    array_push($skills, (object) array('name' => $so->getName(), 'color' => $ts->getColor()));
                }
            }
            array_push($returnData, (object) array('id' => $r->getId(), 'name' => $r->getName(), 'skills' => $skills));
        }
        return $returnData;
    }
}
