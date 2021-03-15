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

Route::group(['middleware' => ['auth']], function () {

    // DataView routes
    Route::get('/trait-view/{selection?}/{subselection?}', 'DataViewController@getTraitView')->middleware('dataViewAuth');
    Route::get('/growth-view/{selection?}/{subselection?}', 'DataViewController@getGrowthView')->middleware('dataViewAuth');
    Route::get('/assessment-view/{selection?}/{subselection?}/{assessment?}', 'DataViewController@getAssessmentView')->middleware('dataViewAuth');

    // Teacher Dashboard route
    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

    // Auth0 logout route
    Route::get( '/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' );

    // Rubric routes
    Route::get('/rubric-builder', 'RubricBuilder@getRubricBuilder');
    Route::get('/rubric-list', 'RubricListController@GenerateUserRubrics');
    Route::get('/rubric-details', 'RubricsController@getRubricDetails')->middleware('rubricAuth');
    Route::get('/scriibi-rubric-builder', 'RubricBuilder@getScriibiRubricBuilder');                                             // done (change the flow later so the curriculum->school->type->level cascade)
    Route::get('/rubric-edit', 'RubricBuilder@generateEditRubricView')->middleware('assessmentAuth')->middleware('rubricAuth'); // done (flag and also check the selected skills show up correct and check current selected level of rubric is correct)
    Route::post('/save-teacher-template', 'RubricsController@saveTeacherTemplate');
    Route::post('/rubric-delete', 'RubricsController@deleteRubric')->middleware('rubricAuth');
    Route::post('/rubric-edit-confirm', 'RubricsController@updateRubric')->middleware('rubricAuth');
    Route::post('/save-scriibi-template', 'RubricsController@saveScriibiRubric');
    Route::post('/assessment-rubric-edit-confirm', 'WritingTasksController@updateAssessmentSkills');

    // Assessment(Writing Task) routes
    Route::get('/assessment-update', 'WritingTasksController@editAssessment')->middleware('assessmentAuth');
    Route::get('/assessment-list', 'AssessmentListController@GenerateAssessmentList');
    Route::get('/assessment-setup', 'AssessementSetupController@GenerateAssessmentSetup');                                        // done (needs improvement for js and css on client side also try to make a service for this without using the controller)
    Route::get('/deleted-assessments', 'AssessmentListController@GenerateDeletedAssessmentList');
    Route::get('/assessment-restore', 'WritingTasksController@restoreSoftDelete');
    Route::get('/single-assessment', 'WritingTasksController@ShowWritingTask')->middleware('assessmentAuth');
    Route::get('/assessment-edit', 'AssessmentEditController@generateAssessmentEdit')->middleware('assessmentAuth');
    Route::get('/assessment-marking', 'AssessmentMarkingController@GenerateStudentMarkingPage')->middleware('assessmentAuth');    // done (needs heavy optimization for the global and local criteria selection)
    Route::post('/assessment-submit', 'WritingTasksController@store');                                                            // done (check save speed once deployed onto AWS, sanitize the data)
    Route::post('/assessment-save', 'AssessmentMarkingController@saveAssessment');
    Route::post('/asssessment-delete', 'WritingTasksController@softDeleteAssessment')->middleware('assessmentAuth');

    // Fetch routes
    Route::get('/rubric-list-mine', 'RubricListController@GenerateUserRubrics');                                // done
    Route::get('/rubric-list-shared', 'RubricListController@GenerateSharedRubrics');
    Route::get('/get-scriibi-level', 'AssessmentMarkingController@getScriibiLevel');                            // done
    Route::get('/get-team-students/{taskId}', 'StudentsController@getStudentsOfMyTeam');                        // done
    Route::get('/get-team-with-rubric-shares', 'RubricsController@getTeamRubricSharees');
    Route::get('/get-all-teaching-periods', 'AssessementSetupController@getAllTeachingPeriods');                // done
    Route::get('/get-shifted-criteria', 'AssessmentMarkingController@getMarkingCriteriaOfRange');               // done (needs refactoring and optimization for the global and local criteria selection)
    Route::get('/fetch/assessed_skills/{taskId}', 'WritingTasksController@retrieveAssessedSkills');
    Route::get('/skill-level-availability/{skillId}/{mark}', 'GoalsController@CheckSkillLevelAvailability');    // done
    Route::get('/rubric-list-scriibi/{teacherLevel}', 'RubricListController@GenerateScriibiRubricsForLevel');   // done (do data validation)
    Route::get('/get-individual-teachers-with-rubric-shares/{rubricId}', 'RubricsController@getIndividualRubricSharees');
    Route::post('/copy-rubric-confirm', 'RubricsController@copyRubric');
    Route::post('/share-rubric-confirm', 'RubricsController@shareRubric');
    Route::post('/add-students-to-task', 'WritingTasksController@addStudentsToAssessment');                     // done (sanitize data later)
    Route::delete('/delete-students-from-task', 'WritingTasksController@deleteStudentsFromAssessment');         // done (try to refactor the function in the writing task service)

    // Goal Sheet routes
    Route::view('/goal-sheet-preview','preview');
    Route::get('/goal-sheets', "GoalsController@generateGoalSheets");       // done (needs reworking - still using old code)
});

// Auth0 routes
Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );
Route::get( '/login', 'Auth\Auth0IndexController@login' )->name( 'login' );

// Landing Page route
Route::get('/', function(){
    return view('landing');
});

