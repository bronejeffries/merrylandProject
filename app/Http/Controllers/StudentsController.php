<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));

        
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
        Student::create($request->validate([
            'regiNo',
                            'stdNo'=> 'required',
                            'class_id',
                            'level'=> 'required',
                            'mentor_id',
                            'stream' => 'required',
                            'shift'=> 'required',
                            'firstName'=> 'required',
                            'middleName'=>'nullable',
                            'lastName'=> 'required',
                            'gender'=> 'required',
                            'religion'=> 'required',
                            'nationality'=> 'required',
                            'dob'=> 'required',
                            'photo'=> 'required',
                            'extraActivity'=>'nullable',
                            'remarks'=>'nullable',
                            'fatherName'=>'nullable',
                            'fatherCellNo'=>'nullable',
                            'motherName'=>'nullable',
                            'motherCellNo'=>'nullable',
                            'localGuardian'=>'nullable',
                            'localGuardianCell'=>'nullable',
                            'presentAddress'=>'nullable',
                            'parmanentAddress'=>'nullable'
        ]));
        Session::flash('success', 'You have succsssfully created a  student');
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        
        $student->update($request->validate([
                            'regiNo'=>'required',
                            'stdNo'=> 'required',
                            'level'=> 'required',
                            'stream' => 'required',
                            'shift'=> 'required',
                            'firstName'=> 'required',
                            'middleName'=>'nullable',
                            'lastName'=> 'required',
                            'gender'=> 'required',
                            'religion'=> 'required',
                            'nationality'=> 'required',
                            'dob'=> 'required',
                            'photo'=> 'required',
                            'extraActivity'=>'nullable',
                            'remarks'=>'nullable',
                            'fatherName'=>'nullable',
                            'fatherCellNo'=>'nullable',
                            'motherName'=>'nullable',
                            'motherCellNo'=>'nullable',
                            'localGuardian'=>'nullable',
                            'localGuardianCell'=>'nullable',
                            'presentAddress'=>'nullable',
                            'parmanentAddress'=>'nullable'
        ]));
        Session::flash('success', 'You have succsssfully updated a  student');
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
