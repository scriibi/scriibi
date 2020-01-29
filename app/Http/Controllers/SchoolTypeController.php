<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\school_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolTypeController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\school_type  $school_type
     * @return \Illuminate\Http\Response
     */
    public function show(school_type $school_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\school_type  $school_type
     * @return \Illuminate\Http\Response
     */
    public function edit(school_type $school_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\school_type  $school_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, school_type $school_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\school_type  $school_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(school_type $school_type)
    {
        //
    }

    /**
     * return the school type based on the currently logged in user
     */
    public function getSchoolTypeOfCurrentUser(){
        $school_details = DB::table('school_teachers')
        ->join('schools', 'school_teachers.schools_school_Id', 'schools.school_Id')
        ->select('schools.curriculum_details_curriculum_details_Id', 'schools.school_type_id')
        ->where('school_teachers.teachers_user_Id','=', Auth::user()->user_Id)
        ->first();

        return DB::table('school_types')->where('fk_curriculum_id', '=', $school_details->curriculum_details_curriculum_details_Id)->where('fk_school_type_identifier_id', '=', $school_details->school_type_id)->first();
}
}
