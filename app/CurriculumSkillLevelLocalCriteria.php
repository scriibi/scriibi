<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CurriculumSkillLevelLocalCriteria extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'curriculum_skill_level_local_criteria';
}
