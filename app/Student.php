<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student';

    /**
     * The classes that belong to the student.
     */
    public function classes()
    {
        return $this->belongsToMany('App\Clss', 'student_class', 'student_id', 'class_id')
                    ->using('App\StudentClass')
                    ->withPivot(['id', 'student_id', 'class_id', 'status_flag', 'created_at', 'updated_at']);
    }

    /**
     * The writing tasks that belong to the student.
     */
    public function writingTasks()
    {
        return $this->belongsToMany('App\WritingTask', 'writing_task_student', 'student_id', 'writing_task_id')
                    ->using('App\WritingTaskStudent')
                    ->withPivot(['id', 'student_id', 'writing_task_id', 'comment', 'status_flag', 'created_at', 'updated_at']);
    }

    /**
     * Get the writing task skill results for the student.
     */
    public function taskSkillStudentResults()
    {
        return $this->hasMany('App\TaskSkillStudentResult', 'student_id');
    }

    /**
     * Get the grade scriibi level that owns the student.
     */
    public function gradeLevel()
    {
        return $this->belongsTo('App\ScriibiLevel', 'grade_level_id');
    }

    /**
     * Get the assessed scriibi level that owns the student.
     */
    public function assessedLevel()
    {
        return $this->belongsTo('App\ScriibiLevel', 'assessed_level_id');
    }
}
