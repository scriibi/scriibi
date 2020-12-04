<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
this class associates curriculums with their corresponding global and local scriibi level, allowing for an offset
*/


class curriculum_scriibi_levels extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'curriculum_scriibi_levels_Id';

    public function curriculum(){
        return $this->belongsTo('App\curriculum', 'curriculum_Id', 'curriculum_Id');
    }

    public function scriibi_level_local(){
        return $this->belongsTo('App\ScriibiLevels', 'local_level', 'scriibi_Level_Id');
    }

    public function scriibi_level_global(){
        return $this->belongsTo('App\ScriibiLevels', 'global_level', 'scriibi_Level_Id');
    }

    public function curriculum_scriibi_levels_criteria(){
        return $this->hasMany('App\curriculum_scriibi_levels_criteria', 'fk_curriculum_scriibi_levels_Id', 'curriculum_scriibi_levels_Id');
    }

}
