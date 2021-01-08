<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use App\Rubrics;
use App\ScriibiLevels;
use App\skills_levels;
use AssessmentMarkingController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\RubricService;


class RubricsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @param RubricService $rubricService
     */
    public function store(Request $request, RubricService $rubricService)
    {   // do  exception handling and data cleaning here later
        $template = array(
            'name' => $request->input('rubric_name'),
            'level' => $request->input('assessed_level'),
            'skills' => $request->input('rubric_skills'),
        );
        $rubricService->saveTeacherTemplate(Auth::user()->id, $template);
        return redirect('/rubric-list');
    }

    /**
     * deletes an existing rubric from the rubric table, rubrics_teachers table and also the rubrics_skills table
     */
    public function deleteRubric(Request $request){
        try{
            $rubricId = $request->input('rubricId');
            $assessments = DB::table('writing_tasks')->where('fk_rubric_id', '=', $rubricId)->get()->toArray();
            if(count($assessments) == 0){
                DB::table('rubrics_skills')->where('rubrics_rubric_Id', '=', $rubricId)->delete();
                DB::table('rubrics_teachers')->where('rubrics_rubric_Id', '=', $rubricId)->delete();
                DB::table('rubrics')->where('rubric_Id', '=', $rubricId)->delete();
            }else{
                DB::table('rubrics_teachers')->where('rubrics_rubric_Id', '=', $rubricId)->delete();
                DB::statement("UPDATE rubrics SET rubric_Name = CONCAT(rubric_Name, ' (deleted)') WHERE rubric_Id = $rubricId");
            }
            return redirect('/rubric-list');
        }
        catch(\Exception $e){
            return redirect('/rubric-list');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RubricService $rubricService)
    {
        try{
            // todo - add a check for the number of skills (it cannot be zero)
            $rubricService->updateTeacherTemplate($request->input('rubric_id'), $request->input('rubric_name'), $request->input('assessed_level'), $request->input('rubric_skills'));
            return redirect('/rubric-list');
        }
        catch(\Exception $e){
            throw $e;
        }
    }

    /**
     * create a new rubric for an existing assessment and update the
     * current assessment rubric, skills and remove existing student grades
     * for removed skills from the assessment
     */
    public function updateAssessmentRubric(Request $request){
        try{
            $taskId = $request->input('task_id');
            $newName = $request->input('rubric_name');
            $newAsssessedLevel = $request->input('assessed_level');
            $rubricSkills = $request->input('rubric_skills');
            $rubricSkillsMassInsert = [];
            $taskSkillsToRemove = [];
            $taskSkillsToAdd = [];
            $existingTaskSkills = DB::table('tasks_skills')->where('writing_tasks_writing_task_Id', $taskId)->get()->toArray();
            $newRubricId = DB::table('rubrics')->insertGetId(['scriibi_levels_scriibi_level_Id' => $newAsssessedLevel, 'rubric_Name' => $newName]);
            foreach($rubricSkills as $skill){
                array_push($rubricSkillsMassInsert, ['skills_skill_Id' => $skill, 'rubrics_rubric_Id' => $newRubricId]);
                array_push($taskSkillsToAdd, ['writing_tasks_writing_task_Id' => $taskId, 'skills_skill_Id' => $skill]);
            }
            foreach ($existingTaskSkills as $ets){
                if(!(in_array($ets->skills_skill_Id, $rubricSkills))){
                    array_push($taskSkillsToRemove, $ets->tasks_skills_Id);
                }else{
                    $key = array_search($ets->skills_skill_Id, $rubricSkills);
                    //unset($rubricSkills[$key]);
                    unset($taskSkillsToAdd[$key]);
                }
            }
            DB::table('rubrics_skills')->insert($rubricSkillsMassInsert);
            DB::table('rubrics_teachers')->insert(['rubrics_rubric_Id' => $newRubricId, 'teachers_user_Id' => Auth::user()->user_Id]);
            DB::table('writing_tasks')->where('writing_task_Id', '=', $taskId)->update(['fk_rubric_id' => $newRubricId]);
            DB::table('tasks_students')->whereIn('tasks_skills_Id', $taskSkillsToRemove)->delete();
            DB::table('tasks_skills')->whereIn('tasks_skills_Id', $taskSkillsToRemove)->delete();
            DB::table('tasks_skills')->insert($taskSkillsToAdd);
            RubricsController::updateStudentStatus($rubricSkills, $taskId);
            return redirect()->action('WritingTasksController@ShowWritingTask', ['assessment_id' => $taskId]);
        }catch(Exception $e){
            // throw $e;
        }
    }

    public function updateStudentStatus($newSkillSet, $writingTask){
        $uniquesPerLevel = [];
        $filteredSkillsLevels = [];
        $skillsLevels = skills_levels::get()->toArray();
        //dd($skillsLevels);
        $taskStudents =  array_map(function($student){return $student->student_Id;}, DB::table('tasks_skills')
            ->join('tasks_students', 'tasks_skills.tasks_skills_Id', 'tasks_students.tasks_skills_Id')
            ->select('tasks_students.student_Id')
            ->where('tasks_skills.writing_tasks_writing_task_Id', '=', $writingTask)
            ->whereIn('tasks_skills.skills_skill_Id', $newSkillSet)
            ->get()
            ->toArray());

        $students = DB::table('writting_task_students')
            ->join('students', 'writting_task_students.fk_student_id', 'students.student_Id')
            ->where('fk_writting_task_id', '=', $writingTask)
            ->select('students.*', 'writting_task_students.*')
            ->get()
            ->toArray();
        foreach($skillsLevels as $sl){
            if(in_array($sl['skills_levels_skills_skill_Id'], $newSkillSet)){
                if(!array_key_exists($sl['scriibi_levels_scriibi_Level_Id'], $filteredSkillsLevels)){
                    $filteredSkillsLevels[$sl['scriibi_levels_scriibi_Level_Id']] = array($sl['skills_levels_skills_skill_Id']);
                }else{
                    array_push($filteredSkillsLevels[$sl['scriibi_levels_scriibi_Level_Id']], $sl['skills_levels_skills_skill_Id']);
                }
            }
        }
        $keys = array_keys($filteredSkillsLevels);
        $size = sizeof($filteredSkillsLevels);
        for($i = 0; $i < $size; $i++){
            $temp = $filteredSkillsLevels[$keys[$i]];
            if($i !== 0){
                $temp = array_merge($temp, $filteredSkillsLevels[$keys[$i - 1]]);
            }
            if($i !== ($size - 1)){
                $temp = array_merge($temp, $filteredSkillsLevels[$keys[$i + 1]]);
            }
            $uniquesPerLevel[$keys[$i]] = array_unique($temp);
        }
        // dump($filteredSkillsLevels);
        // dd($uniquesPerLevel);
        foreach($students as $student){
            if(array_key_exists($student->rubrik_level, $uniquesPerLevel)){
                $assesibleCount = count($uniquesPerLevel[$student->rubrik_level]);
            }else{
                $assesibleCount = 0;
            }
           $studentMarksCount = RubricsController::count_array_values_of($taskStudents, $student->student_Id);
           if($studentMarksCount >= $assesibleCount){
                $status = 'completed';
           }else{
                $status = 'incomplete';
           }
            DB::table('writting_task_students')
                ->where('fk_writting_task_id', '=', $writingTask)
                ->where('fk_student_id', '=', $student->student_Id)
                ->update(['status' => $status]);
        }
    }

    public function count_array_values_of($array, $match){
        $count = 0;
        foreach($array as $value)
            if($value == $match){
                $count ++;
            }
        return $count;
    }

    public function saveScriibiRubric(Request $request, RubricService $rubricService){
        $rubric = array(
            'name' => $request->input('rubric_name'),
            'level' => $request->input('assessed_level'),
            'skills' => $request->input('rubric_skills'),
            'curriculum' => $request->input('curriculum'),
            'schoolType' => $request->input('schoolType')
        );
        $rubricService->saveScriibiRubric($rubric);

        return redirect('/scriibi-rubric-builder');
    }
}
