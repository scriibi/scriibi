<?php

namespace App;

use App\skills;
use App\skills_traits;
use App\skillObject;
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

    public function populateSkills(){

        $skills = traits::find($this->id)->skills;

        foreach($skills as $skill){
            array_push($this->skills, new skillObject($skill->skill_Id, $skill->skill_Name, $skill->skill_def));
        }
    }

    public function calcFlag(Request $request){

        // $curriculum = schools::find(Auth::user()->school_Id)->curriculum->first();
        $curriculum = schools::find(1)->curriculum->first();

        // $level = $request->input('level'); // check name of level laterrrrrr
        $level = 4;

        foreach($skills as $skill){
            $skill->setFlag($curriculum, $level);
        }
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

}
