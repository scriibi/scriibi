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
    public $skills = array();


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
     * populate the built in skills array with rubric specific skills
     */
    public function populateRubricSpecificSkills(){
        $rubric_specific_skills = DB::table('rubrics_teachers')
            ->join('rubrics', 'rubrics_teachers.rubrics_rubric_Id', 'rubrics.rubric_Id')
            ->join('rubrics_skills', 'rubrics.rubric_Id', 'rubrics_skills.rubrics_rubric_Id')
            ->join('skills', 'rubrics_skills.skills_skill_Id', 'skills.skill_Id')
            ->join('skills_traits', 'skills.skill_Id', 'skills_traits.skills_traits_skills_skill_Id')
            ->select('skills.*')
            ->where('rubrics_teachers.teachers_user_Id', '=', Auth::user()->user_Id)
            ->where('skills_traits.skills_traits_traits_trait_Id', '=', $this->id)
            ->get();

        foreach($rubric_specific_skills as $skill){
            array_push($this->skills, new skillObject($skill->skill_Id, $skill->skill_Name, $skill->skill_def));
        }
    }

    public function calcFlag(){

        $schoolId = DB::table('school_teachers')->select('schools_school_Id')->where('teachers_user_Id', '=', Auth::user()->user_Id)->first();
        $curriculum = schools::find($schoolId)->curriculum;

        //$level = $request->input('level'); // check name of level laterrrrrr
        $level = 3;

        foreach($this->skills as $skill){
            $skill->setFlag($curriculum->curriculum_Id, $level);
        }
    }

}
