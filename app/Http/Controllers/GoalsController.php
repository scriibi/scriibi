<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use App\goals;
use App\skills_levels;
use App\skills;
use App\skills_levels_strategies;
use App\strategies;
use App\skills_levels_student_def;
use App\student_definitions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoalsController extends Controller
{
    private function calculateGoalLevel($level){
        if(is_int($level)){
            return $level + 1;
        }
        else{
           return ceil($level);
        }
    }

    public function generateGoalSheets(Request $request){
        $i = 0;
        $arr = array();
        
        // retrieve all the checkbox values for each individual goal sheet
        $inputs = $request->input('checkbox');
        // dd($inputs);
        if($inputs == null){
            return back()->withErrors(['message'=>'Please select at least one student result to generate goal sheets.']);
        }
        $student = $request->input('individual-student');
   
        /**
         * localize the tables needed so only a 
         * few database calls have to be made
         */
        $skills_levels = skills_levels::all('skills_levels_Id','skills_levels_skills_skill_Id','scriibi_levels_scriibi_Level_Id')
            ->keyBy('skills_levels_Id');

        $skills = skills::all('skill_Id','skill_Name')
            ->keyBy('skill_Id');

        $skills_strategies = skills_levels_strategies::all('skills_levels_strategies_Id','skills_levels_Id','strategies_Id')
            ->keyBy('strategies_Id');

        $strategies = strategies::all('strategies_Id','strategy_Desc')
            ->keyBy('strategies_Id');

        $skills_levels_student_def = skills_levels_student_def::all('skills_levels_student_defs_Id','student_definitions_Id','skills_levels_Id')
            ->keyBy('student_definitions_Id');

        $student_definitions = student_definitions::all('student_definitions_Id','description')
            ->keyBy('student_definitions_Id');

        $scriibi_levels = DB::table('scriibi_levels')
                            ->select('scriibi_Level_Id','scriibi_Level')
                            ->get()
                            ->keyBy('scriibi_Level_Id');

        /** 
         * loop through each goal sheet request and
         * generate strategies and student definitions
         * for each of them 
         */ 
        foreach ($inputs as $input){
            $a = null;
            $b = null;
            $e = null;
            $skillName = null;
            $strategy = null;
            $definition = null;     
            // split each goal string into three individual peices of data 
            $input2 = explode('?', $input);
            $skillId = intval($input2[0]);
            $mark = $this->calculateGoalLevel(intval($input2[1]));
            $studentName = $input2[2];
            
            // retrieve the skill name based on the skill id value
            foreach($skills as $skill){
                if($skill['skill_Id'] == $skillId)
                {
                    $skillName = $skill['skill_Name'];
                }
            }

            // retrieve the scriibi value id based on the scriibi value
            foreach($scriibi_levels as $sl){
                if($sl->scriibi_Level == $mark){
                    $d = $sl->scriibi_Level_Id;
                }
            }
                    
            // retrieve the skill level id if both the skill id and the scriibi level id form a unique record
            foreach($skills_levels as $sk){
                if(($sk['skills_levels_skills_skill_Id'] == $skillId) && ($sk['scriibi_levels_scriibi_Level_Id'] == $d)){
                    $a = $sk['skills_levels_Id'];                
                }
            }

            // retrieve the strategy id of the matching skill level id
            foreach($skills_strategies as $ss){
                if($ss['skills_levels_Id'] == $a){
                    $b = $ss['strategies_Id'];                
                }
            }

            // retrieve the strategy description of the matching strategy id
            foreach($strategies as $s){
                if($s['strategies_Id'] == $b){
                    $strategy = $s['strategy_Desc'];                
                }
            }
            
            // retrieve the student definition id of the row with a matching skill level id
            foreach($skills_levels_student_def as $slsd){
                if($slsd['skills_levels_Id'] == $a){
                    $e = $slsd['student_definitions_Id'];
                }
            }

            // retrieve the student definition description of the matching student definition id
            foreach($student_definitions as $std){
                if($std['student_definitions_Id'] == $e){
                    $definition = $std['description'];
                }
            }
            
            // append each goal sheet data set into an array
            if($student == "Generate All Goal Sheets"){
                $arr[$i] = array(
                    "skill_name" => $skillName,
                    "student_name" => $studentName,
                    "strategy" => $strategy,
                    "student_definiton" => $definition,
                );
                $i++;
            }else{
                if($student === $studentName){
                    $arr[$i] = array(
                        "skill_name" => $skillName,
                        "student_name" => $studentName,
                        "strategy" => $strategy,
                        "student_definiton" => $definition,
                    );
                    $i++;
                }
            }

        }
    
        return view('goalSheet', ['arr' => $arr]);
    }

    public function CheckSkillLevelAvailability($skillId, $mark){
        $newMark = $this->calculateGoalLevel($mark);
        $scriibiLevel = DB::table('scriibi_levels')->where('scriibi_Level', '=', $newMark)->select('scriibi_levels.scriibi_Level_Id')->get()->toArray();
        $skillLevel = DB::table('skills_levels')->where('skills_levels_skills_skill_Id', '=', $skillId)->where('scriibi_levels_scriibi_Level_Id', '=', $scriibiLevel[0]->scriibi_Level_Id)->get()->toArray();
        return json_encode($skillLevel);

    }

    // public function printGoalSheets($array){
    //     $pdf = PDF::loadView('goalSheet', array('arr' => $arr));  
    //     return $pdf->download('goals.pdf');
    // }
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
     * @param  \App\goals  $goals
     * @return \Illuminate\Http\Response
     */
    public function show(goals $goals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\goals  $goals
     * @return \Illuminate\Http\Response
     */
    public function edit(goals $goals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\goals  $goals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, goals $goals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\goals  $goals
     * @return \Illuminate\Http\Response
     */
    public function destroy(goals $goals)
    {
        //
    }
}
