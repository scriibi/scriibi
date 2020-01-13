<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task_skills_results extends Model
{
    public function tasks_students(){
        return $this->hasOne('App\tasks_students');
    }
}
