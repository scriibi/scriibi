<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clss extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class';

    /**
     * Get the teaching period that owns the class.
     */
    public function teachingPeriod()
    {
        return $this->belongsTo('App\TeachingPeriod', 'teaching_period_id');
    }

    /**
     * Get the formative assessments for the class.
     */
    public function formativeAssessments()
    {
        return $this->hasMany('App\FormativeAssessment', 'class_id');
    }

    /**
     * Get the school that owns the class.
     */
    public function school()
    {
        return $this->belongsTo('App\School', 'school_id');
    }

    /**
     * The scriibi levels that belong to the class.
     */
    public function scriibiLevels()
    {
        return $this->belongsToMany('App\ScriibiLevel', 'class_scriibi_level', 'class_id', 'scriibi_level_id')
                    ->using('App\ClassScriibiLevel')
                    ->withPivot(['id', 'class_id', 'scriibi_level_id', 'created_at', 'updated_at']);
    }

    /**
     * The students that belong to the class.
     */
    public function students()
    {
        return $this->belongsToMany('App\Student', 'student_class', 'class_id', 'student_id')
                    ->using('App\StudentClass')
                    ->withPivot(['id', 'student_id', 'class_id', 'status_flag', 'created_at', 'updated_at']);
    }

    /**
     * The teachers that belong to the class.
     */
    public function teachers()
    {
        return $this->belongsToMany('App\User', 'teacher_class', 'class_id', 'teacher_id')
                    ->using('App\TeacherClass')
                    ->withPivot(['id', 'teacher_id', 'class_id', 'status_flag', 'created_at', 'updated_at']);
    }

    /**
     * The writing tasks that belong to the class.
     */
    public function writingTasks()
    {
        return $this->belongsToMany('App\WritingTask', 'writing_task_class', 'class_id', 'writing_task_id')
                    ->using('App\WritingTaskClass')
                    ->withPivot(['id', 'class_id', 'writing_task_id', 'created_at', 'updated_at']);
    }
}
