<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formative_assessments extends Model
{
    protected $primaryKey = 'formative_assessment_Id';

    public function classes_students(){
        return $this->belongsToMany('App\classes_students', 'formative_assessment_results', 'formative_assessments_formative_assessment_Id', 'classes_students_classes_students_Id');
    }

}
