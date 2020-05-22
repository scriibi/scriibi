<?php

namespace App;

use App\skills;
use App\skills_traits;
use App\skillObject;
use App\school_teachers;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Database\Eloquent\Model;

class traitObject
{
    private $id;
    private $name;
    private $colour;
    private $icon;
    private $skills = array();

    public function __construct($id, $name, $colour, $icon, $skill = []){

        $this->id = $id;
        $this->name = $name;
        $this->colour  = $colour;
        $this->icon  = $icon;
        $this->skills = $skill;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getColor(){
        return $this->colour;
    }

    public function getIcon(){
        return $this->icon;
    }

    public function getSkills(){
        return $this->skills;
    }

    public function getSkill($index){
        return $this->skills[$index];
    }

    public function setName($newName){
        $this->name = $newName;
    }

    public function setColor($newColor){
        $this->colour = $newColor;
    }

    public function setIcon($newIcon){
        $this->icon = $newIcon;
    }

    public function setSkills($newSkillList){
        foreach($newSkillList as $newSkill){
            array_push($this->skills, $newSkill);
        }
    }

    public function isSkillsEmpty(){
        if(empty($this->skills)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * populates the built in skills array with trait specific skills
     */
    public function populateAllSkills(){
        $popSkills = traits::find($this->id)->skills;
        foreach($popSkills as $skill){
            array_push($this->skills, new skillObject($skill->skill_Id, $skill->skill_Name, $skill->skill_def));
        }
    }

    /**
     * populates the built in skills array with trait specific skills which belong to three scriibi levels
     * which are the currently selected rubric scriibi level, one level above and one level below
     */
    public function filterLevelSpecificSkills($level){
        $assessed_level_range = array();
        $temp_array = array();

        $this->populateAllSkills();
        $scriibi_level = ScriibiLevels::find($level)->scriibi_Level;

        if($scriibi_level == 0.0){
            $scriibi_value_ids = DB::table('scriibi_levels')->select('scriibi_Level_Id')->whereIn('scriibi_Level', [$scriibi_level - 0.5, $scriibi_level, $scriibi_level + 1.0])->get(); 
        }else{
            $scriibi_value_ids = DB::table('scriibi_levels')->select('scriibi_Level_Id')->whereIn('scriibi_Level', [$scriibi_level - 1.0, $scriibi_level, $scriibi_level + 1.0])->get(); 
        }

        foreach($scriibi_value_ids as $svi){
            array_push($assessed_level_range, $svi->scriibi_Level_Id);
        }

        $popSkills = traits::find($this->id)->skills;
        $skills_levels = DB::table('skills_levels')->select('skills_levels.skills_levels_skills_skill_Id')->whereIn('skills_levels.scriibi_levels_scriibi_Level_Id', $assessed_level_range)->get()->unique();
        
        foreach($skills_levels as $sl){
            array_push($temp_array, $sl->skills_levels_skills_skill_Id);
        }
        
        foreach($this->skills as $skill){
            if(!(in_array($skill->getId(), $temp_array))){
                unset($this->skills[array_search($skill, $this->skills)]);
            }
        }
    } 

    /**
     * populate the built in skills array with rubric specific skills
     */
    public function populateRubricSpecificSkills($rubricId){
        $rubric_specific_skills = DB::table('rubrics_teachers')
            ->join('rubrics', 'rubrics_teachers.rubrics_rubric_Id', 'rubrics.rubric_Id')
            ->join('rubrics_skills', 'rubrics.rubric_Id', 'rubrics_skills.rubrics_rubric_Id')
            ->join('skills', 'rubrics_skills.skills_skill_Id', 'skills.skill_Id')
            ->join('skills_traits', 'skills.skill_Id', 'skills_traits.skills_traits_skills_skill_Id')
            ->select('skills.*')
            ->where('rubrics_teachers.teachers_user_Id', '=', Auth::user()->user_Id)
            ->where('skills_traits.skills_traits_traits_trait_Id', '=', $this->id)
            ->where('rubrics.rubric_Id', '=', $rubricId)
            ->get();

        foreach($rubric_specific_skills as $skill){
            array_push($this->skills, new skillObject($skill->skill_Id, $skill->skill_Name, $skill->skill_def));
        }
    }

    public function calcFlag($level){

        $schoolId = DB::table('school_teachers')->select('schools_school_Id')->where('teachers_user_Id', '=', Auth::user()->user_Id)->first();
        $curriculum = schools::find($schoolId->schools_school_Id)->curriculum;

        foreach($this->skills as $skill){
            $skill->setFlag($curriculum->curriculum_Id, $level);
        }
    }

}
