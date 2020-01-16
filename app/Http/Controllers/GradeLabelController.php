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
        /**
         * code for testing initial db integration
         */
        // $gl = DB::table('grade_labels')->where('fk_school_type_id', '=', 1)->get();
        // $al = DB::table('assessed_level_labels')->where('school_type_id_fk', '=', 1)->get();

        return view('studentlist', ['grade_label' => $gl, 'assessed_label' => $al]);
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
}
