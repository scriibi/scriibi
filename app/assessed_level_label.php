<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assessed_level_label extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'assessed_level_label_id';

    public function school_type(){
        return $this->belongsTo('App\school_type', 'school_type_id_fk', 'school_type_id');
    }

    public function ScriibiLevels(){
        return $this->belongsTo('App\ScriibiLevels', 'school_scriibi_level_id', 'scriibi_Level_Id');
    }

    public function scopeGetAssessedLevelLabels($query, $schoolType){
        return $query->where('school_type_id_fk', $schoolType);
    }

    public function classes_students(){
        return $this->belongsTo('App\classes_students', 'student_assessed_label_id', 'assessed_level_label_id');
    }
}
