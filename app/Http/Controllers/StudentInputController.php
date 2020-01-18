<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\teachers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentInputController extends Controller
{
    public function ReturnStudentListPage(){

        $school = DB::table('school_teachers')->where('school_teacher_Id', '=', Auth::user()->user_Id);
        $school_type = DB::table('school_types')->where('fk_curriculum_id', '=', $school->curriculum_details_curriculum_details_Id)->where('fk_school_type_id', '=', $school->school_type_id)->get();
        $grade_label_list = DB::table('grade_labels')->where('fk_school_type_id', '=', $school_type->school_type_id)->get();
        $assessed_label_list = DB::table('assessed_level_labels')->where('school_type_id_fk', '=', $school_type->school_type_id)->get();

        return view('studentlist', ['grade' => $grade_label_list, 'assessed' => $assessed_label_list]);
    }
}
