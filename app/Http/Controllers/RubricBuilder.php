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

        RubricBuilder::calculate();

        return view('rubrics', ['traitObjects' => $this->traits_skills_array]);

    }

    public function populate(){
        foreach($this->traits_skills_array as $tsa){
            $tsa->populateSkills();
        }
    }

    public function calculate(){
        foreach($this->traits_skills_array as $tsa){
                $tsa->calcFlag();
            }
    }
}

