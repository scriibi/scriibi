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

}
