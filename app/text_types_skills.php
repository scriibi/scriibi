<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class text_types_skills extends Model
{
    protected $primaryKey = 'text_types_skills_Id';

    public function text_types(){
        return $this->belongsTo('App\text_types', 'text_types_skills_text_type_Id', 'text_type_Id');
    }
}
