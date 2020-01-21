<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class traitObject
{

    private $name;
    private $colour;
    private $icon;
    private $skills = array();


    public function __construct($name, $colour, $icon, $skill = []){

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

    public function setName($newName){
        $this->name = $newName;
    }

    public function setColor($newColor){
        $this->colour = $newColor;
    }

    public function setIcon($newIcon){
        $this->icon = $newIcon;
    }

    public function setSkills($newSkilList){
        foreach($newSkilList as $newSkill){
            array_push($this->skills, $newSkill);
        }
    }

}
