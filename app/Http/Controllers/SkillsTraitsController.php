<?php

namespace App\Http\Controllers;

use App\skills_traits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillsTraitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table('skills_traits')->get();
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
     * @param  \App\skills_traits  $skills_traits
     * @return \Illuminate\Http\Response
     */
    public function show(skills_traits $skills_traits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\skills_traits  $skills_traits
     * @return \Illuminate\Http\Response
     */
    public function edit(skills_traits $skills_traits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\skills_traits  $skills_traits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, skills_traits $skills_traits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\skills_traits  $skills_traits
     * @return \Illuminate\Http\Response
     */
    public function destroy(skills_traits $skills_traits)
    {
        //
    }
}
