<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schools extends Model
{   
    protected $primaryKey = 'school_Id';

    public function teachers_primary_contact(){
        return $this->belongsTo('App\teachers', 'primary_Contact_Id', 'user_Id');
    }

    public function teacher(){
        return $this->belongsToMany('App\teachers', 'school_teachers', 'schools_school_Id', 'teachers_user_Id');
    }

    public function class(){
        return $this->hasMany('App\classes', 'schools_school_Id', 'school_Id');
    }

    public function student(){
        return $this->hasMany('App\students', 'schools_school_Id', 'school_Id');
    }
}
