<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    public function schools(){
        return $this->hasOne('App\schools');
    }

    public function lessons(){
        return $this->belongsToMany('App\lessons', 'teachers_lessons', 'teachers_user_Id', 'lessons_lesson_Id');
    }
}
