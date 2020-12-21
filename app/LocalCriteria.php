<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalCriteria extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'local_criteria';

    /**
     * The curriculum skill levels that belong to the local criteria.
     */
    public function curriculumSkillLevel()
    {
        return $this->belongsToMany('App\CurriculumSkillLevel', 'curriculum_skill_level_local_criteria', 'local_criteria_id', 'curriculum_skill_level_id')
                    ->using('App\CurriculumSkillLevelLocalCriteria')
                    ->withPivot(['id', 'curriculum_skill_level_id', 'local_criteria_id', 'created_at', 'updated_at']);
    }
}
