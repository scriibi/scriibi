<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use Exception;
use App\ScriibiLevels;
use App\writing_tasks;
use App\Rubrics_skills;
use App\tasks_students;
use App\students;
use App\text_types_skills;
use Illuminate\Http\Request;
use App\Repositories\ScriibiLevelRepository;
use App\Services\StudentListingService;
use App\Services\WritingTaskMarkingService;
use App\Services\WritingTaskService;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface as AssessedLevelRepository;


class AssessmentMarkingController extends Controller
{
    public function GenerateStudentMarkingPage($student_id, $writing_task_id, StudentListingService $studentListingService, WritingTaskMarkingService $markingService, WritingTaskService $writingTaskService, ScriibiLevelRepository $scriibiLevelRepository, UserRepository $userRepository, AssessedLevelRepository $assessedLabelRepository)
    {
        try
        {
            $student  = $studentListingService->getStudent($student_id);
            $school = $userRepository->getTeacherSchool(Auth::user()->id)[0];
            $curriculumId = DB::table('curriculum_school_type')->where('id', $school['curriculum_school_type_id'])->get()->toArray()[0]->curriculum_id;
            $assessedLabel = $assessedLabelRepository->getAssessedLabel($school['curriculum_school_type_id'], $student['assessed_level_id'])[0]['label'];
            $skillCards = $markingService->getStudentSkillCardsWithExtras($student, $writing_task_id, $curriculumId);
            $writingTaskWithStudent = $writingTaskService->getStudentOfTask($writing_task_id, $student_id)[0];

            return view('assessment-marking',
                [
                    'rubrics' => $skillCards['rangeForLabels'],
                    'skillCards' => $skillCards['skillCards'],
                    'firstName' => $student['first_name'],
                    'lastName' => $student['last_name'],
                    'student_id' => $student['id'],
                    'writting_task_id' => $writing_task_id,
                    'status' => $writingTaskWithStudent['students'][0]['pivot']['status_flag'],
                    'assessed_level' => $assessedLabel,
                    'assessed_level_scriibi_id' => $student['assessed_level_id'],
                    'results' => $skillCards['prepopulatedResults'],
                    'comment' => $writingTaskWithStudent['students'][0]['pivot']['comment'],
                    'fullScriibiRange' => $skillCards['fullScriibiRange']
                ]
            );
        }
        catch (Exception $e)
        {
            // todo
        }
    }

    public function saveAssessment(Request $request, WritingTaskMarkingService $markingService){
        try{
            $skillsAssessedArray = array();
            $skillCount = $request->input('skillCount');
            $studentId = $request->input('studentId');
            $writingTask = $request->input('writingTask');
            $comment = $request->input('comment');
            $status = $request->input('status');

            for($i = 1; $i <= $skillCount; $i++){
                $student_skill = $request->input('skill_mark_' . (string)$i);
                if(isset($student_skill)){
                    if($student_skill != 'na'){
                        $skill_pointer = explode("/", $student_skill);
                        $skillsAssessedArray[$skill_pointer[1]] = $skill_pointer[0];
                    }
                }
            }
            $result = $markingService->saveMarks($studentId, $writingTask, $skillsAssessedArray, $comment, $status);
            return redirect()->action('WritingTasksController@ShowWritingTask',
                [
                    'assessment_id' => $writingTask
                ]
            );
        }catch(Exception $ex){
            // throw $ex;
            //todo
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
