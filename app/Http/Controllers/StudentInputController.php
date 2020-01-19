<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\teachers;

class StudentInputController extends Controller
{
    public function ReturnStudentListPage(){

        $teacher_email = Auth::user()->email;
        // $teacher_data = teachers::where('teacher_Email', '=', $teacher_data)->get();
        // $school_id = school_teacher::where('teachers_user_Id', '=', $teacher_data->user_Id);

        // $school_data = schools::where('school_Id', '=', $school_id)->get();
        // $school_type = school_type::where()->get();

        return view('studentlist');
    }
}
