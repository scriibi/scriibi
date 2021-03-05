<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use Exception;
use App\Rubrics;
use App\ScriibiLevels;
use App\skills_levels;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\RubricService;
use AssessmentMarkingController;
use Illuminate\Routing\Redirector;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
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
    public function store(Request $request, RubricService $rubricService)
    {   // do exception handling and data cleaning here later
        try
        {
            $template = array(
                'name' => $request->input('rubric_name'),
                'level' => $request->input('assessed_level'),
                'skills' => $request->input('rubric_skills'),
            );
            $rubricService->saveTeacherTemplate(Auth::user()->id, $template);
            return redirect('/rubric-list');
        }
        catch (Exception $e)
        {
            // todo
            return redirect('/rubric-list');
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
            $rubricService->deleteRubric($request->input('rubricId'));
            return redirect('/rubric-list');
        }
        catch(Exception $e)
        {
            return redirect('/rubric-list');
        }
    }

    /**
     * Update the specified resource in storage
     * @param Request $request
     * @param RubricService $rubricService
     * @return Response
     */
    public function update(Request $request, RubricService $rubricService)
    {
        try
        {
            // todo - add a check for the number of skills (it cannot be zero) and sanitize data
            $rubricService->updateTeacherTemplate($request->input('rubric_id'), $request->input('rubric_name'), $request->input('assessed_level'), $request->input('rubric_skills'));
            return redirect('/rubric-list');
        }
        catch(Exception $e){
            // todo
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
        catch (Exception $e)
        {
            // todo
            return redirect('/scriibi-rubric-builder');
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
}
