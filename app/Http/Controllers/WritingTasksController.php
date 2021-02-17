<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use App\Rubric;
use App\WritingTask;
use App\writing_tasks;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\WritingTaskService;
use App\Http\Controllers\Controller;
use App\Services\RubricListingService;
use App\Services\RubricService;
use App\Repositories\RubricRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface;
use App\Repositories\Interfaces\GradeLabelRepositoryInterface;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface;
use App\Repositories\Interfaces\SkillRepositoryInterface;

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
        try
        {
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
     * @param Request $request
     * @param WritingTaskService $writingTaskService
     * @param UserRepositoryInterface $userRepository
     * @return RedirectResponse
     */
    public function editAssessment(Request $request, WritingTaskService $writingTaskService, UserRepositoryInterface $userRepository)
    {
        try
        {
            $assessmentId = $request->input('assessment_id');
            $assessmentTitle = $request->input('assessment_name');
            $assessmentDate = $request->input('assessment_date');
            $assessmentDescription = $request->input('assessment_description');
            $school = $userRepository->getTeacherSchool(Auth::user()->id)[0];
            $updatedDetails =
                [
                    'id' => $assessmentId,
                    'name' => $assessmentTitle,
                    'description' => $assessmentDescription,
                    'assessedDate' => $assessmentDate,
                    'curriculumSchoolType' => $school['curriculum_school_type_id']
                ];
            $writingTaskService->updateWritingTask($updatedDetails);
            return redirect()->action('WritingTasksController@ShowWritingTask',
                [
                    'id' => $assessmentId
                ]
            );
        }
        catch(Exception $e){
            // todo
        }
    }

    /**
     * sets the deleted_at field of a writing task once deleted by the user
     */
    public function softDeleteAssessment(Request $request, WritingTaskService $writingTaskService)
    {
        try
        {
            $assessmentId = $request->input('assessmentId');
            $writingTaskService->softDeleteWritingTask($assessmentId);
            return redirect()->action('AssessmentListController@GenerateAssessmentList');
        }
        catch (Exception $e)
        {
            // todo
        }
    }

    /**
     * reset the deleted_at field for a specific writing task back to null indicating
     * that the assessment has been restored
     * @param $assessmentId
     * @param WritingTaskService $writingTaskService
     * @return RedirectResponse
     */
    public function restoreSoftDelete($assessmentId, WritingTaskService $writingTaskService)
    {
        try
        {
            $writingTaskService->restoreSoftDeletedWritingTask($assessmentId);
            return redirect()->action('AssessmentListController@GenerateDeletedAssessmentList');
        }
        catch (Exception $e)
        {
            // todo
        }

    }

    public function retrieveAssessedSkills($taskId, SkillRepositoryInterface $skillRepository, WritingTaskService $writingTaskService)
    {
        try
        {
            $assessedSkills = $writingTaskService->getAssessedSkills($taskId);
            return response()->json($skillRepository->getSkillsWithTraits($assessedSkills));
        }
        catch (Exception $e)
        {
            // todo
        }
    }

    public function updateAssessmentSkills(Request $request, WritingTaskService $writingTaskService, RubricService $rubricService)
    {
        try
        {
            $taskId = $request->input('task_id');
            $rubricId = $request->input('rubric_id');
            $updatedName = $request->input('rubric_name');
            $updatedAssessedLevel = $request->input('assessed_level');
            $updatedSkills = $request->input('rubric_skills');

            DB::beginTransaction();

            $rubricService->updateTeacherTemplate($rubricId, $updatedName, $updatedAssessedLevel, $updatedSkills);
            $object =
                [
                    'writingTaskId' => $taskId,
                    'skills' => $updatedSkills
                ];
            $result = $writingTaskService->updateSkills($object);

            DB::commit();
            return redirect()->action('WritingTasksController@ShowWritingTask', 
                [
                'assessment_id' => $taskId
                ]
            );
        }
        catch (Exception $e)
        {
            DB::rollBack();
            // todo
        }
    }
}
