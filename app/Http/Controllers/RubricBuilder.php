<?php

namespace App\Http\Controllers;

use App\traitObject;
use App\skillObject;
use App\traits;
use App\skills;
use App\skills_traits;
use App\text_types;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubricBuilder extends Controller
{
    private $traits_skills_array = array();

    /**
     * returns a trait collection with the underlying corresponding skills collections
     */
    public function populateTraits(){

        $traits = traits::get();

        foreach($traits as $trait){
            array_push($this->traits_skills_array, new traitObject($trait->trait_Id, $trait->trait_Name, $trait->colour, $trait->icon));
        }

        RubricBuilder::populateSkillsInTraits();
        //RubricBuilder::calculateFlagsForSkills();

        $text_types = RubricBuilder::getTextTypes();

        $school_type_controller = new SchoolTypeController();
       
        $assessed_label_list = AssessedLevelLabelController::indexBySchoolType($school_type_controller->getSchoolTypeOfCurrentUser());

        return view('rubrics', ['traitObjects' => $this->traits_skills_array, 'text_types'=> $text_types, 'assessed_labels' => $assessed_label_list]);

    }

    /**
     * populates the skills collection with the skills corresponding to this trait
     */
    public function populateSkillsInTraits(){
        foreach($this->traits_skills_array as $tsa){
            $tsa->populateSkills();
        }
    }

    /**
     * calculates the flags for all of the skills in the skills collection of this trait object
    */
    public function calculateFlagsForSkills(){
        foreach($this->traits_skills_array as $tsa){
                $tsa->calcFlag();
            }
    }

    /**
     * 
     */
    public function getTextTypes(){
        return text_types::get();
    }
}

