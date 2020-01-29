<?php

namespace App;

use DB;
use Auth;
use Illuminate\Database\Eloquent\Model;

class SkillCard
{
    private $curriculumId;
    private $skillId;
    private $skillName;
    private $scriibiRangeIds = array();
    private $scriibiLevelglobalCriteria = array();
    private $scriibiLevelLocaCriteria = array();

    public function __construct($name, $range, $skillid, $curriculumid){
        $this->curriculumId = $curriculumid;
        $this->skillName = $name;
        $this->skillId = $skillid;
        foreach($range as $r){
            array_push($this->scriibiRange, $r);
        }
    }

    public function getName(){
        return $this->skillName;
    }

    public function getRange(){
        return $this->scriibiRange;
    }

    public function getGlobalCriteria(){
        return $this->scriibiLevelglobalCriteria;
    }

    public function getLocalCriteria(){
        return $this->scriibiLevelLocaCriteria;
    }

    public function populateScriibiLevelglobalCriteria(){
        foreach($scriibiRangeIds as $sr){
            $skill_level_id = DB::table('skills_levels')->select('skills_levels_Id')->where('skills_levels_skills_skill_Id', '=', $this->skillId)->where('scriibi_levels_scriibi_Level_Id', '=', $sr)->get();
            $global_criteria_id = DB::table('skills_levels_global_criterias')->select('global_criteria_Id')->where('skills_levels_Id', '=', $skill_level_id)->get();
            $global_criteria_description = DB::table('global_criterias')->select('description')->where('global_criteria_Id', '=', $global_criteria_id)->get();
            $scriibiLevelglobalCriteria[$sr] = $global_criteria_description;
        }
    }

    public function populateScriibiLevelLocaCriteria(){
        foreach($scriibiRangeIds as $sr){
            $curri_scriibi_level_skill_id = DB::table('curriculum_scriibi_level_skills')->select('curriculum_scriibi_levels_skills_Id')->where('curriculum_Id', '=', $this->curriculumId)->where('skill_Id', '=', $this->skillId)->where('scriibi_level_Id', '=', $sr)->get();
            $local_criteria_ids = DB::table('local_criteria_curriculum_scriibi_level_skills')->select('local_criteria_Id')->where('curriculum_scriibi_levels_skills_Id', '=', $curri_scriibi_level_skill_id)->get();
            foreach($local_criteria_ids as $lci){
                $local_criteria_details = DB::table('local_criterias')->select('curriculum_code, description_elaboration')->where('local_criteria_Id', '=', $lci)->get();
                $scriibiLevelLocaCriteria[$sr] = $local_criteria_details;
            }
            $scriibiLevelglobalCriteria[$sr] = $local_criteria_info;
        }
    }
}
