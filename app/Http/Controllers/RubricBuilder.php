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
use App\Http\Controllers\Controller;
use App\Services\RubricService;
use App\Services\RubricBuilderService;
use App\Repositories\Interfaces\SkillRepositoryInterface;
use App\Repositories\Interfaces\CurriculumRepositoryInterface;
use App\Repositories\Interfaces\SchoolTypeRepositoryInterface;
use App\Repositories\Interfaces\WritingTaskRepositoryInterface;


class RubricBuilder extends Controller
{
    public function getRubricBuilder(Request $request, RubricBuilderService $rubricBuilderService)
    {
        try
        {
            $level = null;
            $response = null;

            if($request->has('level') && is_numeric($request->query('level')))
            {
                $level = $request->query('level');
                $response = $rubricBuilderService->getPopulatedUserRubricBuilder($request->query('level'), Auth::user()->id);
            }
            else
            {
                $response = $rubricBuilderService->getUnpopulatedUserRubricBuilder(Auth::user()->id);
            }

            return view('rubrics',
                [
                    'traitObjects' => $response->traits,
                    'assessed_labels' => $response->assessedLabels,
                    'level' => $level,
                    'scriibi_user' => false
                ]
            );
        }
        catch (Exception $e)
        {
            return redirect('/rubric-list');
        }
    }

    public function getScriibiRubricBuilder(Request $request, RubricBuilderService $rubricBuilderService, CurriculumRepositoryInterface $curriculumRepoInt, SchoolTypeRepositoryInterface $schoolTypeRepoInt)
    {
        try
        {
            $level = null;
            $response = null;
            $curriculum = $curriculumRepoInt->all();
            $schoolTypes = $schoolTypeRepoInt->all();

            if($request->has('level') && is_numeric($request->query('level')))
            {
                $level = $request->query('level');
                $response = $rubricBuilderService->getPopulatedUserRubricBuilder($level, Auth::user()->id);
            }
            else
            {
                $response = $rubricBuilderService->getUnpopulatedUserRubricBuilder(Auth::user()->id);
            }

            return view('rubrics',
                [
                    'traitObjects' => $response->traits,
                    'assessed_labels' => $response->assessedLabels,
                    'level' => $level,
                    'scriibi_user' => true,
                    'curriculum' => $curriculum,
                    'schoolTypes' => $schoolTypes
                ]);
        }
        catch (Exception $e)
        {
            return redirect('/home');
        }
    }

    /**
     * populates all the skills in all traits which belong to the selected rubric level, the level above
     * and the level below and calculates the flags for all of the skills in the skills collection
     * and also retirves the pre-selected skills for the existing rubric and returns a rubric edit page
     * @param Request $request
     * @param RubricBuilderService $rubricBuilderService
     * @param SkillRepositoryInterface $skillRepositoryInterface
     * @param RubricService $rubricService
     * @param WritingTaskRepositoryInterface $writingTaskRepository
     * @return Application|Factory|View
     */
    public function generateEditRubricView(Request $request, RubricBuilderService $rubricBuilderService, SkillRepositoryInterface $skillRepositoryInterface, RubricService $rubricService, WritingTaskRepositoryInterface $writingTaskRepository)
    {
        try
        {
            $rubricId = $request->query('rubric');
            $scriibiLevelId = $request->query('level');
            $taskId = $request->query('task');
            $rubric = $rubricService->getRubric($rubricId);
            $scriibiLevel = $scriibiLevelId === 'NA' ? $rubric['scriibi_level_id'] : $scriibiLevelId;
            $response = $rubricBuilderService->getPopulatedUserRubricBuilder($scriibiLevel, Auth::user()->id);
            $currentAssessment = $taskId === 'NA' ? null : $writingTaskRepository->getWritingTask($taskId);
            $selectedSkills = $skillRepositoryInterface->getSkillIdsOfRubric($rubricId);

            return view('rubric-edit',
                [
                    'rubric' => $rubric,
                    'level' => $scriibiLevel,
                    'traitObjects' => $response->traits,
                    'assessedLabels' => $response->assessedLabels,
                    'selectedSkills' => $selectedSkills,
                    'currentAssessment' => $currentAssessment
                ]
            );
        }
        catch(Exception $e)
        {
            // todo
        }
    }
}

