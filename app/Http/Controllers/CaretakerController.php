<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Session;
use App\Caretaker;
class CaretakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Student $student)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Student $student)
    {
        return view('students.caretakers.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Student $student)
    {
        $photo = $request->file('photo');
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'permanent_address' => 'required',
            'photo'=>'required'
        ]);

        Caretaker::create([
            'name' => $request->name,
            'type' => $request->type,
            'email' => $request->email,
            'contact' => $request->contact,
            'permanent_address' => $request->permanent_address,
            'student_id'=>$student->id,
            'photo'=>$photo->store('public/storage')
        ]);
        Session::flash('success', 'You have successively created a caretaker');
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Caretaker $caretaker, Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Caretaker $caretaker, Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caretaker $caretaker, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caretaker $caretaker, Student $student)
    {
        //
    }
}
