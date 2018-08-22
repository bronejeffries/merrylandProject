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
Route::get('/test', function () {
    return App\Student::find(1)->stream_class;
});
// Route::get('/', function () {
//     return view('home');
// });
Route::resource('staffs', 'StaffsController');
Route::resource('subjects','SubjectsController');
Route::resource('students.caretaker','CaretakerController');
Route::resource('classes','SclassStreamController');
Route::resource('streams','StreamController');
Route::resource('sclasses','SclassController');

Route::resource('exams','ExamsController');
Route::get('exams/subjectexams/{subject_id?}','ExamsController@showSubjectExams')->name('exams.showSubjectExams');


Route::resource('students', 'StudentsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
