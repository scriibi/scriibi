<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use App\Rubric;
use App\WritingTask;
use App\writing_tasks;
use Illuminate\Http\Request;
use App\Services\WritingTaskService;
use App\Http\Controllers\Controller;
use App\Services\RubricListingService;
use App\Repositories\RubricRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface;
use App\Repositories\Interfaces\GradeLabelRepositoryInterface;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface;

class WritingTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table('writing_tasks')->select('writing_tasks.*')->where('writing_tasks.created_By_Teacher_User_Id', '=', Auth::user()->user_Id)->where('deleted_at', '=', null)->get();
    }

    public function indexSingleTask($taskId){
        return DB::table('writing_tasks')->select('writing_tasks.*')->where('writing_tasks.writing_task_Id', '=', $taskId)->get()->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param WritingTaskService $writingTaskService
     * @param UserRepositoryInterface $userRepository
     */
    public function store(Request $request, WritingTaskService $writingTaskService, UserRepositoryInterface $userRepository)
    {
        $students_list = array();
        try{
            $name = $request->input('assessment_name');
            $description = $request->input('assessment_description');
            $date = $request->input('assessment_date');
            $classType = $request->input('assess');
            $class = $request->input($classType);
            $rubric = $request->input('rubric');
            $school = $userRepository->getTeacherSchool(Auth::user()->id)->toArray();
            $status = DB::table('status')
                ->where('name', 'active')
                ->get()
                ->toArray();
            $input =
                [
                    'name' => $name,
                    'description' => $description,
                    'date' => $date,
                    'owner_id' => Auth::user()->id,
                    'school' => $school[0],
                    'status' => $status[0]->id,
                    'class' => $class,
                    'rubric' => $rubric,
                ];

            $result = $writingTaskService->saveWritingTask($input);
            return redirect()->action('AssessmentListController@GenerateAssessmentList');
        }catch(Exception $e){
            //todo
        }
    }

    public function ShowWritingTask($assessment_id, WritingTaskService $writingTaskService, UserRepositoryInterface $userRepository, RubricListingService $rubricListingService, RubricRepository $rubricRepository, WritingTaskRepositoryInterface $writingTaskRepository, GradeLabelRepositoryInterface $gradeLabelRepository, AssessedLabelRepositoryInterface $assessedLabelRepository){
        try{
            $writingTask = $writingTaskService->getWritingTask($assessment_id);
            $rubricId = $rubricRepository->getRubricOfWritingTask($writingTask[0]['id'])[0]['id'];
            $rubric = $rubricListingService->getRubricDetails($rubricId);
            $students = $writingTaskRepository->getStudentsOfWritingTask($writingTask[0]['id']);
            $curriculumSchoolType = $userRepository->getTeacherSchool(Auth::user()->id)->toArray()[0]['curriculum_school_type_id'];
            $assessedLabels = $this->formatLabels($assessedLabelRepository->getAssessedLabels($curriculumSchoolType));
            $gradeLabels = $this->formatLabels($gradeLabelRepository->getGradeLabels($curriculumSchoolType));
            return view('assessment-studentlist',
                [
                    'writingTask' => $writingTask,
                    'rubric' => $rubric,
                    'students' => $students,
                    'assessedLabels' => $assessedLabels,
                    'gradeLabels' => $gradeLabels
                ]
            );
        }catch(Exception $ex){
            //todo
        }
    }

    protected function formatLabels($labels): array
    {
        try
        {
            $result = [];
            $length = count($labels);
            for($i = 0; $i < $length; $i++)
            {
                $result[$labels[$i]['scriibi_level_id']] = $labels[$i]['label'];
            }
            return $result;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    public function addStudentsToAssessment(Request $request, WritingTaskService $writingTaskService, UserRepositoryInterface $userRepository, GradeLabelRepositoryInterface $gradeLabelRepository, AssessedLabelRepositoryInterface $assessedLabelRepository)
    {
        try
        {
            $students = explode(',', $request->input('students'));
            $writingTaskId = $request->input('writingTaskId');
            $result = $writingTaskService->addStudents($students, $writingTaskId);
            $curriculumSchoolType = $userRepository->getTeacherSchool(Auth::user()->id)->toArray()[0]['curriculum_school_type_id'];
            $assessedLabels = $this->formatLabels($assessedLabelRepository->getAssessedLabels($curriculumSchoolType));
            $gradeLabels = $this->formatLabels($gradeLabelRepository->getGradeLabels($curriculumSchoolType));
            $response =
                [
                    'status' => true,
                    'writingTaskId' => $writingTaskId,
                    'students' => $result,
                    'taskStatus' => 'incomplete',
                    'assessedLabels' => $assessedLabels,
                    'gradeLabels' => $gradeLabels
                ];
            return json_encode($response);
        }
        catch (Exception $e)
        {
            // todo
        }
    }

    public function deleteStudentsFromAssessment(Request $request, WritingTaskService $writingTaskService)
    {
        try
        {
            $students = $request->input('students');
            $writingTaskId = $request->input('writingTask');
            $response = $writingTaskService->deleteStudents($students, $writingTaskId);
            return json_encode($response);
        }
        catch (Exception $e)
        {
            // todo
        }
    }

    /**
     * take in post data for the assessment details and update
     * the existing assessmentt details
     */
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
     * sets the deleted_at field of a writing task once deleted by the user
     */
    public function softDeleteAssessment(Request $request){
        DB::table('writing_tasks')
            ->where('writing_task_Id', $request->input('assessmentId'))
            ->update(['deleted_at' => date('Y-m-d H:i:s', time())]);

        return redirect()->action('AssessmentListController@GenerateAssessmentList');
    }

    /**
     * return all the assessment records with the deleted_at field set to a timestamp
     * which indicates they have been soft deleted
     */
    public function getSoftDeletes(){
        return DB::table('writing_tasks')->select('writing_tasks.*')->where('writing_tasks.created_By_Teacher_User_Id', '=', Auth::user()->user_Id)->where('deleted_at', '!=', null)->get();
    }

    /**
     * reset the deleted_at field for a specific writing task back to null indicating
     * that the assessment has been restored
     */
    public function restoreSoftDelete($assessmentId){
        DB::table('writing_tasks')
            ->where('writing_task_Id', $assessmentId)
            ->update(['deleted_at' => null]);

        return redirect()->action('AssessmentListController@GenerateDeletedAssessmentList');
    }

    public function retrieveAssessedSkills($taskId){
        $skills = DB::table('traits')
            ->join('skills_traits', 'traits.trait_Id', '=', 'skills_traits.skills_traits_traits_trait_Id')
            ->join('skills', 'skills_traits.skills_traits_skills_skill_Id', '=', 'skills.skill_Id')
            ->join('tasks_skills', 'skills.skill_Id', '=', 'tasks_skills.skills_skill_Id')
            ->join('tasks_students', 'tasks_skills.tasks_skills_Id', '=', 'tasks_students.tasks_skills_Id')
            ->where('tasks_skills.writing_tasks_writing_task_Id', '=', $taskId)
            ->select('traits.colour', 'skills.skill_Id', 'skills.skill_Name')
            ->distinct()
            ->get()
            ->toArray();
        return response()->json($skills);
    }
}
