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
Route::get('/main', 'MainController@login')->name('main'); 
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 

Route::get('/student/create', 'studentController@index')->name('create');
Route::post('student', 'studentController@store');

//Route::get('/course/create', 'courseController@index')->name('create_course');
//Route::post('course', 'courseController@store');
//Route::get('/course/create', 'courseController@show')->name('create_course');
//Route::delete('/course/delete','courseController@delete');
//Route::get('/chart','ChartController@getMember');

Route::resource('allcourse','AllcourseController');
Route::resource('allstudent','AllstudentController');
Route::post('allstudent/fetch', 'AllstudentController@fetch')->name('allstudent.fetch');






