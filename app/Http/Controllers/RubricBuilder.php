<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\RubricBuilderService;
use App\Repositories\Interfaces\SkillRepositoryInterface;
use App\Repositories\Interfaces\RubricRepositoryInterface;

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
            //todo
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
            //todo
        }
    }

    /**
     * populates all the skills in all traits which belong to the selected rubric level, the level above
     * and the level below and calculates the flags for all of the skills in the skills collection 
     * and also retirves the pre-selected skills for the existing rubric and returns a rubric edit page 
     */
    public function generateEditRubricView($rubricId, $taskId, RubricBuilderService $rubricBuilderService, SkillRepositoryInterface $skillRepositoryInterface, RubricRepositoryInterface $rubricRepositoryInterface)
    {
        try{
            $rubric = $rubricRepositoryInterface->getRubric($rubricId);
            $selectedSkills = $skillRepositoryInterface->getSkillIdsOfRubric($rubricId);
            $response = $rubricBuilderService->getPopulatedUserRubricBuilder($rubric['scriibi_level_id'], Auth::user()->id);
            $currentAssessment = null;
            if($taskId !== 'NA'){
                $currentAssessment = writing_tasks::find($taskId)->toArray();
            }
            return view('rubric-edit', 
                [
                    'rubric' => $rubric,
                    'level' => $rubric["scriibi_level_id"], 
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

    public function generateEditRubricViewWithFlags($rubricId, $level, $taskId){
        try{
            $currentAssessment = null;
            $rubric_details = Rubrics::find($rubricId)->toArray();
            $text_types_and_assessed_labels_array = RubricBuilder::populateTraits();
            RubricBuilder::populateSkillsInTraits($level);
            foreach($this->traits_skills_array as $tsa){
                $tsa->calcFlag($level);
            }
            $selected_rubric_skills = DB::table('rubrics_skills')->select('skills_skill_Id')->where('rubrics_rubric_Id', '=', $rubricId)->get();
            $temp = [];
            foreach($selected_rubric_skills as $srs){
                array_push($temp, $srs->skills_skill_Id);
            }
            if($taskId !== 'NA'){
                $currentAssessment = writing_tasks::find($taskId)->toArray();
            }
            return view('rubric-edit', ['rubric' => $rubric_details, 'level' => $level, 'traitObjects' => $this->traits_skills_array,
            'assessedLabels' => $text_types_and_assessed_labels_array['assessed_labels'], 'selectedSkills' => $temp, 'assessmentCount' => [], 'currentAssessment' => $currentAssessment]);
        }
        catch(Exception $e){
            throw $e;
        }
    }

    // this section will be changed when the cascading criteria selection for scriibi rubric builder is implemented
    public function generateScribiiRubricBuilderView(){
        try{
            $text_types_and_assessed_labels_array = RubricBuilder::populateTraits();
            $mp = Mixpanel::getInstance("11fbca7288f25d9fb9288447fd51a424");
            $isPrivilagedUser = RubricBuilder::isprivilegedUser();
            if($isPrivilagedUser){
                $curriculum = DB::table('curriculum')->get()->toArray();
                $schoolTypes = DB::table('school_type_identifiers')->get()->toArray();
            }
            return view('rubrics', ['traitObjects' => $this->traits_skills_array, 'text_types'=> $text_types_and_assessed_labels_array['text_types'], 'assessed_labels' => $text_types_and_assessed_labels_array['assessed_labels'], 'level' => null, 'scriibi_user' => $isPrivilagedUser, 'curriculum' => $curriculum, 'schoolTypes' => $schoolTypes]);
        }catch(Exception $ex){
            //todo
        }
    }

    public function generateScribiiRubricBuilderViewWithFlags($level){
        $text_types_and_assessed_labels_array = RubricBuilder::populateTraits();
        RubricBuilder::populateSkillsInTraits($level);
        $isPrivilagedUser = RubricBuilder::isprivilegedUser();
        if($isPrivilagedUser){
            $curriculum = DB::table('curriculum')->get()->toArray();
            $schoolTypes = DB::table('school_type_identifiers')->get()->toArray();
        }
        foreach($this->traits_skills_array as $tsa){
            $tsa->calcFlag($level);
        }
        return view('rubrics', ['traitObjects' => $this->traits_skills_array, 'text_types'=> $text_types_and_assessed_labels_array['text_types'], 'assessed_labels' => $text_types_and_assessed_labels_array['assessed_labels'], 'level' => $level, 'scriibi_user' => $isPrivilagedUser, 'curriculum' => $curriculum, 'schoolTypes' => $schoolTypes]);
    }
}

