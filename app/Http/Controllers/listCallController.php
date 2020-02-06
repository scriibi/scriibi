<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use App\teachers;
use App\classes_teachers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class listCallController extends Controller
{
    public function generateList(){
        try{
            $school_type_controller = new SchoolTypeController();
            $grade_label_list = GradeLabelController::indexBySchoolType($school_type_controller->getSchoolTypeOfCurrentUser());
            $assessed_label_list = AssessedLevelLabelController::indexBySchoolType($school_type_controller->getSchoolTypeOfCurrentUser());
            
            $stdController = new StudentsController();
            $students = $stdController->indexStudentsByClass();
        }
        catch(Exception $e){
            abort(403, 'Please log in to view this page!');
        }
        return view('/AJAX/listCall', ['students' => $students,'grade' => $grade_label_list, 'assessed' =>  $assessed_label_list]);
    }

}
