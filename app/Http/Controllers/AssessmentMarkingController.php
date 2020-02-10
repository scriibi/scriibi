<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\SkillCard;
use App\ScriibiLevels;
use App\writing_tasks;
use App\tasks_students;
use App\students;
use App\text_types_skills;
use Illuminate\Http\Request;

class AssessmentMarkingController extends Controller
{
    public function GenerateStudentMarkingPage($student_id, $writing_task_id){
        $rangeAsScriibiValue = array();
        $skillCards = array();
        /**
         * this array is used to aggregate all the task_skill values which are retrieved by tasks_skills table
         * this should be optimized later
         */
        $tasks_skills = array();
        $prepopulated_results = array();
        $student = students::find($student_id);
        $skills = writing_tasks::find($writing_task_id)->skills;
        $range = AssessmentMarkingController::getScriibiRange($student->rubrik_level);

        $status = DB::table('writting_task_students')->select('status', 'comment')->where('fk_student_id', '=', $student_id)->where('fk_writting_task_id', '=', $writing_task_id)->get();
        $skills = DB::table('tasks_skills')->join('skills', 'tasks_skills.skills_skill_Id', 'skills.skill_Id')->select('skills.*', 'tasks_skills.tasks_skills_Id')->where('tasks_skills.writing_tasks_writing_task_Id', '=', $writing_task_id)->get();
        $student_assessed_level_label = DB::table('classes_students')->join('assessed_level_labels', 'classes_students.student_assessed_label_id', 'assessed_level_labels.assessed_level_label_id')->select('assessed_level_labels.assessed_level_label')->where('classes_students.students_student_Id', '=', $student->student_Id)->get()->toArray();
        $student_tasks = tasks_students::get()->toArray();
        /**
         * the flag is there to check if there are any records in the tasks_students table
         * this value will be set to false only the very first time the the system is accessed
         * after a fresh database migration in the server
         */
        $flag = empty($student_tasks[0]);            
        $curriculum_Id = DB::table('teachers')->join('classes_teachers', 'teachers.user_Id', 'classes_teachers.teachers_user_Id')->join('classes', 'classes_teachers.classes_teachers_classes_class_Id', 'classes.class_Id')->join('schools', 'classes.schools_school_Id', 'schools.school_Id')->select('schools.curriculum_details_curriculum_details_Id')->where('teachers.user_Id', '=', Auth::user()->user_Id)->get();

        foreach($range as $r){
            array_push($rangeAsScriibiValue, ScriibiLevels::find($r));
        }

        foreach($student_tasks as $st){
            $tasks_skills[$st['tasks_skills_Id']] = $st['result'];
        }

        foreach($skills as $s){
            $newSKillCard = new SkillCard($s->skill_Name, [$range[0],$range[2],$range[4]], $s->skill_Id, $curriculum_Id, $student_id, $writing_task_id);
            $newSKillCard->populateScriibiLevelglobalCriteria();
            $newSKillCard->populateScriibiLevelLocalCriteria();
            if(!$flag){
                if(array_key_exists($s->tasks_skills_Id, $tasks_skills)){
                   array_push($prepopulated_results, $tasks_skills[$s->tasks_skills_Id] . "/" . $s->skill_Id);
                }
            }
            array_push($skillCards, $newSKillCard);
        }
        return view('assessment-marking', ['rubrics' => $rangeAsScriibiValue, 'skillCards' => $skillCards, 'firstName' => $student->student_First_Name, 'lastName' => $student->student_Last_Name, 'student_id' => $student->student_Id, 'writting_task_id' => $writing_task_id, 'status' => $status[0]->status, 'assessed_level' => $student_assessed_level_label, 'assessed_level_scriibi_id' => $student->rubrik_level, 'results' => $prepopulated_results]);
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
            $counter = -0.75;
            while($counter <= 1.0){
                if($counter >= 0.0){
                    $counter += 0.5;
                }else{
                    $counter += 0.25;
                }
                array_push($range, $counter);
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
        // stores the values passed in through the form as key value pairs
        $skillsAssessedArray = array();
        // stores the reference values from the table 'task_skills' in order to find the 'writing_tasks_writing_task_Id'
        $task_skills = array();
        $skillCount = $request->input('skillCount');
        $studentId = $request->input('studentId');
        $writingTask = $request->input('writingTask');
        $comment = $request->input('comment');
        for($i = 1; $i <= $skillCount; $i++){
            $student_skill = $request->input('skill_' . (string)$i);
            if(isset($student_skill)){
                if($student_skill != 'na'){
                    $skill_pointer = explode("/", $student_skill);
                    $skillsAssessedArray[$skill_pointer[1]] = $skill_pointer[0];
                }
            }
        }
        $writingTaskSkills = DB::table('tasks_skills')->select('tasks_skills_Id', 'skills_skill_Id')->where('writing_tasks_writing_task_Id', '=', $writingTask)->get();
        foreach($writingTaskSkills as $wts){
            if(in_array($wts->skills_skill_Id, array_keys($skillsAssessedArray))){
                $student_task = array('result' => $skillsAssessedArray[$wts->skills_skill_Id], 'student_Id' => $studentId, 'tasks_skills_Id' => $wts->tasks_skills_Id);
                $new_task_student = DB::table('tasks_students')->updateOrInsert(['student_Id' => $studentId, 'tasks_skills_Id' => $wts->tasks_skills_Id],$student_task);
            }
        }

        if(isset($comment)){
            DB::table('writting_task_students')->where('fk_student_id', '=', $studentId)->where('fk_writting_task_id', '=', $writingTask)->update(['comment' => $comment]);
        }
        return redirect()->action('WritingTasksController@ShowWritingTask', ['assessment_id' => $writingTask]);
    }
}
