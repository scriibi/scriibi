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
}
