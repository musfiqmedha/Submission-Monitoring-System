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
    return view('welcome');
});

Auth::routes();


Route::get('teamslist/{course_name}', [
    "uses" => 'TeamController@teamslist',
    "as" => 'teamslist'
]);


Route::get('userteamslist/{course_name}', [
    "uses" => 'TeamController@userteamslist',
    "as" => 'userteamslist'
]);



// Route::post('start/{teams_id}', [
//     "uses" => 'TeamController@start',
//     "as" => 'start'
// ]);


 // Route::post('start/{teams_id}', 'TeamController@start');
Route::get('/course_reg', 'CourseController@index');
Route::get('/showcourse', 'CourseController@showCourse');
Route::get('/mycourse', 'CourseController@showAdminCourse');
// Route::get('/teamlist', 'TeamController@index');
// Route::get('/teamlist/{course_id?}', 'TeamController@index');
Route::get('/addteam', 'TeamController@create');

Route::post('/teamreg', 'TeamController@store');
Route::post('create', 'CourseController@store');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/team/activate/{course}/{id}','TeamController@activate')->name('team.activate');
Route::get('/team/deactivate/{course}/{id}','TeamController@deactivate')->name('team.deactivate');
