<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class traitObject extends Model
{

    public $name;
    public $colour;
    public $icon;
    public $skills = array();


    public function __construct($name, $colour, $icon, $skills){

        $this->name = $name;
        $this->colour  = $colour;
        $this->icon  = $icon;
        $this->skills = $skill;
    }


}
