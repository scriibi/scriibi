<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/*
local criteria is a the locally (curriculum specific) defined writing criteria that a particular curriculum may have at a particular scriibi level.
*/

class local_criteria extends Model
{
    protected $primaryKey = 'local_criteria_Id';

    // public function curriculum_scriibi_levels_criteria(){
    //     return $this->hasOne('App\curriculum_scriibi_levels_criteria', 'local_criteria_criteria_Id', 'criteria_Id');
    // }
}
