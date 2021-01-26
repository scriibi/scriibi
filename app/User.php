<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * Get the school associated with the primary contact.
     */
    public function school()
    {
        return $this->hasOne('App\School', 'primary_contact');
    }

    /**
     * The memberships that belong to the user.
     */
    public function memberships()
    {
        return $this->belongsToMany('App\Membership', 'user_membership', 'user_id', 'membership_id')
                    ->using('App\UserMembership')
                    ->withPivot(['id', 'user_id', 'membership_id', 'created_at', 'updated_at']);
    }

    /**
     * The positions that belong to the user/teacher.
     */
    public function positions()
    {
        return $this->belongsToMany('App\Position', 'teacher_position', 'teacher_id', 'position_id')
                    ->using('App\TeacherPosition')
                    ->withPivot(['id', 'teacher_id', 'position_id', 'created_at', 'updated_at']);
    }

    /**
     * The scriibi levels that belong to the user/teacher.
     */
    public function scriibiLevels()
    {
        return $this->belongsToMany('App\ScriibiLevel', 'teacher_scriibi_level', 'teacher_id', 'scriibi_level_id')
                    ->using('App\TeacherScriibiLevel')
                    ->withPivot(['id', 'teacher_id', 'scriibi_level_id', 'created_at', 'updated_at']);
    }

    /**
     * The classes that belong to the user/teacher.
     */
    public function classes()
    {
        return $this->belongsToMany('App\Clss', 'teacher_class', 'teacher_id', 'class_id')
                    ->using('App\TeacherClass')
                    ->withPivot(['id', 'teacher_id', 'class_id', 'status_flag', 'created_at', 'updated_at']);
    }

    /**
     * The schools that belong to the user/teacher.
     */
    public function schools()
    {
        return $this->belongsToMany('App\School', 'teacher_school', 'teacher_id', 'school_id')
                    ->using('App\TeacherSchool')
                    ->withPivot(['id', 'teacher_id', 'school_id', 'created_at', 'updated_at']);
    }

    /**
     * The rubric templates that belong to the user/teacher.
     */
    public function rubricTeacherTemplates()
    {
        return $this->belongsToMany('App\Rubric', 'rubric_teacher_template', 'teacher_id', 'rubric_id')
                    ->using('App\RubricTeacherTemplate')
                    ->withPivot(['id', 'rubric_id', 'teacher_id', 'created_at', 'updated_at']);
    }

    /**
     * Get the writing tasks that belong to the user/teacher.
     */
    public function writingTasks()
    {
        return $this->hasMany('App\WritingTask', 'primary_owner_id');
    }
}
