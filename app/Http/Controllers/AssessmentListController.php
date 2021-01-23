<?php

namespace App\Http\Controllers;

use Auth;
use Mixpanel;
use Exception;
use App\WritingTask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\WritingTaskListingService;
use App\Repositories\Interfaces\UserRepositoryInterface;

class AssessmentListController extends Controller
{
    public function GenerateAssessmentList(WritingTaskListingService $writingTaskListingService, UserRepositoryInterface $userRepoInt){
        try
        {
            $school = $userRepoInt->getTeacherSchool(Auth::user()->id)->toArray();
            $tasks = $writingTaskListingService->getTeacherWritingTasks(Auth::user()->id, $school[0]['id']);
            return view('assessment-list',
                [
                    'assessmentList' => $tasks
                ]
            );
        }catch(Exception $ex){
            // todo
        }
    }

    public function GenerateDeletedAssessmentList(WritingTaskListingService $writingTaskListingService, UserRepositoryInterface $userRepoInt){
        try{
            $school = $userRepoInt->getTeacherSchool(Auth::user()->id)->toArray();
            $writingTasks = $writingTaskListingService->getTeacherSoftDeletedTasks(Auth::user()->id, $school[0]['id']);
            return view('assessment-trashcan',
                [
                    'assessmentList' => $writingTasks
                ]
            );
        }catch(Exception $e)
        {
            // todo
        }
    }
}
