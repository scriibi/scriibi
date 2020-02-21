<?php

namespace App;

use DB;

class DataViewWrittingTask extends DataView
{   
    private $filteredTaskSkills = array();
    private $filteredStudentsTasks = array();
    private $skills = array();
    private $taskId = null;

    public function __construct($writingTask){
        $this->taskId = $writingTask;
        parent::__construct();
        $this->populateWritingTasks();
        $this->populateTaskSkills();
        $this->populateStudents();
        $this->populateTaskStudents();
        $this->populateSkillsForAssessment();   
    }

    public function filterSkillsOfWritingTask($taskSkill) {
        if($taskSkill->writing_tasks_writing_task_Id == $this->taskId){
            return $taskSkill->tasks_skills_Id;
        }
    }

    private function filterStudentsWithResults($taskStudent){
        if(in_array($taskStudent->tasks_skills_Id, $this->filteredTaskSkills)){
            return $taskStudent->student_Id;
        }
    }

    public function filterStudents($student){
        if(in_array($student->student_Id, $this->filteredStudentsTasks)){
            return $student;
        }
    }

    protected function populateStudents(){
        $this->students = $this->StudentController->indexStudentsByWritingTask($this->taskId);
        // $this->filteredTaskSkills = array_map(array($this, 'filterSkillsOfWritingTask'), $this->taskSkills);
        // $this->filteredStudentsTasks = array_map(array($this, 'filterStudentsWithResults'), $this->taskStudents);
        // dd($this->filteredStudentsTasks);
        // $tempStudentCollection = $this->StudentController->indexStudentsByWritingTask($this->taskId);
        // $this->students = array_map(array($this, 'filterStudents'), $tempStudentCollection);
    }

    protected function populateWritingTasks(){
        $this->writingTasks = $this->WritingTaskController->indexSingleTask($this->taskId);
    }

    protected function populateSkillsForAssessment(){
        $this->skills = DB::table('skills')->join('tasks_skills', 'skills.skill_Id', 'tasks_skills.skills_skill_Id')->select('skills.*')->where('tasks_skills.writing_tasks_writing_task_Id', '=', $this->taskId)->get()->toArray();
    }

    public function generateDataTable(){
        //
    }
}
