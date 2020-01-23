<?php

namespace App\Http\Controllers;

use DB;
use App\assessed_level_label;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssessedLevelLabelController extends Controller
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
     * @param  \App\assessed_level_label  $assessed_level_label
     * @return \Illuminate\Http\Response
     */
    public function show(assessed_level_label $assessed_level_label)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\assessed_level_label  $assessed_level_label
     * @return \Illuminate\Http\Response
     */
    public function edit(assessed_level_label $assessed_level_label)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\assessed_level_label  $assessed_level_label
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, assessed_level_label $assessed_level_label)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\assessed_level_label  $assessed_level_label
     * @return \Illuminate\Http\Response
     */
    public function destroy(assessed_level_label $assessed_level_label)
    {
        //
    }

    public static function indexBySchoolType($school_type){
        return DB::table('assessed_level_labels')->select('assessed_level_labels.*')->where('school_type_id_fk', '=', $school_type->school_type_id)->get();
    }
}
