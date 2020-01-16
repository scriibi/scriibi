<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school_type extends Model
{
    protected $primaryKey = 'school_type_id';

    public function curriculum(){
        return $this->belongsTo('App\curriculum', 'fk_curriculum_id', 'curriculum_Id');
    }

    public function grade_label(){
        return $this->hasMany('App\grade_label', 'fk_school_type_id', 'school_type_id');
    }

    public function assessed_level_label(){
        return $this->hasMany('App\assessed_level_label', 'school_type_id_fk', 'school_type_id');
    }

    public function school_type_identifier(){
        return $this->belongsTo('App\school_type_identifier', 'fk_school_type_id', 'school_type_identifier_id');
    }
}
