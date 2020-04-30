<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use Exception;
use App\teachers;
use App\classes_teachers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentInputController extends Controller
{
    /**
     * returns a studenlist view back with
     * teacher specific grade and assessed
     * level labels and their student data
     */
    public function ReturnStudentListPage(){
        try{
            $labels = StudentInputController::GetLabels();
            $mp = Mixpanel::getInstance("627c101ab25b3d2d138fec9b3fd83987");

            $mp->identify(Auth::user()->user_Id);
            $mp->track("Landed on a Key Page", array(
                    "Page Id"           => "P005",
                    "Page Name"         => "Student List"
                )
            );
            return view('/studentlist', ['grade' => $labels['grades'], 'assessed' => $labels['assessed']]);
        }catch(Exception $e){
            abort(403, 'You do not have authorization to access this page!');
        }
    }
    /**
     * returns an array of grade and assessed label values
     */
    public function GetLabels(){
        try{
            $school_type_controller = new SchoolTypeController();
            $grade_label_list = GradeLabelController::indexBySchoolType($school_type_controller->getSchoolTypeOfCurrentUser());
            $assessed_label_list = AssessedLevelLabelController::indexBySchoolType($school_type_controller->getSchoolTypeOfCurrentUser());

        }
        catch(Exception $e){
            abort(403, 'Please log in to view this page!');
        }
        return ['grades' => $grade_label_list, 'assessed' => $assessed_label_list];
    }
}
