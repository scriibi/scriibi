<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/*
global criteria is a the scriibi defined writing criteria that a particular curriculum may have at a particular scriibi level.
*/

class global_criteria extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'global_criteria_Id';

    public function curriculum_scriibi_levels_criteria(){
        return $this->hasOne('App\curriculum_scriibi_levels_criteria', 'global_criteria_global_criteria_Id', 'global_criteria_Id');
    }
}
