<?php

namespace App;

class Rubric
{
    // ################################################################################# older model file (delete later) ########################################################################################
    private $id;
    private $name;
    private $dateCreated;
    private $rubic_trait_skills = array();

    public function __construct($id, $name, $date = '01/01/2020'){
        $this->id = $id;
        $this->name = $name;
        $this->dateCreated = $date;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getDate(){
        return $this->dateCreated;
    }

    public function getRubricTraitSkills(){
        return $this->rubic_trait_skills;
    }

    public function setName($name){
        $this->name = $name;
    }  

    public function setDate($date){
        $this->dateCreated = $date; 
    }
    
    public function setTraitSkills($trait_skills){
        foreach($trait_skills as $ts){
            array_push($this->rubic_trait_skills, $ts);
        }
    }

    /**
     * return all the tratis for the rubric
     */
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
            $tsa->populateRubricSpecificSkills($this->id);
        }
    }

    public function getSkillsByScriibiSpecificRubrics(){
        foreach($this->rubic_trait_skills as $tsa){
            $tsa->populateScriibiRubricSpecificSkills($this->id);
        }
    }

    public function getSkillsByWritingTask($taskId){
        foreach($this->rubic_trait_skills as $tsa){
            $tsa->populateWritingTaskSpecificSkills($taskId);
        }
    }
}
