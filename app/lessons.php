<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    protected $primaryKey = 'lesson_Id';

    public function teachers(){
        return $this->belongsToMany('App\teachers', 'teachers_lessons', 'lessons_lesson_Id', 'teachers_user_Id');
    }
}
