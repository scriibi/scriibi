<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schools extends Model
{   
    protected $primaryKey = 'school_Id';

    public function teachers(){
        return $this->belongsTo('App/teachers', 'primary_Contact_Id', 'user_Id');
    }
}
