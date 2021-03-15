<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use App\Utils\Sanitize;
use Illuminate\Http\Request;
use App\Services\RubricService;
use App\Services\WritingTaskService;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Services\RubricListingService;
use App\Repositories\RubricRepository;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\SkillRepositoryInterface;
use App\Repositories\Interfaces\GradeLabelRepositoryInterface;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface;

class WritingTasksController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param WritingTaskService $writingTaskService
     * @param UserRepositoryInterface $userRepository
     * @return RedirectResponse
     */
    public function store(Request $request, WritingTaskService $writingTaskService, UserRepositoryInterface $userRepository)
    {
        try
        {
            $error = [];
            $name = Sanitize::htmlSpecialChars($request->input('assessment_name'));
            $description = Sanitize::htmlSpecialChars($request->input('assessment_description'));
            $date = $request->input('assessment_date');
            $classType = Sanitize::htmlSpecialChars(Sanitize::stripTags($request->input('assess')));
            $class = Sanitize::sanitizeInteger($request->input($classType));
            $rubric = Sanitize::sanitizeInteger($request->input('rubric'));
            $school = $userRepository->getTeacherSchool(Auth::user()->id)->toArray();
            $status = DB::table('status')
                ->where('name', 'active')
                ->get()
                ->toArray();
            $messages = [
                'regex' => 'Assessment name can only include alphanumeric characters and spaces'
            ];
            $data =
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
            $rules = [
                'name' => 'regex:/^[a-z\d\_\s]+$/i',
                'description' => 'bail|nullable',
                'date' => 'bail|date',
                'owner_id' => 'bail|integer',
                'class' => 'bail|integer',
                'rubric' => 'bail|integer',
            ];
            $validator = Validator::make($data, $rules, $messages);

            if($validator->fails())
                return redirect()->back()->withErrors($validator);

            if(!$writingTaskService->saveWritingTask($data))
                array_push($error, 'Couldn\'t create Assessment, please try again');

            return redirect()
                ->action('AssessmentListController@GenerateAssessmentList')
                ->withErrors($error);
        }
        catch(Exception $e)
        {
            return redirect()
                ->back()
                ->withErrors('Oops! Something went wrong');
        }
    }

    public function ShowWritingTask(
        Request $request,
        WritingTaskService $writingTaskService,
        UserRepositoryInterface $userRepository,
        RubricListingService $rubricListingService,
        RubricRepository $rubricRepository,
        WritingTaskRepositoryInterface $writingTaskRepository,
        GradeLabelRepositoryInterface $gradeLabelRepository,
        AssessedLabelRepositoryInterface $assessedLabelRepository
    ){
        try
        {
            $writingTask = $writingTaskService->getWritingTask(Sanitize::sanitizeInteger($request->query('task')));
            $rubricId = $rubricRepository->getRubricOfWritingTask($writingTask[0]['id'])[0]['id'];
            $rubric = $rubricListingService->getRubricDetails($rubricId);
            $students = $writingTaskRepository->getStudentsOfWritingTask($writingTask[0]['id']);
            $curriculumSchoolType = $userRepository->getTeacherSchool(Auth::user()->id)->toArray()[0]['curriculum_school_type_id'];
            $assessedLabels = $this->formatLabels($assessedLabelRepository->getAssessedLabels($curriculumSchoolType));
            $gradeLabels = $this->formatLabels($gradeLabelRepository->getGradeLabels($curriculumSchoolType));
            return view('assessment-studentlist', [
                    'writingTask' => $writingTask,
                    'rubric' => $rubric,
                    'students' => $students,
                    'assessedLabels' => $assessedLabels,
                    'gradeLabels' => $gradeLabels
                ]);
        }
        catch(Exception $e)
        {
            return redirect()
                ->back()
                ->withErrors('Oops! Something went wrong');
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
     * the existing assessment details
     * @param Request $request
     * @param WritingTaskService $writingTaskService
     * @param UserRepositoryInterface $userRepository
     * @return RedirectResponse
     */
    public function editAssessment(Request $request, WritingTaskService $writingTaskService, UserRepositoryInterface $userRepository)
    {
        try
        {
            $error = [];
            $assessmentId = Sanitize::sanitizeInteger($request->input('task'));
            $assessmentTitle = Sanitize::htmlSpecialChars($request->input('assessment_name'));
            $assessmentDate = ($request->input('assessment_date'));
            $assessmentDescription = $request->input('assessment_description') === null ? null
                : Sanitize::htmlSpecialChars(Sanitize::stripTags($request->input('assessment_description')));
            $school = $userRepository->getTeacherSchool(Auth::user()->id)[0];
            $messages = [
                'regex' => 'Assessment name can only include alphanumeric characters and spaces',
                'required' => 'Please select at least one skill'
            ];
            $data = [
                'id' => $assessmentId,
                'name' => $assessmentTitle,
                'description' => $assessmentDescription,
                'assessedDate' => $assessmentDate,
                'curriculumSchoolType' => $school['curriculum_school_type_id']
            ];
            $rules = [
                'id' => 'bail|integer',
                'name' => 'regex:/^[a-z\d\_\s]+$/i',
                'description' => 'bail|nullable',
                'assessedDate' => 'bail|date',
                'curriculumSchoolType' => 'bail|integer'
            ];

            $validator = Validator::make($data, $rules, $messages);

            if($validator->fails())
                return redirect()->back()->withErrors($validator);

            if(!$writingTaskService->updateWritingTask($data))
                array_push($error, 'Couldn\'t update writing task, please try again');

            return redirect()->action('WritingTasksController@ShowWritingTask', [
                    'task' => $assessmentId
                ])
                ->withErrors($error);
        }
        catch(Exception $e)
        {
            return redirect()->back()->withErrors('Oops! Something went wrong');
        }
    }

    /**
     * sets the deleted_at field of a writing task once deleted by the user
     * @param Request $request
     * @param WritingTaskService $writingTaskService
     * @return RedirectResponse
     */
    public function softDeleteAssessment(Request $request, WritingTaskService $writingTaskService)
    {
        try
        {
            $error = [];
            $writingTaskId = Sanitize::sanitizeInteger($request->input('task'));
            $data = [
                'writingTask' => $writingTaskId
            ];
            $rules = [
                'writingTask' => 'bail|integer'
            ];
            $validator = Validator::make($data, $rules);

            if($validator->fails())
                return redirect()->back()->withErrors($validator);

            if(!$writingTaskService->softDeleteWritingTask($writingTaskId))
                array_push($error,  'Couldn\'t delete Assessment, please try again');

            return redirect()
                ->action('AssessmentListController@GenerateAssessmentList')
                ->withErrors($error);
        }
        catch (Exception $e)
        {
            DB::rollBack();
            return redirect()
                ->back()
                ->withErrors('Oops! Something went wrong');
        }
    }

    /**
     * reset the deleted_at field for a specific writing task back to null indicating
     * that the assessment has been restored
     * @param Request $request
     * @param WritingTaskService $writingTaskService
     * @return RedirectResponse
     */
    public function restoreSoftDelete(Request $request, WritingTaskService $writingTaskService)
    {
        try
        {
            $writingTaskId = Sanitize::sanitizeInteger($request->query('task'));
            $writingTaskService->restoreSoftDeletedWritingTask($writingTaskId);
            return redirect()->action('AssessmentListController@GenerateDeletedAssessmentList');
        }
        catch (Exception $e)
        {
            return redirect()
                ->back()
                ->withErrors('Oops! Something went wrong');
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

    /**
     * @param Request $request
     * @param WritingTaskService $writingTaskService
     * @param RubricService $rubricService
     * @return RedirectResponse
     */
    public function updateAssessmentSkills(Request $request, WritingTaskService $writingTaskService, RubricService $rubricService)
    {
        try
        {
            $error = [];
            $taskId = Sanitize::sanitizeInteger($request->input('task_id'));
            $rubricId = Sanitize::sanitizeInteger($request->input('rubric'));
            $updatedName = Sanitize::htmlSpecialChars($request->input('rubric_name'));
            $updatedAssessedLevel = Sanitize::sanitizeInteger($request->input('assessed_level'));
            $updatedSkills = Sanitize::sanitizeInteger($request->input('rubric_skills'));
            $messages = [
                'regex' => 'Rubric name can only include alphanumeric characters and spaces',
                'required' => 'Please select at least one skill'
            ];
            $data = [
                'writingTaskId' => $taskId,
                'id' => $rubricId,
                'name' => $updatedName,
                'level' => $updatedAssessedLevel,
                'skills' => $updatedSkills
            ];
            $rules = [
                'writingTaskId' => 'bail|integer',
                'id' => 'bail|integer',
                'name' => 'regex:/^[a-z\d\_\s]+$/i',
                'level' => 'bail|integer',
                'skills' => 'bail|array|required'
            ];

            $validator = Validator::make($data, $rules, $messages);

            if($validator->fails())
                return redirect()->back()->withErrors($validator);

            DB::beginTransaction();
            $rubricUpdated = $rubricService->updateTeacherTemplate($data);
            $taskUpdated = $writingTaskService->updateSkills($data);
            DB::commit();

            if(!($rubricUpdated && $taskUpdated))
                array_push($error, 'Couldn\'t update writing task, please try again');

            return redirect()
                ->action('WritingTasksController@ShowWritingTask', [
                    'task' => $taskId
                ])
                ->withErrors($error);
        }
        catch (Exception $e)
        {
            DB::rollBack();
            return redirect()
                ->back()
                ->withErrors('Oops! Something went wrong');
        }
    }
}
