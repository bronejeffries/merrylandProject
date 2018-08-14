<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use App\Subject;
use Session;
class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects= Subject::all();
        return view('teachers.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'id_no'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'religion'=>'required',
            'photo'=>'required|mimes:jpeg,bmp,png,jpg,svg',
            'others'=>'nullable',
            'village'=>'required',
            'subjects' =>'required',
            'sub_county'=>'required',
            'county'=>'required',
            'country'=>'required'
        ]);
        $photo = $request->file('photo');
       $teacher =  Teacher::create([
            'first_name'=>$request->first_name,
            'middle_name'=>$request->middle_name,
            'last_name'=>$request->last_name,
            'id_no'=>$request->id_no,
            'gender'=>$request->gender,
            'date_of_birth'=>$request->date_of_birth,
            'religion'=>$request->religion,
            'photo'=>$photo->store('public/storage'),
            'others'=>$request->others,
            'village'=>$request->village,
            'sub_county'=>$request->sub_country,
            'county'=>$request->county,
            'country'=>$request->country
        ]);
        $teacher->subjects()->attach($request->subjects);
        Session::flash('success', 'You have successfully created a teacher');
        return redirect()->route('teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->validate([

            ]));
            Session::flash('success', 'You have successfully updated a teacher');
            return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
