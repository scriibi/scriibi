<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
this model groups particular students into classes.
*/

class classes_students extends Model
{
    // ################################################################################# older model file (delete later) ########################################################################################
    protected $primaryKey = 'classes_students_Id';

    public function formative_assessments(){
        return $this->belongsToMany('App\formative_assessments', 'formative_assessment_results', 'classes_students_classes_students_Id', 'formative_assessments_formative_assessment_Id');
    }

    public function goal(){
        return $this->hasMany('App\goals', 'classes_students_classes_students_Id', 'classes_students_Id');
    }

    public function grade_labels(){
        return $this->belongsTo('App\grade_labels', 'student_grade_label_id', 'grade_label_id');
    }

    public function assessed_level_label(){
        return $this->belongsTo('App\assessed_level_label', 'student_assessed_label_id', 'assessed_level_label_id');
    }
}
