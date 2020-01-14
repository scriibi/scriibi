<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classes_students extends Model
{
    protected $primaryKey = 'classes_students_Id';

    public function formative_assessments(){
        return $this->belongsToMany('App\formative_assessments', 'formative_assessment_results', 'classes_students_classes_students_Id', 'formative_assessments_formative_assessment_Id');
    }
}
