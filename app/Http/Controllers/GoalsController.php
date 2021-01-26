<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use Exception;
use App\goals;
use App\Skill;
use App\Strategy;
use App\SkillLevel;
use App\StudentDefinition;
use App\SkillLevelStrategy;
use Illuminate\Http\Request;
use App\SkillLevelStudentDefinition;
use App\Http\Controllers\Controller;

class GoalsController extends Controller
{
    private function calculateGoalLevel($level){
        if(is_int($level))
        {
            return $level + 1;
        }
        else
        {
            if($level > 0)
            {
                return intval(round($level, 0, PHP_ROUND_HALF_UP));
            }
            else
            {
                return intval(round($level, 0, PHP_ROUND_HALF_DOWN));
            }
        }
    }

    public function generateGoalSheets(Request $request){
        $i = 0;
        $arr = array();

        // retrieve all the checkbox values for each individual goal sheet
        $inputs = $request->input('checkbox');

        if($inputs == null){
            return back()->withErrors(['message'=>'Please select at least one student result to generate goal sheets.']);
        }
        $student = $request->input('individual-student');
        /**
         * localize the tables needed so only a
         * few database calls have to be made
         */
        $skills_levels = SkillLevel::all('id','skill_id','scriibi_level_id')
            ->keyBy('id');

        $skills = Skill::all('id','name')
            ->keyBy('id');

        $skills_strategies = SkillLevelStrategy::all('id','skill_level_id','strategy_id')
            ->keyBy('strategy_id');

        $strategies = Strategy::all('id','description')
            ->keyBy('id');

        $skills_levels_student_def = SkillLevelStudentDefinition::all('id','student_definition_id','skill_level_id')
            ->keyBy('student_definition_id');

        $student_definitions = StudentDefinition::all('id','description')
            ->keyBy('id');

        $scriibi_levels = DB::table('scriibi_level')
                            ->select('id','scriibi_level')
                            ->get()
                            ->keyBy('id');

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
            $floatVal = floatval($input2[1]);
            if($floatVal && intval($floatVal) != $floatVal){
                $mark = $floatVal;
            }
            else{
                $mark = intval($input2[1]);
            }
            $mark = $this->calculateGoalLevel($mark);
            $studentName = $input2[2];

            // retrieve the skill name based on the skill id value
            foreach($skills as $skill){
                if($skill['id'] == $skillId)
                {
                    $skillName = $skill['name'];
                }
            }

            // retrieve the scriibi value id based on the scriibi value
            foreach($scriibi_levels as $sl){
                if($sl->scriibi_level == $mark){
                    $d = $sl->id;
                }
            }

            // retrieve the skill level id if both the skill id and the scriibi level id form a unique record
            foreach($skills_levels as $sk){
                if(($sk['skill_id'] == $skillId) && ($sk['scriibi_level_id'] == $d)){
                    $a = $sk['id'];
                }
            }

            // retrieve the strategy id of the matching skill level id
            foreach($skills_strategies as $ss){
                if($ss['skill_level_id'] == $a){
                    $b = $ss['strategy_id'];
                }
            }

            // retrieve the strategy description of the matching strategy id
            foreach($strategies as $s){
                if($s['id'] == $b){
                    $strategy = $s['description'];
                }
            }

            // retrieve the student definition id of the row with a matching skill level id
            foreach($skills_levels_student_def as $slsd){
                if($slsd['skill_level_id'] == $a){
                    $e = $slsd['id'];
                }
            }

            // retrieve the student definition description of the matching student definition id
            foreach($student_definitions as $std){
                if($std['id'] == $e){
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
        try
        {
            $floatVal = floatval($mark);
            if($floatVal && intval($floatVal) != $floatVal)
            {
                $mark = $floatVal;
            }
            else
            {
                $mark = intval($mark);
            }
            $newMark = $this->calculateGoalLevel($mark);

            $scriibiLevel = DB::table('scriibi_level')
                ->where('scriibi_level', '=', $newMark)
                ->select('id')
                ->get()
                ->toArray();

            $skillLevel = DB::table('skill_level')
                ->where('skill_id', '=', $skillId)
                ->where('scriibi_level_id', '=', $scriibiLevel[0]->id)
                ->get()
                ->toArray();
            return json_encode($skillLevel);

        }
        catch (Exception $e)
        {
            return json_encode([]);
        }
    }
}
