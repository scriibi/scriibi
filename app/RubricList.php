<?php

namespace App;

use DB;
use Auth;
use Illuminate\Database\Eloquent\Model;

class RubricList
{
    private $rubrics_list = array();
    /**
     * returns a list of rubrics for the currently logged in user
     */
    public function GenerateTeacherSpecificRubricList(){
        $rubrics = DB::table('rubrics_teachers')
            ->join('rubrics', 'rubrics_teachers.rubrics_rubric_Id', 'rubrics.rubric_Id')
            ->select('rubrics.*')
            ->where('rubrics_teachers.teachers_user_Id', '=', Auth::user()->user_Id)->get();

        foreach($rubrics as $r){
            array_push($this->rubrics_list, new Rubric($r->rubric_Id, $r->rubric_Name, $r->created_at));
        }

        foreach($this->rubrics_list as $rl){
            $rl->populateTraits();
            $rl->getSkillsByRubric();
        }

        return $this->rubrics_list;
    }

    public function GenerateSingleRubric($id){
        $rubric_details = DB::table('rubrics')->select('rubrics.*')->where('rubric_Id', '=', $id)->get()->toArray();
        $rubric = new Rubric($rubric_details[0]->rubric_Id, $rubric_details[0]->rubric_Name, $rubric_details[0]->created_at);
        $rubric->populateTraits();
        $rubric->getSkillsByRubric();
        $writing_tasks = DB::table('writing_tasks')->select('writing_tasks.*')->where('fk_rubric_id', '=', $id)->get();

        return ['rubric' => $rubric, 'writing_tasks' => $writing_tasks];
    }

    public function GenerateScriibiSpecificRubricList($teacherLevel){
        $schoolType = DB::table('school_teachers')
            ->join('teachers', 'school_teachers.teachers_user_Id', 'teachers.user_Id')
            ->join('schools', 'school_teachers.schools_school_Id', 'schools.school_Id')
            ->where('teachers.user_Id', '=', Auth::user()->user_Id)
            ->select('schools.curriculum_details_curriculum_details_Id', 'schools.school_type_identifier_id')
            ->get()
            ->toArray();
        
        $rubrics = DB::table('scriibi_rubrics')
            ->join('rubrics', 'scriibi_rubrics.rubric_id', 'rubrics.rubric_Id')
            ->where('scriibi_rubrics.curriculum_id', '=', $schoolType[0]->curriculum_details_curriculum_details_Id)
            ->where('scriibi_rubrics.school_type_identifier_id', '=', $schoolType[0]->school_type_identifier_id)
            ->where('rubrics.scriibi_levels_scriibi_level_Id', '=', $teacherLevel)
            ->select('rubrics.*')
            ->get();
        foreach($rubrics as $r){
            array_push($this->rubrics_list, new Rubric($r->rubric_Id, $r->rubric_Name, $r->created_at));
        }

        foreach($this->rubrics_list as $rl){
            $rl->populateTraits();
            $rl->getSkillsByScriibiSpecificRubrics();
        }

        return $this->rubrics_list;
    }

    public function getTeacherLevel($teacherId){
        $teacherLevel = DB::table('teachers_scriibi_levels')->select('scriibi_levels_scriibi_Level_Id')->where('teachers_user_Id', $teacherId)->get()->toArray();
        return $teacherLevel[0]->scriibi_levels_scriibi_Level_Id;
    }
}
