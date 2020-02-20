<?php

namespace App;

use DB;
use App\tasks_students;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\WritingTasksController;

abstract class DataView
{   
    protected $students = array();
    protected $writingTasks = array();
    protected $taskSkills = array();
    protected $taskStudents = array();
    protected $StudentController = null;
    protected $WritingTaskController = null;
    protected $scriibiLevels = array();

    public function __construct(){ 
        $this->StudentController = new StudentsController();
        $this->WritingTaskController = new WritingTasksController();
        $this->populateTaskSkills();
        $this->populateTaskStudents();
        $this->populateScriibiLevels();
    }

    public function getStudents(){
        return $this->$students;
    }

    public function getWritingTasks(){
        return $this->writingTasks;
    }

    protected function populateScriibiLevels(){
        $scriibiLvl = ScriibiLevels::get()->toArray();
        foreach($scriibiLvl as $sl){
            $this->scriibiLevels[$sl['scriibi_Level_Id']] = $sl['scriibi_Level'];
        }
    }

    protected function populateTaskSkills(){ 
        $this->taskSkills = DB::table('tasks_skills')
            ->select('tasks_skills.*')
            ->get()
            ->toArray();
    }

    protected function populateTaskStudents(){
        $this->taskStudents = DB::table('tasks_students')
            ->join('scriibi_levels', 'tasks_students.result', 'scriibi_levels.scriibi_Level_Id')
            ->select('tasks_students.*', 'scriibi_levels.scriibi_Level')
            ->get()
            ->toArray();
    }

    abstract protected function populateStudents();

    abstract protected function populateWritingTasks();
}
