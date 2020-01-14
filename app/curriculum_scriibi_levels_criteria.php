<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
this class associates a global and local criteria with a particular instance of curriculum-scriibi_levels
*/

class curriculum_scriibi_levels_criteria extends Model
{
    protected $primaryKey = 'curriculum_scriibi_levels_criteria_Id';

    public function global_criteria(){
        return $this->belongsTo('App\global_criteria', 'global_criteria_global_criteria_Id', 'global_criteria_Id');
    }

    public function local_criteria(){
        return $this->belongsTo('App\local_criteria', 'local_criteria_criteria_Id', 'criteria_Id');
    }
}
