<?php

namespace App\Http\Controllers;

use App\traitObject;
use App\skillObject;
use App\traits;
use App\skills;
use App\skills_traits;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubricBuilder extends Controller
{
    private $traits_skills_array = array();

    public function test(){

        $traits = traits::get();

        foreach($traits as $trait){
            array_push($this->traits_skills_array, new traitObject($trait->trait_Id, $trait->trait_Name, $trait->colour, $trait->icon));
        }

        RubricBuilder::populate();

        return view('rubrics', ['traitObjects' => $this->traits_skills_array]);

        // $traitsList = TraitsController::index();
        // $skillsList = SkillsTraitsController::index();

        // foreach($$traitsList as $trait){


        //$skillsTraitsCollection->filter(function($value, $trait){return $value->skills_traits_traits_trait_Id == $trait['trait_Id']->trait_Id;});

        //     array_push($array, $traitSkills);
        // }

        /**
         * iterate through array of skills_traits objects
         * foreach trait create a new traitObject with the attirbutes of the current trait and the assocaited skills.
         *
        */
    }

    public function populate(){
        foreach($this->traits_skills_array as $tsa){
            $tsa->populateSkills();
        }
    }

    public function calculate(){
        foreach($this->traits_skills_array as $tsa){
            foreach($tsa->getSkills as $skill){
                $skill->calcFlag();
            }
        }
    }
}
