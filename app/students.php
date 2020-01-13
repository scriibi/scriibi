<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $primaryKey = 'student_Id';

    public function ScriibiLevels_rubrik_level(){
        return $this->belongsTo('App/ScriibiLevels', 'rubrik_level', 'scriibi_Level_Id');
    }

    public function ScriibiLevels_enrolled_level(){
        return $this->belongsTo('App/ScriibiLevels', 'enrolled_Level_Id', 'scriibi_Level_Id');
    }
}
