<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class global_criteria extends Model
{   
    protected $primaryKey = 'global_criteria_Id';

    public function curriculum_scriibi_levels_criteria(){
        return $this->hasOne('App/curriculum_scriibi_levels_criteria', 'global_criteria_global_criteria_Id', 'global_criteria_Id');
    }
}
