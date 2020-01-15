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
        $student_assignment_level = $request->input('assignment_level');

        $scriibi_enrolled_level = 0;
        $scriibi_rubrik_level = 0;

        $student_record = array('student_First_Name' => '', 'student_Last_Name' => '', 'Student_Gov_Id' => '', 'enrolled_Level_Id' => '', 'rubrik_level' => '', 'schools_school_Id' => '', 'suggested_level' => '');
        
        DB::table('students')->insert($student_record);
    }

    public function retrieveEnrolledLevel($studentGrade){
        $enrolled_level = 0;
        switch (studentGrade){
            case 'Grade 1':
                $enrolled_level = 1;
                break;
            case 'Grade 2':
                $enrolled_level = 2;
                break;
            case 'Grade 3':
                $enrolled_level = 3;
                break;
            case 'Grade 4':
                
        }
    }

    public function retrieveRubrikLevel($studentAssignmentLevel){

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
