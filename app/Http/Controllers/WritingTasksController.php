<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use App\Rubric;
use App\classes;
use App\teachers;
use App\writing_tasks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WritingTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     */
    public function store(Request $request)
    {
        $students_list = array();
        try{
            $assessment_title = $request->input('assessment_name');
            $assessment_date = $request->input('assessment_date');
            //dd($assessment_date);
            $assessment_description = $request->input('assessment_description');
            $assessment_setting = $request->input('assess');
            $assessment_rubric = $request->input('rubric');
            
            $rubric_details = DB::table('rubrics_teachers')
                ->join('rubrics', 'rubrics_teachers.rubrics_rubric_Id', 'rubrics.rubric_Id')
                ->select('rubrics.*')
                ->where('rubrics_teachers.teachers_user_Id', '=', Auth::user()->user_Id)
                ->where('rubrics_teachers.rubrics_rubric_Id', '=', $assessment_rubric)->first();
                
            $rubric = new Rubric($rubric_details->rubric_Id, $rubric_details->rubric_Name, $rubric_details->created_at);
            $rubric->populateTraits();
            $rubric->getSkillsByRubric();
            
            $students = WritingTasksController::getStudents($assessment_setting);
            
            foreach($students as $student){
                array_push($students_list, $student);
            }
            $writing_task_record = array('writing_Task_Description' => $assessment_description, 'created_Date' => $assessment_date, 'created_By_Teacher_User_Id' => Auth::user()->user_Id, 'teaching_period_Id' => 1, 'task_name' => $assessment_title);
            $newWritingTaskId = DB::table('writing_tasks')->insertGetId($writing_task_record);
            $allTraits = $rubric->getRubricTraitSkills();

            foreach($allTraits as $trait){
                $skills = $trait->getSkills();
                foreach($skills as $skill){
                    DB::table('tasks_skills')->insert(['writing_tasks_writing_task_Id' => $newWritingTaskId, 'skills_skill_Id' => $skill->getId()]);
                }
            }
            foreach($students_list as $sl){
                DB::table('writting_task_students')->insert(['fk_writting_task_id' => $newWritingTaskId, 'fk_student_id' => $sl, 'status' => 'incomplete']);
            }

            return redirect()->action('AssessmentListController@GenerateAssessmentList');
        }catch(Exception $e){
            throw $e;
        }
    }

    public function getStudents($assessment_setting){
        $students_list = array();
        if($assessment_setting == 'mine'){
            $classes = teachers::find(Auth::user()->user_Id)->classes;
            foreach($classes as $class){
                array_push($students_list, DB::table('classes_students')->select('students_student_Id')->where('classes_students.classes_class_Id', '=', $class->class_Id)->get());
            }
        }else{
            $teacher_grade = DB::table('teachers_scriibi_levels')->select('teachers_scriibi_levels.scriibi_levels_scriibi_Level_Id')->where('teachers_scriibi_levels.teachers_user_Id', '=', Auth::user()->user_Id)->first();
            $school = DB::table('school_teachers')->select('school_teachers.schools_school_Id')->where('school_teachers.teachers_user_Id', '=', Auth::user()->user_Id)->first();
            $students = DB::table('students')->select('students.student_Id')->where('students.enrolled_Level_Id', '=', $teacher_grade->scriibi_levels_scriibi_Level_Id)->where('students.schools_school_Id', '=', $school->schools_school_Id)->get();
            foreach($students as $student){
                array_push($students_list, $student->student_Id);
            }
        }
        return $students_list;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\writing_tasks  $writing_tasks
     * @return \Illuminate\Http\Response
     */
    public function show(writing_tasks $writing_tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\writing_tasks  $writing_tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(writing_tasks $writing_tasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\writing_tasks  $writing_tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, writing_tasks $writing_tasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\writing_tasks  $writing_tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(writing_tasks $writing_tasks)
    {
        //
    }
}
