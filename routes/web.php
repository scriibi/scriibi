<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Services\UserService;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\ClassRepositoryInterface;
use App\Repositories\Interfaces\StudentRepositoryInterface;
use App\Repositories\Interfaces\GradeLabelRepositoryInterface;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface;

Route::group(['middleware' => ['auth']], function () {

    // data view routes
    Route::get('/trait-view/{selection?}/{subselection?}', 'DataViewController@getTraitView')->middleware('dataViewAuth');
    Route::get('/growth-view/{selection?}/{subselection?}', 'DataViewController@getGrowthView')->middleware('dataViewAuth');
    Route::get('/assessment-view/{selection?}/{subselection?}/{assessment?}', 'DataViewController@getAssessmentView')->middleware('dataViewAuth');

    Route::get('/home', function(UserService $userService, ClassRepositoryInterface $classRepository, StudentRepositoryInterface $studentRepository, UserRepositoryInterface $userRepository, GradeLabelRepositoryInterface $gradeLabelRepository, AssessedLabelRepositoryInterface $assessedLabelRepository){
        try{
            $stdController = new App\Http\Controllers\StudentsController();
            $dataset = $stdController->indexStudentsByClass($classRepository, $studentRepository, $userRepository, $gradeLabelRepository, $assessedLabelRepository);
            $memberships = $userService->getUserMemberships(Auth::user()->id);
            $privilagedUser = false;
             if(array_key_exists(3, $memberships[0])){
                 $privilagedUser = true;
             }
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
        }catch(Exception $ex){
            throw $ex;
        }
    })->name('home')->middleware('auth');

    Route::get('/studentlist', function(){
        return view('studentlist');
    });

    Route::get('/mixpanel-update-user-assessment-details', 'MixpanelController@UpdateMixpanelUserAssessmentDetails');
    Route::get('/mixpanel-update', 'MixpanelController@UpdateMixpanelUserDetails');

    Route::get('/assessment-setup', function(){
        return view('assessment-setup');
    });

    Route::get('/traits', 'RubricBuilder@test');

    //auth0 routes
    Route::get( '/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' );

    //student list routes
    Route::get('/AJAX/listCall', 'listCallController@generateList');
    Route::get('/studentlist', 'StudentInputController@ReturnStudentListPage');
    Route::post('/StudentPost', 'StudentsController@store');
    Route::get('/studentDelete/{student_id}', 'StudentsController@deleteStudent');
    Route::put('/studentlist', 'StudentsController@update');

    //rubric routes
    Route::get('/rubric-list', 'RubricListController@GenerateUserRubrics');                                                     // done
    Route::get('/rubricsFlag/{level}', 'RubricBuilder@generateRubricsViewWithFlags');                                           // done (have to add the flags)
    Route::get('/rubrics', 'RubricBuilder@generateRubricsView');                                                                // done
    Route::post('/RubricConfirm', 'RubricsController@store');                                                                   // done (do data validation and exception handling in the controller class)
    Route::post('/rubricDelete', 'RubricsController@deleteRubric');                                                             // done
    Route::get('/rubric-details/{rubricId}', 'RubricListController@GenerateRubricDetails')->middleware('rubricAuth');           // done  (remove the assessments attached check and let all rubrics to be editted)
    Route::get('/rubric-edit/{rubricId}/{level}/{taskId}', 'RubricBuilder@generateEditRubricView')->middleware('rubricAuth');   // done (flag and also check the selected skills show up correct and check current selected level of rubric is correct)
    Route::post('/rubric-edit-confirm', 'RubricsController@update');                                                            // done (clean request data)
    Route::post('/assessment-rubric-edit-confirm', 'WritingTasksController@updateAssessmentSkills');
    Route::get('/scriibi-rubric-builder', 'RubricBuilder@generateScribiiRubricBuilderView');                                    // done (change the flow later so the curriculum->school->type->level cascade)
    Route::get('/scriibi-rubric-builder/{level}', 'RubricBuilder@generateScribiiRubricBuilderViewWithFlags');                   // done (add flags and change the flow later as above)
    Route::post('/scriibi-rubric-confirm', 'RubricsController@saveScriibiRubric');                                              // done (clean request data and make sure all fields are !null)

    //assessment routes
    Route::get('/assessment-setup', 'AssessementSetupController@GenerateAssessmentSetup');                                                                      // done (needs improvement for js and css on client side also try to make a service for this without using the controller)
    Route::post('/assessment-submit', 'WritingTasksController@store');                                                                                          // done (check save speed once deployed onto AWS, sanitize the data)
    Route::get('/assessment-list', 'AssessmentListController@GenerateAssessmentList');                                                                          // done
    Route::get('/single-assessment/{assessment_id}', 'WritingTasksController@ShowWritingTask')->middleware('assessmentAuth');                                   // done
    Route::get('/assessment-marking/{student_id}/{assessment_id}', 'AssessmentMarkingController@GenerateStudentMarkingPage')->middleware('assessmentAuth');     // done (needs heavy optimization for the global and local criteria selection)
    Route::post('/assessment-save', 'AssessmentMarkingController@saveAssessment');                                                                              // done
    Route::get('/assessment-update', 'WritingTasksController@editAssessment');                                                                                  // done
    Route::get('/assessment-edit/{assessment_id}', 'AssessmentEditController@generateAssessmentEdit')->middleware('assessmentAuth');                            // done
    Route::post('/asssessment-delete', 'WritingTasksController@softDeleteAssessment');                                                                          // done
    Route::get('/deleted-assessments', 'AssessmentListController@GenerateDeletedAssessmentList');                                                               // done
    Route::get('/assessment-restore/{assessmentId}', 'WritingTasksController@restoreSoftDelete');                                                               // done

    // fetch
    Route::get('/fetch/assessed_skills/{taskId}', 'WritingTasksController@retrieveAssessedSkills');
    Route::get('/rubric-list-mine', 'RubricListController@GenerateUserRubrics');                                // done
    Route::get('/rubric-list-scriibi/{teacherLevel}', 'RubricListController@GenerateScriibiRubricsForLevel');   // done (do data validation)
    Route::post('/add-students-to-task', 'WritingTasksController@addStudentsToAssessment');                     // done (sanitize data later)
    Route::delete('/delete-students-from-task', 'WritingTasksController@deleteStudentsFromAssessment');         // done (try to refactor the function in the writing task service)
    Route::get('/get-team-students/{taskId}', 'StudentsController@getStudentsOfMyTeam');                        // done
    Route::get('/skill-level-availability/{skillId}/{mark}', 'GoalsController@CheckSkillLevelAvailability');    // done
    Route::get('/get-shifted-criteria', 'AssessmentMarkingController@getMarkingCriteriaOfRange');               // done (needs refactoring and optimization for the global and local criteria selection)
    Route::get('/get-scriibi-level', 'AssessmentMarkingController@getScriibiLevel');                            // done
    Route::get('/get-all-teaching-periods', 'AssessementSetupController@getAllTeachingPeriods');                // done

    //goal sheets
    Route::get('/goal-sheets', "GoalsController@generateGoalSheets");       // done (needs reworking - still using old code)
    Route::view('/goal-sheet-preview','preview');

    Route::get('/rubric', function(){
    return view('rubric');

    });

    Route::get('/assessed_level');

});

Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );
Route::get( '/login', 'Auth\Auth0IndexController@login' )->name( 'login' );

Route::get('/', function(){
    return view('landing');
});

