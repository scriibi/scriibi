<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use App\Rubrics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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
     * 
     * Currently two rubrics are being passed in the same form and the same insert actions are replicated twice
     * this has to be fixed in the upcomming iterations as this is highly inefficient
     */
    public function store(Request $request)
    {
        $rubric1_name = $request->input('rubric1_name');
        $rubric2_name = $request->input('rubric2_name');
        $assessed_level = $request->input('assessed_level');
        $rubric1_skills = $request->input('rubric1_skills');
        $rubric2_skills = $request->input('rubric2_skills');

        $new_rubric_1 = array('scriibi_levels_scriibi_level_Id' => $assessed_level, 'rubric_Name' => $rubric1_name);
        $new_rubric_2 = array('scriibi_levels_scriibi_level_Id' => $assessed_level, 'rubric_Name' => $rubric2_name);
        
        $newRubricId1 = DB::table('rubrics')->insertGetId($new_rubric_1);
        $newRubricId2 = DB::table('rubrics')->insertGetId($new_rubric_2);

        foreach($rubric1_skills as $skill){
            $new_rubric_skill = array('skills_skill_Id' => $skill, 'rubrics_rubric_Id' => $newRubricId1);
            DB::table('rubrics_skills')->insert($new_rubric_skill);
        }

        foreach($rubric2_skills as $skill){
            $new_rubric_skill = array('skills_skill_Id' => $skill, 'rubrics_rubric_Id' => $newRubricId2);
            DB::table('rubrics_skills')->insert($new_rubric_skill);
        }

        $new_teacher_rubric1 = array('rubrics_rubric_Id' => $newRubricId1, 'teachers_user_Id' => Auth::user()->user_Id);
        DB::table('rubrics_teachers')->insert($new_teacher_rubric1);

        $new_teacher_rubric2 = array('rubrics_rubric_Id' => $newRubricId2, 'teachers_user_Id' => Auth::user()->user_Id);
        DB::table('rubrics_teachers')->insert($new_teacher_rubric2);

        /**
         * mixpanel code
        */
        $mp = Mixpanel::getInstance("11fbca7288f25d9fb9288447fd51a424");

        $mp->identify(Auth::user()->user_Id);
        $mp->track("Rubric Created", array(
                "Rubric Id"                  => $newRubricId1,
                "Rubric Name"                => $rubric1_name,
                "Rubric Scriibi Level"       => $assessed_level,
                "Rubric Skill Ids"           => $rubric1_skills,
                "Related Rubric Ids"         => [$newRubricId2],
            )
        );

        $mp->track("Rubric Created", array(
            "Rubric Id"                  => $newRubricId2,
            "Rubric Name"                => $rubric2_name,
            "Rubric Scriibi Level"       => $assessed_level,
            "Rubric Skill Ids"           => $rubric2_skills,
            "Related Rubric Ids"         => [$newRubricId1],
        )
    );

        return redirect()->action('RubricListController@GenerateUserRubrics');
    }

    /**
     * deletes an existing rubric from the rubric table, rubrics_teachers table and also the rubrics_skills table
     */
    public function deleteRubric(Request $request){
        try{
            $rubricId = $request->input('rubricId');
            $assessments = DB::table('writing_tasks')->where('fk_rubric_id', '=', $rubricId)->get()->toArray();
            if(count($assessments) == 0){
                DB::table('rubrics_skills')->where('rubrics_rubric_Id', '=', $rubricId)->delete();
                DB::table('rubrics_teachers')->where('rubrics_rubric_Id', '=', $rubricId)->delete();
                DB::table('rubrics')->where('rubric_Id', '=', $rubricId)->delete();
            }else{
                DB::table('rubrics_teachers')->where('rubrics_rubric_Id', '=', $rubricId)->delete();
                DB::statement("UPDATE rubrics SET rubric_Name = CONCAT(rubric_Name, ' (deleted)') WHERE rubric_Id = $rubricId");
            }
            return redirect()->action('RubricListController@GenerateUserRubrics');
        }
        catch(\Exception $e){
            return redirect()->action('RubricListController@GenerateUserRubrics');
        }
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $rubricId = $request->input('rubric_id');
            $newName = $request->input('rubric_name');
            $newAsssessedLevel = $request->input('assessed_level');
            $rubricSkills = $request->input('rubric_skills');
            $new_rubric_skills = [];
            DB::table('rubrics')->where('rubric_Id', '=', $rubricId)->update(['scriibi_levels_scriibi_level_Id' => $newAsssessedLevel, 'rubric_Name' => $newName]);
            DB::table('rubrics_skills')->where('rubrics_rubric_Id', '=', $rubricId)->delete();

            foreach($rubricSkills as $rs){
                array_push($new_rubric_skills, ['skills_skill_Id' => $rs, 'rubrics_rubric_Id' => $rubricId]);
            }
            DB::table('rubrics_skills')->insert($new_rubric_skills);
            return redirect()->action('RubricListController@GenerateUserRubrics');
        }
        catch(\Exception $e){
            throw $e;
        }
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
