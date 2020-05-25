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
    try{
        $stdController = new App\Http\Controllers\StudentsController();
        $students = $stdController->indexStudentsByClass();
        $mp = Mixpanel::getInstance("11fbca7288f25d9fb9288447fd51a424");

        $mp->identify(Auth::user()->user_Id);
        $mp->track("Page Viewed", array(
                "Page Id"           => "P001",
                "Page Name"         => "Home",
                "Page URL"          => "",
                "Check Email"       => ""
            )
        );
        return view('home', ['students' => $students, 'user' => Auth::user()->name, 'userID' => Auth::user()->user_Id]);
    }catch(Exception $ex){
        //todo
    }
})->name('home')->middleware('auth');

Route::get('/studentlist', function(){
    return view('studentlist');
});

Route::get('/mixpanel-update-user-assessment-details', 'MixpanelController@UpdateMixpanelUserAssessmentDetails');
Route::get('/mixpanel-update', 'MixpanelController@UpdateMixpanelUserDetails');

Route::get('/assessment-setup', function(){
    $mp = Mixpanel::getInstance("11fbca7288f25d9fb9288447fd51a424");

    $mp->identify(Auth::user()->user_Id);
    $mp->track("Page Viewed", array(
            "Page Id"           => "P034",
            "Page Name"         => "Assessment Setup",
            "Page URL"          => "",
            "Check Email"       => ""
        )
    );
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
Route::get('/rubric-details/{rubricId}', 'RubricListController@GenerateRubricDetails');
Route::get('/rubric-edit/{rubricId}', 'RubricBuilder@generateEditRubricView');
Route::get('/rubric-edit/{rubricId}/{level}', 'RubricBuilder@generateEditRubricViewWithFlags');
Route::post('/rubric-edit-confirm', 'RubricsController@update');

//assessment routes
Route::get('/assessment-setup', 'AssessementSetupController@GenerateAssessmentSetup');
Route::post('/assessment-submit', 'WritingTasksController@store');
Route::get('/assessment-list', 'AssessmentListController@GenerateAssessmentList');
Route::get('/single-assessment/{assessment_id}', 'WritingTasksController@ShowWritingTask');
Route::get('/assessment-marking/{student_id}/{writing_task_id}', 'AssessmentMarkingController@GenerateStudentMarkingPage');
Route::post('/assessment-save', 'AssessmentMarkingController@saveAssessment');
Route::get('/assessment-update', 'WritingTasksController@editAssessment');
Route::get('/assessment-edit/{assessmentId}', 'AssessmentEditController@generateAssessmentEdit');

//goal sheets
Route::get('/goal-sheets', "GoalsController@generateGoalSheets");

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

