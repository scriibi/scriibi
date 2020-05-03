<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use Exception;
use App\Rubrics;
use App\schools;
use App\Rubric;
use App\classes;
use App\ScriibiLevels;
use App\teachers;
use App\WritingTask;
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
        return DB::table('writing_tasks')->select('writing_tasks.*')->where('writing_tasks.created_By_Teacher_User_Id', '=', Auth::user()->user_Id)->get();
    }

    public function indexSingleTask($taskId){
        return DB::table('writing_tasks')->select('writing_tasks.*')->where('writing_tasks.writing_task_Id', '=', $taskId)->get()->toArray();
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
            $assessment_description = $request->input('assessment_description');
            $assessment_setting = $request->input('assess');
            $assessment_rubric = $request->input('rubric');
    
            $rubric_details = Rubrics::find($assessment_rubric);
            $rubric = new Rubric($rubric_details->rubric_Id, $rubric_details->rubric_Name, $rubric_details->created_at);
            $rubric->populateTraits();
            $rubric->getSkillsByRubric();
            
            $students = WritingTasksController::getStudents($assessment_setting);
            
            foreach($students as $student){
                array_push($students_list, $student);
            }
            $writing_task_record = array('writing_Task_Description' => $assessment_description, 'created_Date' => $assessment_date, 'created_By_Teacher_User_Id' => Auth::user()->user_Id, 'teaching_period_Id' => 1, 'task_name' => $assessment_title, 'fk_rubric_id' => $assessment_rubric);
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
            
            /**
             * Mixpanel Code
             */
            $schoolTeacherDetails = DB::table('school_teachers')->where('teachers_user_Id', Auth::user()->user_Id)->get();
            $teacherScriibiLvlDetails = DB::table('teachers_scriibi_levels')->where('teachers_user_Id', Auth::user()->user_Id)->get();
            $schoolDetails = schools::find($schoolTeacherDetails[0]->schools_school_Id);
            $schoolTypeDetails = DB::table('school_types')->where('fk_curriculum_id', $schoolDetails->curriculum_details_curriculum_details_Id)->where('fk_school_type_identifier_id', $schoolDetails->school_type_identifier_id)->get();
            $gradeLabelDetails = DB::table('grade_labels')->where('fk_school_type_id', $schoolTypeDetails[0]->school_type_id)->where('fk_scriibi_level_id', $teacherScriibiLvlDetails[0]->scriibi_levels_scriibi_Level_Id)->get();
            if($assessment_setting == "mine"){
                $option = "class";
            }else if($option == "all"){
                $option = "grade";
            }
            $NoOfAssessments = DB::table('writing_tasks')->where('created_By_Teacher_User_Id', Auth::user()->user_Id)->count();
            $NoOfSkills = DB::table('rubrics_skills')->where('rubrics_rubric_Id', $assessment_rubric)->count();
            $StudentsInTask = DB::table('writting_task_students')->where('fk_writting_task_id', $newWritingTaskId)->count();

            $mp = Mixpanel::getInstance("5581c9a61e65c623c08d3a650f001c68");
            $mp->identify(Auth::user()->user_Id);
            $mp->track("Assessment Created", array(
                "Assessment Id"             => $newWritingTaskId,
                "Assesment Name"            => $assessment_title,
                "Teacher Grade"             => $gradeLabelDetails[0]->grade_label,
                "Teacher Scriibi Level"     => ScriibiLevels::find($gradeLabelDetails[0]->fk_scriibi_level_id)->scriibi_Level,
                "Rubric Id"                 => $assessment_rubric,
                "Class or Grade"            => $option,
                "No. of Assessments"        => $NoOfAssessments,
                "No. of Rubric Skills"      => $NoOfSkills,
                "No. of Current Students"   => $StudentsInTask
              )
            );

            return redirect()->action('AssessmentListController@GenerateAssessmentList');
        }catch(Exception $e){
            //todo
        }
    }

    /**
     * these queries have been written seperately for ease of use but can be optimized further with joins and caching
     */
    public function getStudents($assessment_setting){
        $students_list = array();
        if($assessment_setting == 'mine'){
            $classes = teachers::find(Auth::user()->user_Id)->classes;
            foreach($classes as $class){
                $students_in_class = DB::table('classes_students')->select('students_student_Id')->where('classes_students.classes_class_Id', '=', $class->class_Id)->get();
                foreach($students_in_class as $sic){
                    array_push($students_list, $sic->students_student_Id);
                }
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

    public function ShowWritingTask($assessment_id){
        try{
            $writing_task_details = writing_tasks::find($assessment_id);
            $newWritingTask = new WritingTask($writing_task_details->writing_task_Id, $writing_task_details->task_name, $writing_task_details->writing_Task_Description, $writing_task_details->created_at, $writing_task_details->created_Date, $writing_task_details->created_By_Teacher_User_Id, $writing_task_details->teaching_period_Id, $writing_task_details->fk_rubric_id);
            $newWritingTask->populateStudents();
            $mp = Mixpanel::getInstance("5581c9a61e65c623c08d3a650f001c68");
            $mp->identify(Auth::user()->user_Id);

            $mp->track("Landed on P032", array(
                    "Page Id"           => "P032",
                    "Page Name"         => "Single Assessment Page"
                )
            );
            $mp->track("Assessment Viewed", array(
                "Assessment Id"                  => $assessment_id,
                "Assessment Name"                => $writing_task_details->task_name,
                "No. of Current Students"        => count($newWritingTask->getStudents())
              )
            );
            return view('assessment-studentlist', ['writingTask' => $newWritingTask]);
        }catch(Exception $ex){
            //throw $ex;
            //todo
        }
    }

    public function editAssessment(Request $request)
    {
        try{
            $assessment_id = $request->input('assessment_id');
            $assessment_title = $request->input('assessment_name');
            $assessment_date = $request->input('assessment_date');
            $assessment_description = $request->input('assessment_description');
            DB::table('writing_tasks')
            ->where('writing_task_Id', $assessment_id)
            ->update(['task_name' => $assessment_title, 'writing_Task_Description' => $assessment_description, 'created_Date' => $assessment_date]);
            
            return redirect()->action('WritingTasksController@ShowWritingTask', ['id' => $assessment_id]);
        }
        catch(Exception $e){
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\writing_tasks  $writing_tasks
     * @return \Illuminate\Http\Response
     */
    public function show(writing_tasks $writing_tasks)
    {
        
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
