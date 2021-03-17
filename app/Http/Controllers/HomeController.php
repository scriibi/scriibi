<?php

namespace App\Http\Controllers;

use Auth;
use App\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Controllers\StudentsController;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\ClassRepositoryInterface;
use App\Repositories\Interfaces\StudentRepositoryInterface;
use App\Repositories\Interfaces\GradeLabelRepositoryInterface;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param UserService $userService
     * @param ClassRepositoryInterface $classRepository
     * @param StudentRepositoryInterface $studentRepository
     * @param UserRepositoryInterface $userRepository
     * @param GradeLabelRepositoryInterface $gradeLabelRepository
     * @param AssessedLabelRepositoryInterface $assessedLabelRepository
     * @return Renderable
     */
    public function index(UserService $userService, ClassRepositoryInterface $classRepository, StudentRepositoryInterface $studentRepository, UserRepositoryInterface $userRepository, GradeLabelRepositoryInterface $gradeLabelRepository, AssessedLabelRepositoryInterface $assessedLabelRepository)
    {
        try
        {
            $stdController = new StudentsController();
            $dataset = $stdController->indexStudentsByClass($classRepository, $studentRepository, $userRepository, $gradeLabelRepository, $assessedLabelRepository);
            $memberships = $userService->getUserMemberships(Auth::user()->id);
            $privilagedUser = false;

            if(array_key_exists(3, $memberships[0])){
                $privilagedUser = true;
            }

            usort($dataset['students'], function ($a, $b){
                return strcmp($a['first_name'], $b['first_name']);
            });

            return view('home',
                [
                    'students' => $dataset['students'],
                    'gradeLabels' => $dataset['gradeLabels'],
                    'assessedLabels' => $dataset['assessedLabels'],
                    'user' => Auth::user()->name,
                    'userID' => Auth::user()->id,
                    'privilagedUser' => $privilagedUser
                ]
            );
        }
        catch(Exception $ex)
        {
            throw $ex;
        }
    }
}
