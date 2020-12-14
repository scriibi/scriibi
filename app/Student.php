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
    public function students()
    {
        return $this->belongsToMany('App\WritingTask', 'writing_task_student', 'student_id', 'writing_task_id')
                    ->using('App\WritingTaskStudent')
                    ->withPivot(['id', 'student_id', 'writing_task_id', 'comment', 'status_flag', 'created_at', 'updated_at']);
    }
}
