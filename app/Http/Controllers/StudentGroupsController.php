<?php

namespace App\Http\Controllers;

use App\StudentGroup;
use App\Student;
use Illuminate\Http\Request;

class StudentGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
     * @param  \App\StudentGroup  $studentGroup
     * @return \Illuminate\Http\Response
     */
    public function show(StudentGroup $studentGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentGroup  $studentGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentGroup $studentGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentGroup  $studentGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentGroup $studentGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentGroup  $studentGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentGroup $studentGroup)
    {
        //
    }
}
