<?php

namespace App;

use Exception;

class DataViewOverview extends DataView
{   
    // ################################################################################# older model file (delete later) ########################################################################################
    private $taskRelaventSkills = array();
    
    public function __construct(){
        parent::__construct();
        $this->populateStudents();
        $this->populateWritingTasks();
        $this->populateTaskStudents();
        $this->populateTaskSkills();
        $this->populateTaskRelaventSkills();
    }

    protected function populateStudents(){
        $this->students = $this->StudentController->indexStudentsByClass()->toArray();
    }

    protected function populateWritingTasks(){
        $this->writingTasks = $this->WritingTaskController->index()->toArray();
    }

    public function generateDataTable(){
        foreach($this->students as $s){
            array_push($this->dataTable, [$s->student_Id, $s->student_First_Name . " " . $s->student_Last_Name, $s->grade_label, $this->scriibiLevels[$s->fk_scriibi_level_id], $s->assessed_level_label, $this->scriibiLevels[$s->school_scriibi_level_id], $this->getStudentSkillsAverageForTask($s->student_Id)]);
        }
    }

    private function getStudentSkillsAverageForTask($student){
        $results = array();
        $studentSkillsResults = array();
        foreach($this->taskRelaventSkills as $key => $value){
            foreach($this->taskStudents as $ts){
                if(in_array($ts->tasks_skills_Id, $value) && ($ts->student_Id == $student)){
                    array_push($studentSkillsResults, $ts->scriibi_Level);
                }
            }
            try{
                $results[$key] = number_format(array_sum($studentSkillsResults) / count($studentSkillsResults), 1);
            }catch(Exception $e){
                $results[$key] = null;
            }
            $studentSkillsResults = array();
        }
        return $results;
    }

    private function populateTaskRelaventSkills(){
        $tempSkillsCollection = array();
        foreach($this->writingTasks as $wt){
            foreach($this->taskSkills as $ts){
                if($ts->writing_tasks_writing_task_Id === $wt->writing_task_Id){
                    array_push($tempSkillsCollection, $ts->tasks_skills_Id);
                }
            }
            $this->taskRelaventSkills[$wt->writing_task_Id] = $tempSkillsCollection;
            $tempSkillsCollection = array();
        }
    }
}
