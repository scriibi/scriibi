<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schools extends Model
{
    public function teachers(){
        return $this->belongsTo('App/teachers', 'primary_Contact_Id', 'user_Id');
    }
}
