<?php

namespace App\Http\Controllers;

use DB;
use App\traits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TraitsController extends Controller
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

    public function GetTraits()
    {


        $traitsCollection = DB::table('traits')->get();
        $skillsTraitsCollection = DB::table('skills_traits')->get();
        $array = array();

        foreach($traitsCollection as $trait){

            $traitSkills = $skillsTraitsCollection->filter(function($value, $trait){return $value->skills_traits_traits_trait_Id == $trait['trait_Id']->trait_Id;});

            array_push($array, $traitSkills);

            //$traitCollection[] = new traitObject($trait->name, $trait->colour, $trait->icon, $traitSkills);
        }

        return view('traits', ['traitskill' => $array]);

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
     * @param  \App\traits  $traits
     * @return \Illuminate\Http\Response
     */
    public function show(traits $traits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\traits  $traits
     * @return \Illuminate\Http\Response
     */
    public function edit(traits $traits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\traits  $traits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, traits $traits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\traits  $traits
     * @return \Illuminate\Http\Response
     */
    public function destroy(traits $traits)
    {
        //
    }
}
