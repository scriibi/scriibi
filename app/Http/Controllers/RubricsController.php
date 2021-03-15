<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use Exception;
use App\Utils\Sanitize;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\RubricService;
use AssessmentMarkingController;
use Illuminate\Routing\Redirector;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Foundation\Application;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\GradeLabelRepositoryInterface;

class RubricsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @param RubricService $rubricService
     */
    public function saveTeacherTemplate(Request $request, RubricService $rubricService)
    {
        try
        {
            $error = [];
            $name = Sanitize::htmlSpecialChars($request->input('rubric_name'));
            $assessedLevel = Sanitize::sanitizeInteger($request->input('assessed_level'));
            $skills = Sanitize::sanitizeInteger($request->input('rubric_skills'));
            $messages = [
                'regex' => 'Rubric name can only include alphanumeric characters and spaces'
            ];
            $data = [
                'name' => $name,
                'level' => $assessedLevel,
                'skills' => $skills,
            ];
            $rules = [
                'name' => 'regex:/^[a-z\d\_\s]+$/i',
                'level' => 'bail|integer',
                'skills' => 'bail|array|required'
            ];

            $validator = Validator::make($data, $rules, $messages);

            if($validator->fails())
                return redirect()->back()->withErrors($validator);

            if(!$rubricService->saveTeacherTemplate(Auth::user()->id, $data))
                array_push($error, 'Couldn\t save rubric, please try again');

            return redirect('/rubric-list')->withErrors($error);
        }
        catch (Exception $e)
        {
            return redirect()->back()->withErrors('Oops! Something went wrong');
        }
    }

    /**
     * deletes an existing rubric from the rubric table, rubrics_teachers table and also the rubrics_skills table
     * @param Request $request
     * @param RubricService $rubricService
     * @return Application|RedirectResponse|Redirector
     */
    public function deleteRubric(Request $request, RubricService $rubricService)
    {
        try
        {
            $error = [];
            $rubricId = Sanitize::sanitizeInteger($request->input('rubric'));

            if(!$rubricService->deleteRubric($rubricId))
                array_push($error, 'Couldn\'t delete Rubric, please try again later');

            return redirect('/rubric-list')->withErrors($error);
        }
        catch(Exception $e)
        {
            return redirect('/rubric-list')
                ->withErrors('Oops! Something went wrong');
        }
    }

    /**
     * Update the specified resource in storage
     * @param Request $request
     * @param RubricService $rubricService
     * @return Response|RedirectResponse
     */
    public function updateRubric(Request $request, RubricService $rubricService)
    {
        try
        {
            $error = [];
            $rubricId = Sanitize::sanitizeInteger($request->input('rubric'));
            $rubricName = Sanitize::htmlSpecialChars($request->input('rubric_name'));
            $assessedLevel = Sanitize::sanitizeInteger($request->input('assessed_level'));
            $skills = Sanitize::sanitizeInteger($request->input('rubric_skills'));
            $messages = [
                'regex' => 'Rubric name can only include alphanumeric characters and spaces',
                'required' => 'Please select at least one skill'
            ];
            $data = [
                'id' => $rubricId,
                'name' => $rubricName,
                'level' => $assessedLevel,
                'skills' => $skills
            ];
            $rules = [
                'id' => 'bail|integer',
                'name' => 'regex:/^[a-z\d\_\s]+$/i',
                'level' => 'bail|integer',
                'skills' => 'bail|array|required'
            ];
            $validator = Validator::make($data, $rules, $messages);

            if($validator->fails())
                return redirect()->back()->withErrors($validator);

            if(!$rubricService->updateTeacherTemplate($data))
                array_push($error, 'Couldn\'t update Rubric, please try again');

            return redirect('/rubric-list')->withErrors($error);
        }
        catch(Exception $e){
            return redirect()->back()->withErrors('Oops! Something went wrong');
        }
    }

    /**
     * @param Request $request
     * @param RubricService $rubricService
     * @return Application|RedirectResponse|Redirector
     */
    public function saveScriibiRubric(Request $request, RubricService $rubricService)
    {
        try
        {
            $error = [];
            $rubricName = Sanitize::htmlSpecialChars($request->input('rubric_name'));
            $assessedLevel = Sanitize::sanitizeInteger($request->input('assessed_level'));
            $curriculum = Sanitize::sanitizeInteger($request->input('curriculum'));
            $schoolType = Sanitize::sanitizeInteger($request->input('schoolType'));
            $skills = Sanitize::sanitizeInteger($request->input('rubric_skills'));
            $messages = [
                'regex' => 'Rubric name can only include alphanumeric characters and spaces',
                'required' => 'Please select at least one skill'
            ];
            $data = [
                'name' => $rubricName,
                'level' => $assessedLevel,
                'curriculum' => $curriculum,
                'schoolType' => $schoolType,
                'skills' => $skills
            ];

            $rules = [
                'name' => 'regex:/^[a-z\d\_\s]+$/i',
                'level' => 'bail|integer',
                'curriculum' => 'bail|integer',
                'schoolType' => 'bail|integer',
                'skills' => 'bail|array|required'
            ];
            $validator = Validator::make($data, $rules,$messages);

            if($validator->fails())
                return redirect()->back()->withErrors($validator);

            if(!$rubricService->saveScriibiRubric($data))
                array_push($error, 'Couldn\' save scriibi rubric, please try again');

            return redirect('/scriibi-rubric-builder')->withErrors($error);
        }
        catch (Exception $e)
        {
            return redirect('/scriibi-rubric-builder')->withErrors('Oops! Something went wrong');
        }
    }

    public function getIndividualRubricSharees($rubricId, UserRepositoryInterface $userRepository, RubricService $rubricService)
    {
        try
        {
            $teacherSchoolId = $userRepository->getTeacherSchool(Auth::user()->id)->toArray()[0]['id'];
            $allTeachers = $userRepository->getAllTeachersOfSchool($teacherSchoolId);
            $response = $rubricService->markSharedUsers($rubricId, $allTeachers);
            return json_encode($response);
        }
        catch (Exception $e)
        {
            return json_encode($e);
        }
    }

    public function getTeamRubricSharees(UserRepositoryInterface $userRepository, GradeLabelRepositoryInterface $gradeLabelRepository)
    {
        try
        {
            $curriculumSchoolTypeId = $userRepository->getTeacherSchool(Auth::user()->id)->toArray()[0]['curriculum_school_type_id'];
            $gradeLabels = $gradeLabelRepository->getGradeLabels($curriculumSchoolTypeId);

            return json_encode($gradeLabels);
        }
        catch (Exception $e)
        {
            // todo
        }
    }

    public function shareRubric(Request $request, RubricService $rubricService, UserRepositoryInterface $userRepository)
    {
        try
        {
            $response = null;
            $teacherId = Auth::user()->id;
            $rubricId = $request->input('rubricId');
            $shareType = $request->input('shareType');
            $associates = $request->input('teachers');

            if(gettype($associates) == 'array')
            {
                if($shareType === 'individual')
                {
                    $response = $rubricService->shareRubricWithIndividuals($rubricId, $teacherId, $associates);
                }
                else if($shareType === 'team')
                {
                    $schoolId = $userRepository->getTeacherSchool(Auth::user()->id)->toArray()[0]['id'];
                    $response = $rubricService->shareRubricWithTeams($rubricId, $teacherId, $schoolId, $associates);
                }
                else
                {
                    throw new Exception('Unrecognized share type');
                }
                return json_encode($response);
            }
            else
            {
                throw new Exception('Invalid data type passed in');
            }
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    public function copyRubric(Request $request, RubricService $rubricService)
    {
        try
        {
            $teacherId = Auth::user()->id;
            $rubricId = $request->input('rubricId');
            $customName = $request->input('customName');
            $result = $rubricService->copyRubric($rubricId, $customName, $teacherId);
            return json_encode($result);
        }
        catch (Exception $e)
        {
            return json_encode(false);
        }
    }

    public function getRubricDetails(Request $request, RubricService $rubricService)
    {
        try
        {
            if($request->has('rubric') && is_numeric($request->query('rubric')))
            {
                return json_encode($rubricService->getRubricDetails($request->query('rubric')));
            }
            else
            {
                throw new Exception('Invalid RubricId passed');
            }
        }
        catch (Exception $e)
        {
            return json_encode(null);
        }
    }
}
