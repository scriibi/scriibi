<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class text_types extends Model
{
    protected $primaryKey = 'text_type_Id';

    public function skills(){
        return $this->belongsToMany('App\skills', 'text_types_skills', 'text_types_skills_text_type_Id', 'text_types_skills_skill_Id');
    }
}
