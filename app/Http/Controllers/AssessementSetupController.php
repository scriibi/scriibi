<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Services\RubricListingService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use App\Repositories\Interfaces\ClassRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\ScriibiLevelRepositoryInterface;
use App\Repositories\Interfaces\TeachingPeriodRepositoryInterface;

class AssessementSetupController extends Controller
{
    /**
     * Creates a new RubricList instance, populates it with the rubrics associated
     * with the currently logged in user and returns back an assessment-setup page
     * @param RubricListingService $rubricListingService
     * @param ClassRepositoryInterface $classRepository
     * @param UserRepositoryInterface $userRepository
     * @param ScriibiLevelRepositoryInterface $scriibiLevelRepository
     * @return Application|Factory|View|RedirectResponse
     */
    public function GenerateAssessmentSetup(RubricListingService $rubricListingService, ClassRepositoryInterface $classRepository, UserRepositoryInterface $userRepository, ScriibiLevelRepositoryInterface $scriibiLevelRepository){
        try
        {
            $rubrics = $rubricListingService->getTeacherTemplates(Auth::user()->id);
            $scriibiLevels = $scriibiLevelRepository->getScriibiLevelsOfTeacher(Auth::user()->id);
            $schoolId = $userRepository->getTeacherSchool(Auth::user()->id)->toArray()[0]['id'];
            $userClasses = $classRepository->getClassesOfTeacher(Auth::user()->id, $schoolId);
            $otherClasses = $classRepository->getClassesOfScriibiLevels($scriibiLevels, $schoolId);
            $userClassHashMap = [];
            $userClassCount = count($userClasses);

            for ($i = 0; $i < $userClassCount; $i++)
            {
                $userClassHashMap[$userClasses[$i]['id']] = true;
            }

            $otherClassCount = count($otherClasses);
            for ($j = 0; $j < $otherClassCount; $j++)
            {
                if(array_key_exists($otherClasses[$j]['id'], $userClassHashMap))
                {
                    unset($otherClasses[$j]);
                }
            }
            return view('assessment-setup', [
                    'rubrics' => $rubrics,
                    'userClasses' => $userClasses,
                    'otherClasses' => $otherClasses
                ]);
        }
        catch (Exception $e)
        {
            return redirect()
                ->back()
                ->withErrors('Oops! Something went wrong');
        }
    }

    public function getAllTeachingPeriods( UserRepositoryInterface $userRepository,TeachingPeriodRepositoryInterface $teachingPeriodRepository)
    {
        try
        {
            $curriculumSchoolTypeId = $userRepository->getTeacherSchool(Auth::user()->id)[0]['curriculum_school_type_id'];
            return json_encode($teachingPeriodRepository->getAllPeriodsForCurriculumSchoolType($curriculumSchoolTypeId));
        }
        catch (Exception $e)
        {
            return json_encode([]);
        }
    }
}
