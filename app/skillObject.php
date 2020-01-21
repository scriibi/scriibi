<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skillObject
{
    private $name;
    private $definition;
    private $flag;

    public function __construct($name, $definition){
        $this->name = $name;
        $this->definition = $definition;
    }

    public function getName(){
        return $this->name;
    }

    public function getDefinition(){
        return $this->definition;
    }

    public function getFlag(){
        return $this->flag;
    }

    public function setName($newName){
        $this->name = $newName;
    }

    public function setDefinition($newDefinition){
        $this->definition = $newDefinition;
    }

    public function setFlag($newFlag){
        $this->flag = $newFlag;
    }

}
