<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/*
this associates a particular task with its corresponding skill and result.
rows in this table are then associated with particular students in "tasks_students"
*/


class task_skills_results extends Model
{
    protected $primaryKey = 'result_Id';

    public function tasks_students(){
        return $this->hasOne('App\tasks_students', 'result_Id', 'result_Id');
    }

    public function writing_task(){
        return $this->belongsTo('App\writing_tasks', 'writing_tasks_writing_task_Id', 'writing_task_Id');
    }

    public function skills(){
        return $this->belongsTo('App\skills', 'skills_skill_Id', 'skill_Id');
    }
}

