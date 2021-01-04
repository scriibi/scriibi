<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\RubricService;
use App\Services\RubricBuilderService;
use App\Repositories\Interfaces\SkillRepositoryInterface;
use App\Repositories\Interfaces\CurriculumRepositoryInterface;
use App\Repositories\Interfaces\SchoolTypeRepositoryInterface;


class RubricBuilder extends Controller
{
    /**
     * generates the initial rubric builder page without any skills populated
     */
    public function generateRubricsView(RubricBuilderService $rubricBuilderService)
    {
        try{
            $response = $rubricBuilderService->getUnpopulatedUserRubricBuilder(Auth::user()->id);
            return view('rubrics',
                [
                    'traitObjects' => $response->traits,
                    'assessed_labels' => $response->assessedLabels,
                    'level' => null,
                    'scriibi_user' => false
                ]
            );
        }catch(Exception $e){
            // todo
        }
    }

    /**
     * populates all the skills in all traits which belong to the selected rubric level, the level above
     * and the level below and calculates the flags for all of the skills in the skills collection
    */
    public function generateRubricsViewWithFlags($level, RubricBuilderService $rubricBuilderService)
    {
        try
        {
            $response = $rubricBuilderService->getPopulatedUserRubricBuilder($level, Auth::user()->id);
            return view('rubrics',
                [
                    'traitObjects' => $response->traits,
                    'assessed_labels' => $response->assessedLabels,
                    'level' => $level,
                    'scriibi_user' => false
                ]
            );
        }
        catch(Exception $e)
        {
            // todo
        }
    }

    /**
     * populates all the skills in all traits which belong to the selected rubric level, the level above
     * and the level below and calculates the flags for all of the skills in the skills collection
     * and also retirves the pre-selected skills for the existing rubric and returns a rubric edit page
     */
    public function generateEditRubricView($rubricId, $level, $taskId, RubricBuilderService $rubricBuilderService, SkillRepositoryInterface $skillRepositoryInterface, RubricService $rubricService)
    {
        try{
            $rubric = $rubricService->getRubric($rubricId);
            $scriibiLevel = $level === 'NA' ? $rubric['scriibi_level_id'] : $level;
            $response = $rubricBuilderService->getPopulatedUserRubricBuilder($scriibiLevel, Auth::user()->id);
            $currentAssessment = $taskId === 'NA' ? null : writing_tasks::find($taskId)->toArray();
            $selectedSkills = $skillRepositoryInterface->getSkillIdsOfRubric($rubricId);
            return view('rubric-edit',
                [
                    'rubric' => $rubric,
                    'level' => $scriibiLevel,
                    'traitObjects' => $response->traits,
                    'assessedLabels' => $response->assessedLabels,
                    'selectedSkills' => $selectedSkills,
                    'assessmentCount' => [],
                    'currentAssessment' => $currentAssessment
                ]
            );
        }
        catch(Exception $e){
            // todo
        }
    }

    /**
     * this section will be changed when the cascading criteria selection for scriibi rubric builder is implemented
     */
    public function generateScribiiRubricBuilderView(RubricBuilderService $rubricBuilderService, CurriculumRepositoryInterface $curriculumRepoInt, SchoolTypeRepositoryInterface $schoolTypeRepoInt)
    {
        try{
            $response = $rubricBuilderService->getUnpopulatedUserRubricBuilder(Auth::user()->id);
            $curriculum = $curriculumRepoInt->all();
            $schoolTypes = $schoolTypeRepoInt->all();
            return view('rubrics',
                [
                    'traitObjects' => $response->traits,
                    'assessed_labels' => $response->assessedLabels,
                    'level' => null,
                    'scriibi_user' => true,
                    'curriculum' => $curriculum,
                    'schoolTypes' => $schoolTypes
                ]);
        }catch(Exception $ex){
            // todo
        }
    }

    public function generateScribiiRubricBuilderViewWithFlags($level, RubricBuilderService $rubricBuilderService, CurriculumRepositoryInterface $curriculumRepoInt, SchoolTypeRepositoryInterface $schoolTypeRepoInt)
    {
        try
        {
            $response = $rubricBuilderService->getPopulatedUserRubricBuilder($level, Auth::user()->id);
            $curriculum = $curriculumRepoInt->all();
            $schoolTypes = $schoolTypeRepoInt->all();
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
            // todo
        }
    }
}

