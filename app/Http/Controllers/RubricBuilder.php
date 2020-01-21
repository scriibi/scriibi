<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubricBuilder extends Controller
{


    public function test(){
        // $array = array();

        // foreach($traitsCollection as $trait){

        //     $traitSkills = $skillsTraitsCollection->filter(function($value, $trait){return $value->skills_traits_traits_trait_Id == $trait['trait_Id']->trait_Id;});

        //     array_push($array, $traitSkills);

        //     //$traitCollection[] = new traitObject($trait->name, $trait->colour, $trait->icon, $traitSkills);
        // }

        return view('traits');
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
