<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    /**
     * The table associated with the model..
     *
     * @var string
     */
    protected $table = 'curriculum';

    /**
     * The school types that belong to the curriculum.
     */
    public function schoolTypes()
    {
        return $this->belongsToMany('App\SchoolType', 'curriculum_school_type', 'curriculum_id', 'school_type_id')
                    ->using('App\CurriculumSchoolType')
                    ->withPivot(['id', 'curriculum_id', 'school_type_id', 'created_at', 'updated_at']);
    }

    /**
     * The skill levels that belong to the curriculum.
     */
    public function skillLevels()
    {
        return $this->belongsToMany('App\SkillLevel', 'curriculum_skill_level', 'curriculum_id', 'skill_level_id')
                    ->using('App\CurriculumSkillLevel')
                    ->withPivot(['id', 'skill_level_id', 'curriculum_skill_level', 'created_at', 'updated_at']);
    }
}
