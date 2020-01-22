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
            $school_details = DB::table('school_teachers')
                ->join('schools', 'school_teachers.schools_school_Id', 'schools.school_Id')
                ->select('schools.curriculum_details_curriculum_details_Id', 'schools.school_type_id')
                ->where('school_teachers.teachers_user_Id','=', Auth::user()->user_Id)
                ->first();

             $school_type = DB::table('school_types')
                ->where('fk_curriculum_id', '=', $school_details->curriculum_details_curriculum_details_Id)->where('fk_school_type_id', '=', $school_details->school_type_id)
                ->first();

            $grade_label_list = GradeLabelController::indexBySchoolType($school_type);

            $assessed_label_list = AssessedLevelLabelController::indexBySchoolType($school_type);
        }
        catch(Exception $e){
            abort(403, 'Please log in to view this page!');
        }
        $stdController = new StudentsController();
        $students = $stdController->indexStudentsByClass();

        return view('/AJAX/listCall', ['students' => $students,'grade' => $grade_label_list, 'assessed' =>  $assessed_label_list]);
    }

}
