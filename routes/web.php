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

// Route::get('/single-rubric', function(){
//    return view('single-rubric');
// });

// Route::get('/assessment-studentlist', function(){
//    return view('assessment-studentlist');
// });


//the following routes are for viewing assessment data. this functionality has not been implemented fully.

Route::get('/data-view', 'DataViewController@overview');

// Route::get('/student-data-view', 'DataViewController@studentView');

Route::get('/assessment-data-view/{assessmentId}', 'DataViewController@assessmentView');

Route::get('/home', function(){
    $stdController = new App\Http\Controllers\StudentsController();
    $students = $stdController->indexStudentsByClass();
    return view('home', ['students' => $students, 'user' => Auth::user()->name]);
})->name('home')->middleware('auth');

Route::get('/studentlist', function(){
    return view('studentlist');
});

Route::get('/assessment-setup', function(){
    return view('assessment-setup');
});

Route::get('/rubric-list', 'RubricListController@GenerateUserRubrics');

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
Route::get('/rubricsFlag/{level}', 'RubricBuilder@generateRubricsViewWithFlags');
Route::get('/rubrics', 'RubricBuilder@generateRubricsView');
Route::post('/RubricConfirm', 'RubricsController@store');
Route::post('/rubricDelete', 'RubricsController@deleteRubric');

//assessment routes
Route::get('/assessment-setup', 'AssessementSetupController@GenerateAssessmentSetup');
Route::post('/assessment-submit', 'WritingTasksController@store');
Route::get('/assessment-list', 'AssessmentListController@GenerateAssessmentList');
Route::get('/single-assessment/{assessment_id}', 'WritingTasksController@ShowWritingTask');
Route::get('/assessment-marking/{student_id}/{writing_task_id}', 'AssessmentMarkingController@GenerateStudentMarkingPage');
Route::post('/assessment-save', 'AssessmentMarkingController@saveAssessment');
Route::get('/assessment-update', 'WritingTasksController@editAssessment');
Route::get('/assessment-edit/{assessmentId}', 'AssessmentEditController@generateAssessmentEdit');

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

