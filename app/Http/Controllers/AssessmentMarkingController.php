<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\SkillCard;
use App\ScriibiLevels;
use App\writing_tasks;
use App\students;
use Illuminate\Http\Request;

class AssessmentMarkingController extends Controller
{
    public function GenerateStudentMarkingPage($student_id, $writing_task_id){
        $rangeAsScriibiValue = array();
        $skillCards = array();
        $student = students::find($student_id);
        $skills = writing_tasks::find($writing_task_id)->skills;
        $student_assessed_level = $student->rubrik_level;
        $range = AssessmentMarkingController::getScriibiRange($student_assessed_level);

        $status = DB::table('writting_task_students')->select('status')->where('fk_student_id', '=', $student_id)->where('fk_writting_task_id', '=', $writing_task_id)->get();
        $skills = DB::table('tasks_skills')->join('skills', 'tasks_skills.skills_skill_Id', 'skills.skill_Id')->select('skills.*')->where('writing_tasks_writing_task_Id', '=', $writing_task_id)->get();

        $curriculum_Id = DB::table('teachers')
            ->join('classes_teachers', 'teachers.user_Id', 'classes_teachers.teachers_user_Id')
            ->join('classes', 'classes_teachers.classes_teachers_classes_class_Id', 'classes.class_Id')
            ->join('schools', 'classes.schools_school_Id', 'schools.school_Id')
            ->select('schools.curriculum_details_curriculum_details_Id')
            ->where('teachers.user_Id', '=', Auth::user()->user_Id)
            ->get();

        foreach($range as $r){
            array_push($rangeAsScriibiValue, ScriibiLevels::find($r));
        }

        foreach($skills as $s){
            $newSKillCard = new SkillCard($s->skill_Name, [$range[0],$range[2],$range[4]], $s->skill_Id, $curriculum_Id, $student_id, $writing_task_id);
            $newSKillCard->populateScriibiLevelglobalCriteria();
            array_push($skillCards, $newSKillCard);
        }

        //dd($skillCards);
        return view('assessment-marking', ['rubrics' => $rangeAsScriibiValue, 'skillCards' => $skillCards, 'firstName' => $student->student_First_Name, 'lastName' => $student->student_Last_Name, 'status' => $status[0]->status]);
    }

    /**
     * returns the range of the scriibi levels based on the students rubric/assessed level
     */
    public function getScriibiRange($student_scriibi_level){
        $range = array();
        $scriibi_levels = array();
        $scriibi_level_value = ScriibiLevels::find($student_scriibi_level);
        //dd($scriibi_level_value->scriibi_Level);
        if ($scriibi_level_value->scriibi_Level == 0.0){
            $counter = -0.5;
            while($counter <= 0.5){
                array_push($range, $counter);
                $counter += 0.25;
            }
        }else{
            $counter = $scriibi_level_value->scriibi_Level - 1;
            while($counter <= ($scriibi_level_value->scriibi_Level + 1)){
                array_push($range, $counter);
                $counter += 0.5;
            }
        }
        foreach($range as $r){
            array_push($scriibi_levels, DB::table('scriibi_levels')->select('scriibi_Level_Id')->where('scriibi_Level', '=', $r)->first()->scriibi_Level_Id);
        }
        return $scriibi_levels;
    }

    public function saveAssessment(Request $request){
        $skillsAssessedArray = array();
        $skillCount = $request->input('skillCount');
        for($i = 1; $i <= $skillCount; $i++){
            $student_skill = $request->input('skill_' . (string)$i);
            if($student_skill != 'na'){
                array_push($skillsAssessedArray, $student_skill);
            }
        }
        dd($skillsAssessedArray);
    }

    public function seperateSkills(){
        
    }
}
