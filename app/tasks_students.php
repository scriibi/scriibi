<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks_students extends Model
{
    protected $primaryKey = 'tasks_students_Id';

    public function ScriibiLevels(){
        return $this->belongsTo('App/ScriibiLevels', 'level_before_attempt', 'scriibi_Level_Id');
    }

    public function task_skills_results(){
        return $this->belongsTo('App\task_skills_results', 'result_Id', 'result_Id');
    }
}
