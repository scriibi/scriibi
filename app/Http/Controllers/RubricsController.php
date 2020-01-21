<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Rubrics;
use Illuminate\Http\Request;

class RubricsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function returnTraits()
    {
        //$traitsArray = TraitsController::GetTraits();


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
     * @param  \App\Rubrics  $rubrics
     * @return \Illuminate\Http\Response
     */
    public function show(Rubrics $rubrics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rubrics  $rubrics
     * @return \Illuminate\Http\Response
     */
    public function edit(Rubrics $rubrics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rubrics  $rubrics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rubrics $rubrics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rubrics  $rubrics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rubrics $rubrics)
    {
        //
    }
}
