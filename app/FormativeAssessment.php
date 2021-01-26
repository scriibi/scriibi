<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormativeAssessment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'formative_assessment';

    /**
     * Get the class that owns the formative assessment.
     */
    public function class()
    {
        return $this->belongsTo('App\Clss', 'class_id');
    }
}
