<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'school';

    /**
     * Get the classes for the school.
     */
    public function classes()
    {
        return $this->hasMany('App\Clss', 'school_id');
    }

    /**
     * Get the writing tasks for the school.
     */
    public function writingTasks()
    {
        return $this->hasMany('App\WritingTask', 'school_id');
    }

    /**
     * Get the primary contact that owns the school.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'primary_contact');
    }
    
    /**
     * The teachers that belong to the school.
     */
    public function schools()
    {
        return $this->belongsToMany('App\User', 'teacher_school', 'school_id', 'teacher_id')
                    ->using('App\TeacherSchool')
                    ->withPivot(['id', 'teacher_id', 'school_id', 'created_at', 'updated_at']);
    }

    /**
     * Get the curriculum school type that owns the school.
     */
    public function curriculumSchoolType()
    {
        return $this->belongsTo('App\CurriculumSchoolType', 'curriculum_school_type_id');
    }
}
