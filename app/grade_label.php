<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grade_label extends Model
{
    protected $primaryKey = 'grade_label_id';

    public function school_type(){
        return $this->belongsTo('App\school_type', 'fk_school_type_id', 'school_type_id');
    }

    public function ScriibiLevels(){
        return $this->belongsTo('App\ScriibiLevels', 'fk_scriibi_level_id', 'scriibi_Level_Id');
    }

    public function scopeGetGradeLabels($query, $schoolType){
        return $query->where('fk_school_type_id', $schoolType);
    }
}
