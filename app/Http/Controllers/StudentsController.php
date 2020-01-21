<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use App\teachers;
use App\students;
use App\grade_label;
use App\assessed_level_label;
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
        $student_grade = $request->input('student_grade');
        $student_assignment_level = $request->input('assessed_level');
        $school = teachers::find(Auth::user()->user_Id)->schools->first();
        $grade_scriibi_level = grade_label::find($request->input('student_grade'))->ScriibiLevels->scriibi_Level_Id;
        $assessed_scriibi_level = assessed_level_label::find($request->input('assessed_level'))->ScriibiLevels->scriibi_Level_Id;
        
        $class = teachers::find(Auth::user()->user_Id)->classes->first()->class_Id;

        $student_record = array('student_First_Name' => $student_first_name, 'student_Last_Name' => $student_last_name,
        'Student_Gov_Id' => $student_gov_id, 'enrolled_Level_Id' => $grade_scriibi_level,
        'rubrik_level' => $assessed_scriibi_level, 'schools_school_Id' => $school->school_Id, 'suggested_level' => null);
        
        $newStudentId = DB::table('students')->insertGetId($student_record);

        $newStudentClass = DB::table('classes_students')->insert(['classes_class_Id' => $class, 'students_student_Id' => $newStudentId]);

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
    public function destroy($student_id, Request $request)
    {
        //$student_Id = $request->input('delete_Id');
        DB::table('students')->where('student_Id', '=', $student_id)->delete();
        //DB::table('classes_students')->where('students_student_Id', '=', $student_Id)->delete();
        return redirect()->action('StudentInputController@ReturnStudentListPage');
    }

    public function deleteStudent($student_id){
        DB::table('students')->where('student_Id', '=', $student_id)->delete();
        return redirect()->action('StudentInputController@ReturnStudentListPage');
    }
}
