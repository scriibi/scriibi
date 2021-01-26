<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CurriculumSchoolType extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'curriculum_school_type';

    /**
     * Get the schools for the curriculum school type.
     */
    public function schools()
    {
        return $this->hasMany('App\School', 'curriculum_school_type_id');
    }

    /**
     * The scriibi levels that belong to the grade curriculum school type.
     */
    public function gradeScriibiLevels()
    {
        return $this->belongsToMany('App\ScriibiLevel', 'grade_label', 'curriculum_school_type_id', 'scriibi_level_id')
                    ->using('App\GradeLabel')
                    ->withPivot(['id', 'label', 'scriibi_level_id', 'curriculum_school_type_id', 'created_at', 'updated_at']);
    }

    /**
     * The scriibi levels that belong to the assessed curriculum school type.
     */
    public function assessedScriibiLevels()
    {
        return $this->belongsToMany('App\ScriibiLevel', 'assessed_label', 'curriculum_school_type_id', 'scriibi_level_id')
                    ->using('App\AssessedLabel')
                    ->withPivot(['id', 'label', 'scriibi_level_id', 'curriculum_school_type_id', 'created_at', 'updated_at']);
    }

    /**
     * The rubrics that belong to the assessed curriculum school type.
     */
    public function rubrics()
    {
        return $this->belongsToMany('App\Rubric', 'rubric_scriibi', 'curriculum_school_type_id', 'rubric_id')
            ->using('App\RubricScriibi')
            ->withPivot(['id', 'rubric_id', 'curriculum_school_type_id', 'created_at', 'updated_at']);
    }
}
