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

Route::get('/', function () {
    return view('auth/welcome');
 });

 Route::get('/demo', function () {
   return view('demo');
});

Route::get('/rubrics', function(){
   return view('rubrics');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/assessment-setup', function(){
    return view('assessment-setup');
});
//testing auth0 function
Route::get('/testauth', function () {
    return view('auth/welcome');
 });

Route::get('/traits', 'RubricBuilder@test');


 //testing auth0 function
Route::get('/posts', 'PostsController@index')
            ->name('home')
            ->middleware('auth');

//auth0 routes
Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );
Route::get( '/login', 'Auth\Auth0IndexController@login' )->name( 'login' );
Route::get( '/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' )->middleware('auth');

Route::get('/studentlist', 'StudentInputController@ReturnStudentListPage');
Route::post('/StudentPost', 'StudentsController@store');

Route::get('/studentDelete/{student_id}', 'StudentsController@deleteStudent');

Route::get('/rubric', function(){
   return view('rubric');
});

Route::get('/rubrics', function(){
   return view('rubrics');
});


// Route::get('/', function () {
//     return view('welcome');
// });
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
