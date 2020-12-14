<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'school_type';

    /**
     * The curriculums that belong to the school type.
     */
    public function curriculums()
    {
        return $this->belongsToMany('App\Curriculum', 'curriculum_school_type', 'school_type_id', 'curriculum_id')
                    ->using('App\CurriculumSchoolType')
                    ->withPivot(['id', 'curriculum_id', 'school_type_id', 'created_at', 'updated_at']);
    }
}
