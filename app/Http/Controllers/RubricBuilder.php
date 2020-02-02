<?php

namespace App\Http\Controllers;

use Auth;
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
    private $rubric_specific_trait_skills_array = array();

    /**
     * returns a trait collection with the underlying corresponding skills collections
     */
    public function populateTraits(){

        $traits = traits::get();

        foreach($traits as $trait){
            array_push($this->traits_skills_array, new traitObject($trait->trait_Id, $trait->trait_Name, $trait->colour, $trait->icon));
        }

        $text_types = RubricBuilder::getTextTypes();
        $school_type_controller = new SchoolTypeController();
        $assessed_label_list = AssessedLevelLabelController::indexBySchoolType($school_type_controller->getSchoolTypeOfCurrentUser());


        return ['text_types' => $text_types, 'assessed_labels' => $assessed_label_list];
    }

    /**
     * populates the skills collection with the skills corresponding to this trait
     */
    public function populateSkillsInTraits($level){
        foreach($this->traits_skills_array as $tsa){
            $tsa->filterLevelSpecificSkills($level);
        }
    }

    /**
     * generates the initial rubric builder page without any skills populated
     */
    public function generateRubricsView(){
        $text_types_and_assessed_labels_array = RubricBuilder::populateTraits();
        return view('rubrics', ['traitObjects' => $this->traits_skills_array, 'text_types'=> $text_types_and_assessed_labels_array['text_types'], 'assessed_labels' => $text_types_and_assessed_labels_array['assessed_labels'], 'level' => null]);
    }

    /**
     * populates all the skills in all traits which belong to the selected rubric level, the level above 
     * and the level below and calculates the flags for all of the skills in the skills collection 
    */
    public function generateRubricsViewWithFlags($level){
        $text_types_and_assessed_labels_array = RubricBuilder::populateTraits();
        RubricBuilder::populateSkillsInTraits($level);

        foreach($this->traits_skills_array as $tsa){
            $tsa->calcFlag($level);
        }

        return view('rubrics', ['traitObjects' => $this->traits_skills_array, 'text_types'=> $text_types_and_assessed_labels_array['text_types'], 'assessed_labels' => $text_types_and_assessed_labels_array['assessed_labels'], 'level' => $level]);
    }

    /**
     * return all the text types available
     */
    public function getTextTypes(){
        return text_types::get();
    }
}

