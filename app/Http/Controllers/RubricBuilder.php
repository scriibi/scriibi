<?php

namespace App\Http\Controllers;

use App\traitObject;
use App\skillObject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubricBuilder extends Controller
{
    private $traits_skills_array = array();

    public function test(){

        // $traitsList = TraitsController::index();
        // $skillsList = SkillsTraitsController::index();

        // foreach($$traitsList as $trait){

        //     //$traitSkills = $skillsTraitsCollection->filter(function($value, $trait){return $value->skills_traits_traits_trait_Id == $trait['trait_Id']->trait_Id;});

        //     array_push($array, $traitSkills);
        // }
        
        $temptrait = new traitObject('trait 1', 'red', 'red icon');
        $tempskill = new skillObject('skill 1', 'skill 1 def');

        $temptrait->setSkills([$tempskill]);
        
        return view('traits', ['trait' => $temptrait]);
    }

//this function returns
    public function someFunction(){
        $currScriibiSkillsCollection = DB::table('curriculum_scriibi_level_skills')->select('curriculum-scriibi_levels-skills_Id')->where('curriculum_Id', '=', $curriculum)->where('scriibi_level_Id', '=', $level)->get();
    }

    //$curriculum == current user's curriculum_Id
    //$level == scriibi_level that the teacher chooses at the top of rubric bulder
    //function should return 1 if a flag exists, 0 if not.
    public function CheckFlag($curriculum, $levels){
        
    }
}
