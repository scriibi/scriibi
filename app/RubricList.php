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
        $writing_tasks = DB::table('writing_tasks')->select('writing_tasks.task_name')->where('fk_rubric_id', '=', $id)->get();

        return ['rubric' => $rubric, 'writing_tasks' => $writing_tasks];
    }
}
