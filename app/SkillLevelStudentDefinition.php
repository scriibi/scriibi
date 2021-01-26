<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SkillLevelStudentDefinition extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skill_level_student_definition';
}
