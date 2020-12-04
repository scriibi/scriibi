<?php

namespace App;

use DB;
use Exception;

class DataViewWrittingTask extends DataView
{   
    // ################################################################################# older model file (delete later) ########################################################################################
    private $skills = array();
    private $taskId = null;

    public function __construct($writingTask){
        parent::__construct();
        $this->taskId = $writingTask;
        $this->populateWritingTasks();
        $this->populateTaskSkills();
        $this->populateStudents();
        $this->populateTaskStudents();
        $this->populateSkillsForAssessment();
    }

    public function getSkills(){
        return $this->skills;
    }

    protected function populateStudents(){
        $this->students = $this->StudentController->indexStudentsByWritingTask($this->taskId);
    }

    protected function populateWritingTasks(){
        $this->writingTasks = $this->WritingTaskController->indexSingleTask($this->taskId);
    }

    protected function populateSkillsForAssessment(){
        $this->skills = DB::table('skills')
            ->join('tasks_skills', 'skills.skill_Id', 'tasks_skills.skills_skill_Id')
            ->select('skills.*')
            ->where('tasks_skills.writing_tasks_writing_task_Id', '=', $this->taskId)
            ->get()
            ->toArray();
    }

    public function generateDataTable(){
        foreach($this->students as $s){
            $skillData = $this->getResultForEachTaskSkill($s->student_Id);
            if(!empty(array_filter($skillData, function($a){ return $a !== null;}))){
            array_push($this->dataTable, [$s->student_Id, $s->student_First_Name . " " . $s->student_Last_Name, $s->grade_label, $this->scriibiLevels[$s->fk_scriibi_level_id], $s->assessed_level_label, $this->scriibiLevels[$s->school_scriibi_level_id], round($this->getProgressionPoint($skillData), 1), $skillData]);
            }
        }
    }

    protected function getStudentSpeceficSkillsStudents($student){
        $studentSpecificSkillsStudents = array();
        foreach($this->taskStudents as $ts){
            if($ts->student_Id == $student){
                array_push($studentSpecificSkillsStudents, $ts);
            }
        }
        return $studentSpecificSkillsStudents;
    }

    protected function getSkillSpecificTaskSkill($skill){
        foreach($this->taskSkills as $ts){
            if($ts->skills_skill_Id == $skill){
                return $ts->tasks_skills_Id;
            }
        }
    }

    protected function getSkillResult($skillsStudents, $taskSkill){
        foreach($skillsStudents as $ss){
            if($ss->tasks_skills_Id == $taskSkill){
                return $ss->scriibi_Level;
            }
        }
    }

    protected function getResultForEachTaskSkill($student){
        $skillResults = array();
        $studentSpecificSkillsStudents = $this->getStudentSpeceficSkillsStudents($student);
        foreach($this->skills as $s){
            $taskSkill = $this->getSkillSpecificTaskSkill($s->skill_Id);
            try{
                $result = $this->getSkillResult($studentSpecificSkillsStudents, $taskSkill);
                $skillResults[$s->skill_Id] = $result;
            }catch(Exception $e){
                $skillResults[$s->skill_Id] = null;
            }
        }
        return $skillResults;
    }

    protected function getProgressionPoint($results){
        $total = 0;
        $count = 0;
        foreach($results as $key => $value){
            if($value != null){
                $count++;
            }
            $total += $value;
        }
        if($count == 0){
            return 0.0;
        }else{
            return $total / $count;
        }
    }
}
