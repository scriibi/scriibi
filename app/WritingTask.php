<?php

namespace App;

use DB;
use Auth;
use App\Rubric;
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
    private $students = array();

    public function __construct($id, $name, $desc, $created, $assessed, $teacher, $teaching_period, $rubric_id){
        $this->id = $id;
        $this->name = $name;
        $this->description = $desc;
        $this->created_at = date('d-m-Y', strtotime($created));
        $this->assessed_at = date('Y-m-d', strtotime($assessed));
        $this->teacher_created = $teacher;
        $this->teaching_period = $teaching_period;
        $rubricRecord = Rubrics::find($rubric_id)->toArray();
        $this->rubric = new Rubric($rubricRecord["rubric_Id"], $rubricRecord["rubric_Name"]);
        $this->rubric->populateTraits();
        $this->rubric->getSkillsByRubric();
        if ($this->assessed_at > date("Y-m-d")){
            $this->status = 'In Progress';
        }else if ($this->assessed_at <= date("Y-m-d")){
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

    public function getRubric(){
        return $this->rubric;
    }

    public function getStatus(){
        return $this->status;
    }

    public function getStudents(){
        return $this->students;
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

    /**
     * populate all the students who are taking the current writing test
     */
    public function populateStudents(){
        $students = DB::table('students')
            ->join('writting_task_students', 'students.student_Id', 'writting_task_students.fk_student_id')
            ->join('classes_students', 'students.student_Id', 'classes_students.students_student_Id')
            ->join('grade_labels', 'classes_students.student_grade_label_id', 'grade_labels.grade_label_id')
            ->join('assessed_level_labels', 'classes_students.student_assessed_label_id', 'assessed_level_labels.assessed_level_label_id')
            ->select('students.*', 'writting_task_students.status', 'grade_labels.grade_label', 'assessed_level_labels.assessed_level_label')
            ->where('writting_task_students.fk_writting_task_id', '=', $this->id)
            ->get();
        foreach($students as $s){
            array_push($this->students, $s);
        }
    }

    public function populateStudentsInClass(){
        // todo
    }
}
