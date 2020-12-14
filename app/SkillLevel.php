<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SkillLevel extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skill_level';

    /**
     * The student definitions that belong to the skill level.
     */
    public function studentDefinitions()
    {
        return $this->belongsToMany('App\StudentDefinition', 'skill_level_student_definition', 'skill_level_id', 'student_definition_id')
                    ->using('App\SkillLevelStudentDefinition')
                    ->withPivot(['id', 'skill_level_id', 'student_definition_id', 'created_at', 'updated_at']);
    }

    /**
     * The strategies that belong to the skill level.
     */
    public function strategies()
    {
        return $this->belongsToMany('App\Strategy', 'skill_level_strategy', 'skill_level_id', 'strategy_id')
                    ->using('App\SkillLevelStrategy')
                    ->withPivot(['id', 'skill_level_id', 'strategy_id', 'created_at', 'updated_at']);
    }

    /**
     * The global criteria that belong to the skill level.
     */
    public function globalCriterias()
    {
        return $this->belongsToMany('App\GlobalCriteria', 'skill_level_global_criteria', 'skill_level_id', 'global_criteria_id')
                    ->using('App\SkillLevelGlobalCriteria')
                    ->withPivot(['id', 'skill_level_id', 'global_criteria_id', 'created_at', 'updated_at']);
    }

    /**
     * The curriculums that belong to the skill level.
     */
    public function curriculums()
    {
        return $this->belongsToMany('App\Curriculum', 'curriculum_skill_level', 'skill_level_id', 'curriculum_id')
                    ->using('App\CurriculumSkillLevel')
                    ->withPivot(['id', 'skill_level_id', 'curriculum_skill_level', 'created_at', 'updated_at']);
    }
}
