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
})->name('home');
Route::get('/test', function () {
    return App\Student::find(1)->sclass_stream;
});
// Route::get('/', function () {
//     return view('home');
// });
Route::resource('teachers', 'TeachersController');
Route::resource('subjects','SubjectsController');
Route::resource('classes','SclassStreamController');
Route::resource('streams','StreamController');
Route::resource('sclasses','SclassController');
Route::resource('enrollments','EnrollmentController');
Route::resource('enrollmentstudents','EnrollmentStudentController');
Route::post('enrollstudents','EnrollmentStudentController@period')->name('enrollmentstudents.period');
Route::resource('terms','TermController');
Route::resource("students.caretaker","CareTakerController");

Route::post('addmarks','ExamsController@showStudents')->name('exams.specifyStudents');
Route::resource('exams','ExamsController');
Route::get('exams/subjectexams/{subject_id?}','ExamsController@showSubjectExams')->name('exams.showSubjectExams');


Route::resource('students', 'StudentsController');
