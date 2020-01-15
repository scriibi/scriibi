<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grade_label extends Model
{
    protected $primaryKey = 'grade_label_id';

    public function school_type(){
        return $this->belongsTo('App\school_type', 'fk_school_type_id', 'school_type_id');
    }
}
