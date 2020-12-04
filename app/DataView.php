<?php

namespace App;

use DB;
use App\tasks_students;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\WritingTasksController;

abstract class DataView
{   
    // ################################################################################# older model file (delete later) ########################################################################################
    /**
        * this is the main datatable that is passed into the view. 
        * the formate of this table depends on the dataview being generatd
    */
    protected $dataTable = array();
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
        $this->populateScriibiLevels();
    }

    public function getStudents(){
        return $this->$students;
    }

    public function getWritingTasks(){
        return $this->writingTasks;
    }

    public function getDataTable(){
        return $this->dataTable;
    }

    protected function populateScriibiLevels(){
        $scriibiLvl = ScriibiLevels::get()->toArray();
        foreach($scriibiLvl as $sl){
            $this->scriibiLevels[$sl['scriibi_Level_Id']] = $sl['scriibi_Level'];
        }
    }

    protected function filterWritingTaskIds(){
        $writingTaskIds = array();
        foreach($this->writingTasks as $wt){
            array_push($writingTaskIds, $wt->writing_task_Id);
        }
        return $writingTaskIds;
    }
    
    protected function populateTaskSkills(){ 
        $this->taskSkills = DB::table('tasks_skills')
            ->select('tasks_skills.*')
            ->whereIn('tasks_skills.writing_tasks_writing_task_Id', $this->filterWritingTaskIds())
            ->get()
            ->toArray();
    }

    protected function filterStudentIds(){
        $studentIds = array();
        foreach($this->students as $s){
            array_push($studentIds, $s->student_Id);
        }
        return $studentIds;
    }

    protected function populateTaskStudents(){
        $this->taskStudents = DB::table('tasks_students')
            ->join('scriibi_levels', 'tasks_students.result', 'scriibi_levels.scriibi_Level_Id')
            ->select('tasks_students.*', 'scriibi_levels.scriibi_Level')
            ->whereIn('tasks_students.student_Id', $this->filterStudentIds())
            ->get()
            ->toArray();
    }

    abstract protected function populateStudents();

    abstract protected function populateWritingTasks();

    abstract public function generateDataTable();
}
