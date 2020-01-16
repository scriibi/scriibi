<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school_type_identifier extends Model
{
    protected $primaryKey = 'school_type_identifier_id';

    public function schools(){
        return $this->hasMany('App\schools', 'school_type_id', 'school_type_identifier_id');
    }

    public function school_type(){
        return $this->hasMany('App\school_type', 'fk_school_type_id', 'school_type_identifier_id');
    }
}
