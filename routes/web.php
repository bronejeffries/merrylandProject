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
    return view('dashboard.index');
});

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('teachers', 'TeachersController');
Route::resource('subjects','SubjectsController');

Route::resource('exams','ExamsController');
Route::get('exams/subjectexams/{subject_id}','ExamsController@showSubjectExams')->name('exams.showSubjectExams');


Route::resource('students', 'StudentsController');
