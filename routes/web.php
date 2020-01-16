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

Route::get('/studentlist', function () {
    return view('studentlist');
 });

Route::get('/rubrics', function(){
   return view('rubrics');
});

//testing auth0 function
Route::get('/testauth', function () {
    return view('auth/welcome');
 });

 //testing auth0 function
Route::get('/posts', 'PostsController@index')
            ->name('home')
            ->middleware('auth');

//auth0 routes
Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );
Route::get( '/login', 'Auth\Auth0IndexController@login' )->name( 'login' );
Route::get( '/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' )->middleware('auth');

// Route::get('/www', 'GradeLabelController@index');      route set up for testing the student add grade and assed level name selection

// Route::get('/www', 'StudentInputController@ReturnStudentListPage');
// Route::post('/www', StudentsController@store);

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
