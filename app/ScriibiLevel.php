<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScriibiLevel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'scriibi_level';

    /**
     * Get the rubrics for the scriibi level.
     */
    public function rubrics()
    {
        return $this->hasMany('App\Rubric', 'scriibi_level_id');
    }

    /**
     * The users/teachers that belong to the scriibi level.
     */
    public function teachers()
    {
        return $this->belongsToMany('App\User', 'teacher_scriibi_level', 'scriibi_level_id', 'teacher_id')
                    ->using('App\TeacherScriibiLevel')
                    ->withPivot(['id', 'teacher_id', 'scriibi_level_id', 'created_at', 'updated_at']);
    }

    /**
     * The classes that belong to the scriibi level.
     */
    public function classes()
    {
        return $this->belongsToMany('App\Clss', 'class_scriibi_level', 'scriibi_level_id', 'class_id')
                    ->using('App\ClassScriibiLevel')
                    ->withPivot(['id', 'class_id', 'scriibi_level_id', 'created_at', 'updated_at']);
    }

    /**
     * The skills that belong to the scriibi level.
     */
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'skill_level', 'scriibi_level_id', 'skill_id')
                    ->using('App\SkillLevel')
                    ->withPivot(['id', 'skill_id', 'scriibi_level_id', 'created_at', 'updated_at']);
    }

    /**
     * The grade labels and curriculum school types that belong to the scriibi level.
     */
    public function gradeCurriculumSchoolTypes()
    {
        return $this->belongsToMany('App\CurriculumSchoolType', 'grade_label', 'scriibi_level_id', 'curriculum_school_type_id')
                    ->using('App\GradeLabel')
                    ->withPivot(['id', 'label', 'scriibi_level_id', 'curriculum_school_type_id', 'created_at', 'updated_at']);
    }

    /**
     * The assessed labels and curriculum school types that belong to the scriibi level.
     */
    public function assessedCurriculumSchoolTypes()
    {
        return $this->belongsToMany('App\CurriculumSchoolType', 'assessed_label', 'scriibi_level_id', 'curriculum_school_type_id')
                    ->using('App\AssessedLabel')
                    ->withPivot(['id', 'label', 'scriibi_level_id', 'curriculum_school_type_id', 'created_at', 'updated_at']);
    }

    /**
     * Get the writing task skill results for the scriibi level.
     */
    public function taskSkillStudentResults()
    {
        return $this->hasMany('App\TaskSkillStudentResult', 'result');
    }

    /**
     * Get the students for the grade scriibi level.
     */
    public function studentGradeLevel()
    {
        return $this->hasMany('App\Student', 'grade_level_id');
    }

    /**
     * Get the students for the assessed scriibi level.
     */
    public function studentAssessedLevel()
    {
        return $this->hasMany('App\Student', 'assessed_level_id');
    }
}
