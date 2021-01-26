<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDefinition extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_definition';

    /**
     * The skill levels that belong to the student definition.
     */
    public function skillLevels()
    {
        return $this->belongsToMany('App\SkillLevel', 'skill_level_student_definition', 'student_definition_id', 'skill_level_id')
                    ->using('App\SkillLevelStudentDefinition')
                    ->withPivot(['id', 'skill_level_id', 'student_definition_id', 'created_at', 'updated_at']);
    }
}
