<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class text_types extends Model
{
    public function texy_type_skills(){
        return $this->hasMany('App\text_types_skills');
    }
}
