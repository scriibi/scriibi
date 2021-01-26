<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CurriculumSkillLevel extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'curriculum_skill_level';

    /**
     * The local criterias that belong to the grade curriculum skill level.
     */
    public function localCriteria()
    {
        return $this->belongsToMany('App\LocalCriteria', 'curriculum_skill_level_local_criteria', 'curriculum_skill_level_id', 'local_criteria_id')
                    ->using('App\CurriculumSkillLevelLocalCriteria')
                    ->withPivot(['id', 'curriculum_skill_level_id', 'local_criteria_id', 'created_at', 'updated_at']);
    }
}
