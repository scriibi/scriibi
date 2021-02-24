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
}
