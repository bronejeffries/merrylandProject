<?php

namespace App\Http\Controllers;

use App\EnrollmentStudent;
use App\SclassStream;
use App\Enrollment;
use App\Student;
use Illuminate\Http\Request;

class EnrollmentStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('enrollmentstudents.index',['enrolledstudents'=>EnrollmentStudent::all(),
                                                'classes'=>SclassStream::all(),
                                                'enrollments'=>Enrollment::all()]);
    }



    public function period(Request $request){

        return view('enrollmentstudents.enroll',['enrollment_period'=>Enrollment::find($request->enrollment_period),
                                                'students'=>Student::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EnrollmentStudent  $enrollmentStudent
     * @return \Illuminate\Http\Response
     */
    public function show(EnrollmentStudent $enrollmentStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EnrollmentStudent  $enrollmentStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(EnrollmentStudent $enrollmentStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EnrollmentStudent  $enrollmentStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EnrollmentStudent $enrollmentStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EnrollmentStudent  $enrollmentStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnrollmentStudent $enrollmentStudent)
    {
        //
    }
}
