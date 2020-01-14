<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/*
one particular writing skill may belong to one or many writing traits.
*/

class skills_traits extends Model
{
    protected $primaryKey = 'skills_traits_Id';

}
