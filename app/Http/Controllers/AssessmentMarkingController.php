<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use App\Utils\Sanitize;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\WritingTaskService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Services\StudentListingService;
use Illuminate\Support\Facades\Validator;
use App\Services\WritingTaskMarkingService;
use App\Repositories\ScriibiLevelRepository;
use Illuminate\Contracts\Foundation\Application;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface as AssessedLevelRepository;


class AssessmentMarkingController extends Controller
{
    /**
     * @param Request $request
     * @param StudentListingService $studentListingService
     * @param WritingTaskMarkingService $markingService
     * @param WritingTaskService $writingTaskService
     * @param UserRepository $userRepository
     * @param AssessedLevelRepository $assessedLabelRepository
     * @return RedirectResponse|View
     */
    public function GenerateStudentMarkingPage(
        Request $request,
        StudentListingService $studentListingService,
        WritingTaskMarkingService $markingService,
        WritingTaskService $writingTaskService,
        UserRepository $userRepository,
        AssessedLevelRepository $assessedLabelRepository
    ){
        try
        {
            $studentId = Sanitize::sanitizeInteger($request->query('student'));
            $writingTaskId = Sanitize::sanitizeInteger($request->query('task'));

            if(!(is_numeric($studentId) && is_numeric($writingTaskId)))
                return redirect()->back()->withErrors('Invalid query');

            $student = $studentListingService->getStudent($studentId);
            $school = $userRepository->getTeacherSchool(Auth::user()->id)[0];
            $curriculumId = DB::table('curriculum_school_type')->where('id', $school['curriculum_school_type_id'])->get()->toArray()[0]->curriculum_id;
            $assessedLabel = $assessedLabelRepository->getAssessedLabel($school['curriculum_school_type_id'], $student['assessed_level_id'])[0]['label'];
            $skillCards = $markingService->getStudentSkillCardsWithExtras($student, $writingTaskId, $curriculumId);
            $writingTaskWithStudent = $writingTaskService->getStudentOfTask($writingTaskId, $studentId)[0];

            return view('assessment-marking', [
                    'rubrics' => $skillCards['rangeForLabels'],
                    'skillCards' => $skillCards['skillCards'],
                    'firstName' => $student['first_name'],
                    'lastName' => $student['last_name'],
                    'student_id' => $student['id'],
                    'writting_task_id' => $writingTaskId,
                    'status' => $writingTaskWithStudent['students'][0]['pivot']['status_flag'],
                    'assessed_level' => $assessedLabel,
                    'assessed_level_scriibi_id' => $student['assessed_level_id'],
                    'results' => $skillCards['prepopulatedResults'],
                    'comment' => $writingTaskWithStudent['students'][0]['pivot']['comment'],
                    'fullScriibiRange' => $skillCards['fullScriibiRange']
                ]);
        }
        catch (Exception $e)
        {
            return redirect()
                ->back()
                ->withErrors('Oops! Something went wrong');
        }
    }

    public function saveAssessment(Request $request, WritingTaskMarkingService $markingService){
        try{
            $error = [];
            $skillsAssessedArray = array();
            $skillCount = Sanitize::sanitizeInteger($request->input('skillCount'));
            $studentId = Sanitize::sanitizeInteger($request->input('studentId'));
            $writingTask = Sanitize::sanitizeInteger($request->input('writingTask'));
            $comment = $request->input('comment') === null ? null : Sanitize::htmlSpecialChars(Sanitize::stripTags($request->input('comment')));
            $status = Sanitize::sanitizeInteger($request->input('status'));
            $data = [
                'skillCount' => $skillCount,
                'studentId' => $studentId,
                'writingTask' => $writingTask,
                'comment' => $comment,
                'status' => $status
            ];
            $rules = [
                'skillCount' => 'bail|integer',
                'studentId' => 'bail|integer',
                'writingTask' => 'bail|integer',
                'status' => 'bail|integer'
            ];

            $validator = Validator::make($data, $rules);

            if($validator->fails())
                return redirect()->back()->withErrors($validator);

            for($i = 1; $i <= $skillCount; $i++){
                $student_skill = $request->input('skill_mark_' . (string)$i);
                if(isset($student_skill)){
                    if($student_skill != 'na'){
                        $skill_pointer = Sanitize::sanitizeInteger(explode("/", $student_skill));
                        $skillsAssessedArray[$skill_pointer[1]] = $skill_pointer[0];
                    }
                }
            }
            if(!$markingService->saveMarks($studentId, $writingTask, $skillsAssessedArray, $comment, $status))
                throw new Exception('Unable to save marking');

            return redirect()->action('WritingTasksController@ShowWritingTask', [
                    'task' => $writingTask
                ]);
        }catch(Exception $e){
            return redirect()
                ->back()
                ->withErrors('Oops! Something went wrong');
        }

    }

    public function getMarkingCriteriaOfRange(Request $request, WritingTaskMarkingService $markingService, UserRepository $userRepository)
    {
        try
        {
            $query = $request->all();
            $school = $userRepository->getTeacherSchool(Auth::user()->id)[0];
            $curriculumId = DB::table('curriculum_school_type')->where('id', $school['curriculum_school_type_id'])->get()->toArray()[0]->curriculum_id;
            $skillCards = $markingService->getStudentSkillCardsForShiftedRange($query["task"], $curriculumId, $query["shift"], $query["level"]);

            return json_encode(
                [
                    'rubrics' => $skillCards['rangeForLabels'],
                    'skillCards' => $skillCards['skillCards']
                ]
            );
        }
        catch(Exception $ex)
        {
            // todo
        }
    }

    public function getScriibiLevel(Request $request, ScriibiLevelRepository $scriibiLevelRepository){
        $query = $request->all();
        return (json_encode((string)$scriibiLevelRepository->getScriibiLevelValueAsFloat($query["id"])));
    }
}
