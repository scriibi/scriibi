<?php

namespace App\Http\Controllers;

use DB;
use App\grade_label;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GradeLabelController extends Controller
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
     * @param  \App\grade_label  $grade_label
     * @return \Illuminate\Http\Response
     */
    public function show(grade_label $grade_label)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\grade_label  $grade_label
     * @return \Illuminate\Http\Response
     */
    public function edit(grade_label $grade_label)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\grade_label  $grade_label
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, grade_label $grade_label)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\grade_label  $grade_label
     * @return \Illuminate\Http\Response
     */
    public function destroy(grade_label $grade_label)
    {
        //
    }

    /**
     * returns a list of grade labels for a passed in school type
     */
    public static function indexBySchoolType($school_type){
        return DB::table('grade_labels')->select('grade_label', 'grade_label_id')->where('fk_school_type_id', '=', $school_type->school_type_id)->get();
    }
}
