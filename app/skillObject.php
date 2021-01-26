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
    // ################################################################################# older model file (delete later) ########################################################################################
    private $id;
    private $name;
    private $definition;
    private $flag;

    public function __construct($id, $name, $definition){
        $this->id = $id;
        $this->name = $name;
        $this->definition = $definition;
        $this->flag = false;
    }

    public function getId(){
        return $this->id;
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

        //grab the row from currLevelSkills where skill_Id matches this->ID, level = our level_Id and curriculum = current curriculum_Id
        $currLevelSkillsId = DB::table('curriculum_scriibi_level_skills')->select('curriculum_scriibi_levels_skills_Id')->where('skill_Id', '=', $this->id)->where('curriculum_Id', '=', $curriculum_Id)->where('scriibi_level_Id', '=', $level)->first();
        /**
         * we need to check if criteriasCurrLevelSkills contains our currLevelSkills_ID
         * if so, flag = true, if not, do nothing.
         */
            if(DB::table('local_criteria_curriculum_scriibi_level_skills')->where('curriculum_scriibi_levels_skills_Id', $currLevelSkillsId->curriculum_scriibi_levels_skills_Id)->exists()){
                $this->flag = true;
            }
    }
}
