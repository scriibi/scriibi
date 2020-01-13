<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class text_types_skills extends Model
{
    public function text_types(){
        return $this->belongTo('App\text_types', 'text_types_skills_text_type_Id', 'text_type_Id');
    }
}
