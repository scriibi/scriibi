<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Mixpanel;
use Exception;
use Illuminate\Http\Request;
use App\Services\RubricListingService;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface;
use App\Repositories\Interfaces\ScriibiLevelRepositoryInterface;

class RubricListController extends Controller
{
    /**
     * creates rubric objects for all rubrics of the currently logged in user
     * @param Request $request
     * @param RubricListingService $rubricListingServiceInstance
     * @return false|Application|Factory|View|string
     */
    public function GenerateUserRubrics(Request $request, RubricListingService $rubricListingServiceInstance)
    {
        try
        {
            $rubrics = $rubricListingServiceInstance->getTeacherTemplates(Auth::user()->id);

            if($request->path() === 'rubric-list-mine')
                return (json_encode($rubrics));

            if($request->path() === 'rubric-list')
                return view('rubric-list', ['rubrics' => json_encode($rubrics)]);
        }
        catch(Exception $e)
        {
            // todo
        }
    }

    public function GenerateRubricDetails($rubric_id, RubricListingService $rubricListingServiceInstance)
    {
        try
        {
            $rubric = $rubricListingServiceInstance->getRubricDetails($rubric_id);
            return view('rubric-details', ['data' => $rubric]);
        }
        catch (Exception $e)
        {
            // todo
        }
    }

    /**
     * creates rubric objects for all scriibi levels
    */
    public function GenerateScriibiRubricsForLevel($teacherLevel, RubricListingService $rubricListingServiceInstance, UserRepositoryInterface $userRepoInt, ScriibiLevelRepositoryInterface $scriibiLevelRepoInt, AssessedLabelRepositoryInterface $assessedRepoInt)
    {
        try
        {
            $scriibiLevel = $teacherLevel === 'NA' ? $scriibiLevelRepoInt->getMinScriibiLevelOfTeacher(Auth::user()->id) : $teacherLevel;
            $curriculumSchoolType = $userRepoInt->getTeacherSchool(Auth::user()->id)[0]->curriculum_school_type_id;
            $rubrics = $rubricListingServiceInstance->getScriibiRubrics($scriibiLevel, $curriculumSchoolType);
            $assessedLabels = $assessedRepoInt->getAssessedLabels($curriculumSchoolType);
            return json_encode(
                [
                    'rubrics' => $rubrics,
                    'assessed_labels' => $assessedLabels,
                    'teacher_level' => $scriibiLevel,
                ]);
        }
        catch(Exception $e)
        {
            //todo
        }
    }

    public function GenerateSharedRubrics(RubricListingService $rubricListingServiceInstance)
    {
        try
        {
            return json_encode($rubricListingServiceInstance->getSharedRubrics(Auth::user()->id));
        }
        catch (Exception $e)
        {
            return json_encode([]);
        }
    }
}
