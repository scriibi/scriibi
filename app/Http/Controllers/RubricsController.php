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
    public function index()
    {

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
        $rubric_name = $request->input('rubric_name');
        $assessed_level = $request->input('assessed_level');
        $trait_id = $request->input('trait_id');
        $skills = $request->input('skills');
        $new_rubric = array('scriibi_levels_scriibi_level_Id' => $assessed_level, 'rubric_Name' => $rubric_name);
        $newStudentId = DB::table('rubrics')->insertGetId($new_rubric);

        foreach($skills as $skill){
            $new_rubric_skill = array('skills_skill_Id' => $skill, 'rubrics_rubric_Id' => $new_rubric);
            DB::table('rubrics_skills')->insert($new_rubric_skill);
        }

        $new_teacher_rubric = array('rubrics_rubric_Id' => $new_rubric, 'teachers_user_Id' => Auth::user()->user_Id);
        DB::table('rubrics_teachers')->insert($new_teacher_rubric);

        return redirect()->action('RubricListController@GenerateUserRubrics');
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
