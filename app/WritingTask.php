<?php

namespace App;

use App\Rubrics;
use Illuminate\Database\Eloquent\Model;

class WritingTask
{
    private $id;
    private $name;
    private $description;
    private $created_at;
    private $assessed_at;
    private $teacher_created;
    private $teaching_period;
    private $rubric_id;
    private $rubric;
    private $status;

    public function __construct($id, $name, $desc, $created, $assessed, $teacher, $teaching_period, $rubric_id){
        $this->id = $id;
        $this->name = $name;
        $this->description = $desc;
        $this->created_at = date('d-m-Y', strtotime($created));
        $this->assessed_at = date('YYYY-MM-DD', strtotime($assessed));
        $this->teacher_created = $teacher;
        $this->teaching_period = $teaching_period;
        $this->rubric_id = $rubric_id;
        $this->rubric = Rubrics::find($this->rubric_id);

        if ($this->assessed_at > date("YYYY-MM-DD")){
            $this->status = 'In Progress';
        }else{
            $this->status = 'Completed';
        }
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getCreatedAt(){
        return $this->created_at;
    }

    public function getAssessedAt(){
        return $this->assessed_at;
    }

    public function getTeacher(){
        return $this->teacher_created;
    }

    public function getTeachingPeriod(){
        return $this->teaching_period;
    }

    public function getRubricId(){
        return $this->rubric_id;
    }

    public function getRubric(){
        return $this->rubric;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setDescription($desc){
        $this->description = $desc;
    }

    public function setCreatedAt($created_at){
        $this->created_at = $created_at;
    }

    public function setAssessedAt($name){
        $this->assessed_at = $assessed_at;
    }

    public function setTeacher($name){
        $this->teacher_created = $teacher_created;
    }

    public function setTeachingPeriod($name){
        $this->teaching_period = $teaching_period;
    }

    public function setRubricId($name){
        $this->rubric_id = $rubric_id;
    }

    public function setRubric($name){
        $this->rubric = $rubric;
    }

    public function setStatus($status){
        $this->status = $status;
    }
}
