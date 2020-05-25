<?php

namespace App\Http\Controllers;

use Auth;
use Mixpanel;
use Exception;
use App\traitObject;
use App\skillObject;
use App\traits;
use App\Rubrics;
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
        try{
            $text_types_and_assessed_labels_array = RubricBuilder::populateTraits();
            $mp = Mixpanel::getInstance("11fbca7288f25d9fb9288447fd51a424");

            $mp->identify(Auth::user()->user_Id);
            $mp->track("Page Viewed", array(
                    "Page Id"           => "P031",
                    "Page Name"         => "Rubric Creator",
                    "Page URL"          => "",
                    "Check Email"       => ""
                )
            );
            return view('rubrics', ['traitObjects' => $this->traits_skills_array, 'text_types'=> $text_types_and_assessed_labels_array['text_types'], 'assessed_labels' => $text_types_and_assessed_labels_array['assessed_labels'], 'level' => null]);
        }catch(Exception $ex){
            //todo
        }
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

    /**
     * populates all the skills in all traits which belong to the selected rubric level, the level above
     * and the level below and calculates the flags for all of the skills in the skills collection 
     * and also retirves the pre-selected skills for the existing rubric and returns a rubric edit page 
     */
    public function generateEditRubricView($rubricId){
        try{
            $rubric_details = Rubrics::find($rubricId)->toArray();
            $text_types_and_assessed_labels_array = RubricBuilder::populateTraits();
            RubricBuilder::populateSkillsInTraits($rubric_details["scriibi_levels_scriibi_level_Id"]);
            foreach($this->traits_skills_array as $tsa){
                $tsa->calcFlag($rubric_details["scriibi_levels_scriibi_level_Id"]);
            }
            $selected_rubric_skills = DB::table('rubrics_skills')->select('skills_skill_Id')->where('rubrics_rubric_Id', '=', $rubricId)->get();
            $temp = [];
            foreach($selected_rubric_skills as $srs){
                array_push($temp, $srs->skills_skill_Id);
            }
            return view('rubric-edit', ['rubric' => $rubric_details, 'level' => $rubric_details["scriibi_levels_scriibi_level_Id"], 'traitObjects' => $this->traits_skills_array, 'assessedLabels' => $text_types_and_assessed_labels_array['assessed_labels'], 'selectedSkills' => $temp, 'assessmentCount' => []]);
        }
        catch(Exception $e){
            throw $e;
        }
    }

    public function generateEditRubricViewWithFlags($rubricId, $level){
        try{
            $rubric_details = Rubrics::find($rubricId)->toArray();
            $text_types_and_assessed_labels_array = RubricBuilder::populateTraits();
            RubricBuilder::populateSkillsInTraits($level);
            foreach($this->traits_skills_array as $tsa){
                $tsa->calcFlag($level);
            }
            $selected_rubric_skills = DB::table('rubrics_skills')->select('skills_skill_Id')->where('rubrics_rubric_Id', '=', $rubricId)->get();
            // dump($rubric_details);
            // dump($rubric_details["scriibi_levels_scriibi_level_Id"]);
            // dump($this->traits_skills_array);
            // dump($text_types_and_assessed_labels_array['assessed_labels']);
            $temp = [];
            foreach($selected_rubric_skills as $srs){
                array_push($temp, $srs->skills_skill_Id);
            }
            return view('rubric-edit', ['rubric' => $rubric_details, 'level' => $level, 'traitObjects' => $this->traits_skills_array, 'assessedLabels' => $text_types_and_assessed_labels_array['assessed_labels'], 'selectedSkills' => $temp, 'assessmentCount' => []]);
        }
        catch(Exception $e){
            throw $e;
        }
    }
}

