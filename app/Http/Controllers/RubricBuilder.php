<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubricBuilder extends Controller
{
    public function test(){
        // $skillsTraitsCollection = DB::table('skills_traits')->get();
        // $array = array();

        // foreach($traitsCollection as $trait){

        //     $traitSkills = $skillsTraitsCollection->filter(function($value, $trait){return $value->skills_traits_traits_trait_Id == $trait['trait_Id']->trait_Id;});

        //     array_push($array, $traitSkills);

        //     //$traitCollection[] = new traitObject($trait->name, $trait->colour, $trait->icon, $traitSkills);
        // }

        return view('traits');
    }
}
