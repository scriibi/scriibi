<?php

namespace App;

use DB;
use Auth;
use Exception;          
use Illuminate\Database\Eloquent\Model;

class SkillCard
{
    private $writingTask;
    private $studentId;
    private $curriculumId;
    private $currentResult;
    private $skillId;
    private $skillName;
    private $scriibiRangeIds = array();
    private $scriibiLevelglobalCriteria = array();
    private $scriibiLevelLocaCriteria = array();

    public function __construct($name, $range, $skillid, $curriculumid, $studentId, $writingTask){
        $this->curriculumId = $curriculumid;
        $this->skillName = $name;
        $this->skillId = $skillid;
        foreach($range as $r){
            array_push($this->scriibiRangeIds, $r);
        }
        $this->studentId = $studentId;
        $this->writingTask = $writingTask;
    }

    public function getId(){
        return $this->skillId;
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

    public function getCurrentResult(){
        return $this->writingTask;
    }

    public function populateScriibiLevelglobalCriteria(){
        foreach($this->scriibiRangeIds as $sr){
            try{
                $skill_level_id = DB::table('skills_levels')->select('skills_levels_Id')->where('skills_levels_skills_skill_Id', '=', $this->skillId)->where('scriibi_levels_scriibi_Level_Id', '=', $sr)->get();
                $global_criteria_id = DB::table('skills_levels_global_criterias')->select('global_criteria_Id')->where('skills_levels_Id', '=', $skill_level_id[0]->skills_levels_Id)->get();
                $global_criteria_description = DB::table('global_criterias')->select('description')->where('global_criteria_Id', '=', $global_criteria_id[0]->global_criteria_Id)->get();
                array_push($this->scriibiLevelglobalCriteria, $global_criteria_description[0]->description);
            }
            catch(Exception $e){
                array_push($this->scriibiLevelglobalCriteria, null);
            }
        }
    }

    public function populateScriibiLevelLocaCriteria(){
        try{
            foreach($this->scriibiRangeIds as $sr){
                $temp_array = array();
                $curri_scriibi_level_skill_id = DB::table('curriculum_scriibi_level_skills')->select('curriculum_scriibi_levels_skills_Id')->where('curriculum_Id', '=', $this->curriculumId[0]->curriculum_details_curriculum_details_Id)->where('skill_Id', '=', $this->skillId)->where('scriibi_level_Id', '=', $sr)->get();
                $local_criteria_ids = DB::table('local_criteria_curriculum_scriibi_level_skills')->select('local_criteria_Id')->where('curriculum_scriibi_levels_skills_Id', '=', $curri_scriibi_level_skill_id[0]->curriculum_scriibi_levels_skills_Id)->get();
                foreach($local_criteria_ids as $lci){
                    $local_criteria_details = DB::table('local_criterias')->select('curriculum_code, description_elaboration')->where('local_criteria_Id', '=', $lci)->get();
                    array_push($temp_array, $local_criteria_details);
                }
                //dd($this->scriibiLevelLocaCriteria);
                array_push($this->scriibiLevelLocaCriteria, $temp_array);
            }
        }catch(Exception $e){

        }
    }

    public function getCurrentResultOfSkill(){
        //todo
    }
}
