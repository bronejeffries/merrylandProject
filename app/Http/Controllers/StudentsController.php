<?php

namespace App\Http\Controllers;
use App\Sclass;
use App\Subject;
use App\Stream;
use App\Student;
use Session;
use App\SclassStream;
use App\Staff;
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
        $classes = Sclass::all();
        $streams = Stream::all();
        $subjects = Subject::all();
        return view('students.create', compact('streams', 'classes','subjects', 'Staffs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $classStream = SclassStream::where('sclass_id', $request->sclass_id && 'stream_id', $request->stream)->first();
        // dd($classStream->id);
        $this->validate($request, [
                             'regiNo'=>'required',
                            'sclass_id'=>'required',
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
                            'photo'=>'required|mimes:jpeg,bmp,png,jpg,svg',
                            'extraActivity'=>'nullable',
                            'village'=>'required',
                            'sub_county'=>'required',
                            'county'=>'required',
                            'country'=>'required'
        ]);
        $photo = $request->file('photo');
        Student::create([
            'regiNo'=>$request->regiNo,
           'level'=> $request->level,
           'shift'=> $request->shift,
           'sclass_stream_id' => $classStream->id,
           'firstName'=> $request->firstName,
           'middleName'=>$request->middleName,
           'lastName'=> $request->lastName,
           'gender'=> $request->gender,
           'religion'=> $request->religion,
           'nationality'=> $request->nationality,
           'dob'=> $request->dob,
           'photo'=> $photo->store('public/storage'),
           'extraActivity'=>$request->extraActivity,
           'village'=>$request->village,
           'sub_county'=>$request->sub_county,
           'county'=>$request->county,
           'country'=>$request->country
        ]);
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
                            'extraActivity'=>'nullable'
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
