<?php

namespace App\Http\Controllers;

use DB;
use Auth;
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
            $stdController = new StudentsController();
            $students = $stdController->indexStudentsByClass();
        }catch(Exception $e){
            throw $e;
            abort(403, 'You do not have authorization to access this page!');
        }

        return view('studentlist', ['grade' => $labels['grades'], 'assessed' => $labels['assessed'], 'students' => $students]);
    }

    /**
     * returns an array of grade and assessed label values
     */
    public function GetLabels(){
        try{
            $school_details = DB::table('school_teachers')
            ->join('schools', 'school_teachers.schools_school_Id', 'schools.school_Id')
            ->select('schools.curriculum_details_curriculum_details_Id', 'schools.school_type_id')
            ->where('school_teachers.teachers_user_Id','=', Auth::user()->user_Id)
            ->first();

        $school_type = DB::table('school_types')
            ->where('fk_curriculum_id', '=', $school_details->curriculum_details_curriculum_details_Id)
            ->where('fk_school_type_id', '=', $school_details->school_type_id)
            ->first();

        $grade_label_list = DB::table('grade_labels')
            ->select('grade_label', 'grade_label_id')
            ->where('fk_school_type_id', '=', $school_type->school_type_id)
            ->get();

        $assessed_label_list = DB::table('assessed_level_labels')
            ->select('assessed_level_label', 'assessed_level_label_id')
            ->where('school_type_id_fk', '=', $school_type->school_type_id)
            ->get();
        }
        catch(Exception $e){
            abort(403, 'Please log in to view this page!');
        }

        return ['grades' => $grade_label_list, 'assessed' => $assessed_label_list];
    }
}
