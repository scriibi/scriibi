<?php

namespace App;

use App\curriculum_scriibi_level_skills;
use App\local_criteria_curriculum_scriibi_level_skills;
use App\local_criterias;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Database\Eloquent\Model;

class skillObject
{
    private $id;
    private $name;
    private $definition;
    private $flag;

    public function __construct($id, $name, $definition){
        $this->id = $id;
        $this->name = $name;
        $this->definition = $definition;
    }

    public function getName(){
        return $this->name;
    }

    public function getDefinition(){
        return $this->definition;
    }

    public function getFlag(){
        return $this->flag;
    }

    public function setName($newName){
        $this->name = $newName;
    }

    public function setDefinition($newDefinition){
        $this->definition = $newDefinition;
    }

    public function setFlag($curriculum_Id, $level){

        $currLevelSkills = curriculum_scriibi_level_skills::all();
        $criteriaCurrLevelSkills = local_criteria_curriculum_scriibi_level_skills::all();

        //grab the rows from currLevelSkills where skill_Id matches this->ID, level = our level_Id and curriculum = current curriculum_Id
        $filtered = $currLevelSkills->where('skill_Id', $this->id)->where('curriculum_Id', $curriculum_Id)->where('scriibi_level_Id', $level);

        //pluck the primary keys from those rows
        $plucked = $filtered->pluck('curriculum_scriibi_levels_skills_Id');

        /**
         * not all rows from currLevelSkills will exist in criteriasCurrLevelSkills
         * we need to first check if criteriasCurrLevelSkills contains our currLevelSkills_ID
         * if it doesn't, return 0
         */

        foreach($plucked as $pluck){
            if(!($criteriaCurrLevelSkills->contains('curriculum_scriibi_levels_skills_Id', $pluck))){
                return 0;
            }
            else{
                $this->flag = 1;
            }
        }
    }

    public function newFunc(){
        $skills = App\curriculum_scriibi_level_skills::find()->LocalCriterias->all();
    }

}
