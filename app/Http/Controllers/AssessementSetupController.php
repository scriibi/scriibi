<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\RubricListingService;
use App\Repositories\Interfaces\ClassRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\ScriibiLevelRepositoryInterface;

class AssessementSetupController extends Controller
{
    /**
     * creates a new RubricList instance,
     * populates it with the rubrics associated with the currently logged in user
     * and returns back an assessment-setup page
     *
     */
    public function GenerateAssessmentSetup(RubricListingService $rubricListingService, ClassRepositoryInterface $classRepository, UserRepositoryInterface $userRepository, ScriibiLevelRepositoryInterface $scriibiLevelRepository){
        try
        {
            $rubrics = $rubricListingService->getTeacherTemplates(Auth::user()->id);
            $scriibiLevels = $scriibiLevelRepository->getScriibiLevelsOfTeacher(Auth::user()->id);
            $schoolId = $userRepository->getTeacherSchool(Auth::user()->id)->toArray()[0]['id'];
            $userClasses = $classRepository->getClassesOfTeacher(Auth::user()->id, $schoolId);
            $otherClasses = $classRepository->getClassesOfScriibiLevels($scriibiLevels, $schoolId);
            return view('assessment-setup',
                [
                    'rubrics' => $rubrics,
                    'userClasses' => $userClasses,
                    'otherClasses' => $otherClasses
                ]);
        }
        catch (Exception $e)
        {
            // todo
        }
    }
}
