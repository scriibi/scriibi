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


class RubricsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * Currently two rubrics are being passed in the same form and the same insert actions are replicated twice
     * this has to be fixed in the upcomming iterations as this is highly inefficient
     */
    public function store(Request $request)
    {
        $rubric1_name = $request->input('rubric1_name');
        $rubric2_name = $request->input('rubric2_name');
        $assessed_level = $request->input('assessed_level');
        $rubric1_skills = $request->input('rubric1_skills');
        $rubric2_skills = $request->input('rubric2_skills');

        $new_rubric_1 = array('scriibi_levels_scriibi_level_Id' => $assessed_level, 'rubric_Name' => $rubric1_name);
        $new_rubric_2 = array('scriibi_levels_scriibi_level_Id' => $assessed_level, 'rubric_Name' => $rubric2_name);
        
        $newRubricId1 = DB::table('rubrics')->insertGetId($new_rubric_1);
        $newRubricId2 = DB::table('rubrics')->insertGetId($new_rubric_2);

        foreach($rubric1_skills as $skill){
            $new_rubric_skill = array('skills_skill_Id' => $skill, 'rubrics_rubric_Id' => $newRubricId1);
            DB::table('rubrics_skills')->insert($new_rubric_skill);
        }

        foreach($rubric2_skills as $skill){
            $new_rubric_skill = array('skills_skill_Id' => $skill, 'rubrics_rubric_Id' => $newRubricId2);
            DB::table('rubrics_skills')->insert($new_rubric_skill);
        }

        $new_teacher_rubric1 = array('rubrics_rubric_Id' => $newRubricId1, 'teachers_user_Id' => Auth::user()->user_Id);
        DB::table('rubrics_teachers')->insert($new_teacher_rubric1);

        $new_teacher_rubric2 = array('rubrics_rubric_Id' => $newRubricId2, 'teachers_user_Id' => Auth::user()->user_Id);
        DB::table('rubrics_teachers')->insert($new_teacher_rubric2);

        /**
         * mixpanel code
        */
        $mp = Mixpanel::getInstance("11fbca7288f25d9fb9288447fd51a424");

        $mp->identify(Auth::user()->user_Id);
        $mp->track("Rubric Created", array(
                "Rubric Id"                  => $newRubricId1,
                "Rubric Name"                => $rubric1_name,
                "Rubric Scriibi Level"       => $assessed_level,
                "Rubric Skill Ids"           => $rubric1_skills,
                "Related Rubric Ids"         => [$newRubricId2],
            )
        );

        $mp->track("Rubric Created", array(
            "Rubric Id"                  => $newRubricId2,
            "Rubric Name"                => $rubric2_name,
            "Rubric Scriibi Level"       => $assessed_level,
            "Rubric Skill Ids"           => $rubric2_skills,
            "Related Rubric Ids"         => [$newRubricId1],
        )
    );

        return redirect()->action('RubricListController@GenerateUserRubrics');
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
            return redirect()->action('RubricListController@GenerateUserRubrics');
        }
        catch(\Exception $e){
            return redirect()->action('RubricListController@GenerateUserRubrics');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rubrics  $rubrics
     * @return \Illuminate\Http\Response
     */
    public function show(Rubrics $rubrics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rubrics  $rubrics
     * @return \Illuminate\Http\Response
     */
    public function edit(Rubrics $rubrics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $rubricId = $request->input('rubric_id');
            $newName = $request->input('rubric_name');
            $newAsssessedLevel = $request->input('assessed_level');
            $rubricSkills = $request->input('rubric_skills');
            $new_rubric_skills = [];
            DB::table('rubrics')->where('rubric_Id', '=', $rubricId)->update(['scriibi_levels_scriibi_level_Id' => $newAsssessedLevel, 'rubric_Name' => $newName]);
            DB::table('rubrics_skills')->where('rubrics_rubric_Id', '=', $rubricId)->delete();

            foreach($rubricSkills as $rs){
                array_push($new_rubric_skills, ['skills_skill_Id' => $rs, 'rubrics_rubric_Id' => $rubricId]);
            }
            DB::table('rubrics_skills')->insert($new_rubric_skills);
            return redirect()->action('RubricListController@GenerateUserRubrics');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rubrics  $rubrics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rubrics $rubrics)
    {
        //
    }
}
