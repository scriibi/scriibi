<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $primaryKey = 'student_Id';

    public function ScriibiLevels(){
        return $this->belongsTo('App/ScriibiLevels', 'rubrik_level', 'scriibi_Level_Id');
    }
}
