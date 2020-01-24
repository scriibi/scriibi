<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curriculum_scriibi_level_skills extends Model
{
    protected $primaryKey = 'criteria_curr_level_skill_Id';

    // public function LocalCriterias(){
    //     return $this->belongsToMany('App\local_criterias', 'local_criteria_curriculum_scriibi_level_skills', 'curriculum_scriibi_levels_skills_Id', 'local_criteria_Id');
    // }
}
