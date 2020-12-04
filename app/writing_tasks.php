<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;


/**
 *
 * a writing task is created by a teacher in order to asses the skill level of students.
 *
 */
class writing_tasks extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'writing_task_Id';

    public function teaching_periods(){
        return $this->belongsTo('App\teaching_periods', 'teaching_period_Id', 'teaching_period_Id');
    }

    public function task_skills_result(){
        return $this->hasMany('App\task_skills_results', 'writing_tasks_writing_task_Id', 'writing_task_Id');
    }

    public function teacher(){
        return $this->belongsTo('App\teachers', 'created_By_Teacher_User_Id', 'user_Id');
    }

    public function students(){
        return $this->belongsToMany('App\students', 'writting_task_students', 'fk_writting_task_id', 'fk_student_id');
    }

    public function Rubrics(){
        return $this->belongsTo('App\Rubrics', 'fk_rubric_id', 'rubric_Id');
    }

    public function skills(){
        return $this->belongsToMany('App\skills', 'tasks_skills', 'writing_tasks_writing_task_Id', 'skills_skill_Id');
    }

    public static function teacherTasks($teacherId){
        return DB::table('writing_tasks')->select('writing_task_Id')->where('created_By_Teacher_User_Id', '=', $teacherId)->get()->toArray();
    }   
}
