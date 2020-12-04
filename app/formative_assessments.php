<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
this class records the details of a particlur formative assessment
*/
class formative_assessments extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'formative_assessment_Id';

    public function classes_students(){
        return $this->belongsToMany('App\classes_students', 'formative_assessment_results', 'formative_assessments_formative_assessment_Id', 'classes_students_classes_students_Id');
    }

    public function teaching_period(){
        return $this->belongsTo('App\teaching_periods', 'teaching_period', 'teaching_period_Id');
    }

    public function teacher(){
        return $this->belongsTo('App\teachers', 'created_by', 'user_Id');
    }
}
