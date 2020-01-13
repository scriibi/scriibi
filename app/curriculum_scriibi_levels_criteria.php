<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curriculum_scriibi_levels_criteria extends Model
{
    public function global_criteria(){
        return $this->belongsTo('App\global_criteria', 'global_criteria_global_criteria_Id', 'global_criteria_Id');
    }

    public function local_criteria(){
        return $this->belongsTo('App\local_criteria', 'local_criteria_criteria_Id', 'criteria_Id');
    }
}
