<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class text_types extends Model
{
    protected $primaryKey = 'text_type_Id';

    public function texy_type_skills(){
        return $this->hasMany('App\text_types_skills');
    }
}
