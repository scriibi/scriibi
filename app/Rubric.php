<?php

namespace App;

class Rubric
{
    private $id;
    private $name;
    private $rubic_trait_skills = array();

    public function __construct($id, $name){
        $this->id - $id;
        $this->name = $name;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getRubricTraitSkills(){
        return $this->rubic_trait_skills;
    }

    public function setName($name){
        $this->name = $name;
    }  

    public function setTraitSkills($trait_skills){
        foreach($trait_skills as $ts){
            array_push($this->rubic_trait_skills, $ts);
        }
    }

    public function populateTraits(){
        $traits = traits::get();
        foreach($traits as $trait){
            array_push($this->rubic_trait_skills, new traitObject($trait->trait_Id, $trait->trait_Name, $trait->colour, $trait->icon));
        }
    }

    /**
     * populates the private array with trait objects which contain rubric specific skills
    */
    public function getSkillsByRubric(){
        foreach($this->rubic_trait_skills as $tsa){
            $tsa->populateRubricSpecificSkills();
        }
    }
}
