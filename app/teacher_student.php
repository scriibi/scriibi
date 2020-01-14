<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
this table associates students with teachers.
a teacher such as a principal or literacy lead may not necessarily teach a class of students, therefore we can record which students those teachers have access to in this table.
*/


class teacher_student extends Model
{
    protected $primaryKey = 'teacher_student_Id';

}
