<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SkillLevelStrategy extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skill_level_strategy';
}
