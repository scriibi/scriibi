<?php

namespace App\Http\Controllers;

use DB;
use Auth;
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
            $rubrics = $rubricListingServiceInstance->getTeacherTemplate($rubric_id);
            return view('rubric-details', ['data' => $rubrics]);
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
}
