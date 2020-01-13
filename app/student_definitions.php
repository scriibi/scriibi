<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_definitions extends Model
{
    public function skills_level(){
        return $this->hasOne('App\skills_levels');
    }
}
