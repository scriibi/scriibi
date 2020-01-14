<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class text_types extends Model
{
    protected $primaryKey = 'text_type_Id';

    public function text_types_skills(){
        return $this->hasMany('App\text_types_skills', 'text_types_skills_text_type_Id', 'text_type_Id');
    }
}
