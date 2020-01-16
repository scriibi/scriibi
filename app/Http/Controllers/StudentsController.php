<?php

namespace App\Http\Controllers;

use DB;
use App\students;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $student_first_name = $request->input('first_name');
        $student_last_name = $request->input('last_name');
        $student_gov_id = $request->input('student_gov_id');
        $student_grade = $request->input('grade');
        $student_assignment_level = $request->input('assessed_level');

        $teacher_email = Auth::user()->email;
        $teacher_data = teachers::where('teacher_Email', '=', $teacher_data)->get();
        $school_id = school_teacher::where('teachers_user_Id', '=', $teacher_data->user_Id);

        $student_record = array('student_First_Name' => $student_gov_id, 'student_Last_Name' => $student_last_name,
         'Student_Gov_Id' => $student_gov_id, 'enrolled_Level_Id' => $student_grade,
         'rubrik_level' => $student_assignment_level, 'schools_school_Id' => $school_id, 'suggested_level' => null);
        
        DB::table('students')->insert($student_record);

        return redirect()->action('StudentInputController@ReturnStudentListPage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(students $students)
    {
        //
    }
}
