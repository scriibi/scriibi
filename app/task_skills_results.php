<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task_skills_results extends Model
{
    protected $primaryKey = 'result_Id';

    public function tasks_students(){
        return $this->hasOne('App\tasks_students', 'result_Id', 'result_Id');
    }
}
