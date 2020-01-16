<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
curriculum refers to a particular school curriculum defined by name, state, and country.
*/


class curriculum extends Model
{
    protected $primaryKey = 'curriculum_Id';

    /**
     *  migration name for curriculum is different from query name
     *  explicit table name declaration is done to equate everything
     */

    protected $table = 'curriculum';

    public function curriculum_scriibi_levels(){
        return $this->hasMany('App\curriculum_scriibi_levels', 'curriculum_Id', 'curriculum_Id');
    }

    public function schools(){
        return $this->hasMany('App\schools', 'curriculum_details_curriculum_details_Id', 'curriculum_Id');
    }

    public function school_type(){
        return $this->hasMany('App\school_type', 'fk_curriculum_id', 'curriculum_Id');
    }
}
