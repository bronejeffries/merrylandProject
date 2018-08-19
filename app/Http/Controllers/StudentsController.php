<?php

namespace App\Http\Controllers;
use App\Sclass;
use App\Subject;
use App\Stream;
use App\Student;
use Session;
use App\Teacher;
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
        $teachers = Teacher::all();
        return view('students.create', compact('streams', 'classes','subjects', 'teachers'));
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
        $this->validate($request, [
                             'regiNo'=>'required',
                            'sclass_stream_id'=>'required',
                            'level'=> 'required',
                            'mentor_id'=>'required',
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
                            'fatherName'=>'nullable',
                            'fatherCellNo'=>'nullable',
                            'motherName'=>'nullable',
                            'motherCellNo'=>'nullable',
                            'localGuardian'=>'nullable',
                            'localGuardianCell'=>'nullable',
                            'village'=>'required',
                            'sub_county'=>'required',
                            'county'=>'required',
                            'country'=>'required',
                            'org_name'=>'nullable',
                            'org_contact'=>'nullable',
                            'contact_person_name'=>'nullable',
                            'contact_person_address' =>'nullable',
                            'contact_person_contact'=>'nullable',
        ]);
        $photo = $request->file('photo');
        Student::create([
            'regiNo'=>$request->regiNo,
           'sclass_stream_id'=>$request->sclass_stream_id,
           'level'=> $request->level,
           'mentor_id'=>$request->mentor_id,
           'stream' => $request->stream,
           'shift'=> $request->shift,
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
           'country'=>$request->country,
           'contact_person_name'=>$request->contact_person_name,
           'contact_person_address' =>$request->contact_person_address,
           'contact_person_contact'=>$request->contact_person_contact,
           'fatherName'=>$request->fatherName,
           'fatherCellNo'=>$request->fatherCellNo,
           'motherName'=>$request->motherName,
           'motherCellNo'=>$request->metherCellNo,
           'localGuardian'=>$request->localGuardian,
           'localGuardianCell'=>$request->localGuardianCell,
           'org_name'=>$request->org_name,
           'org_contact'=>$request->org_contact
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
                            'extraActivity'=>'nullable',
                            'fatherName'=>'nullable',
                            'fatherCellNo'=>'nullable',
                            'motherName'=>'nullable',
                            'motherCellNo'=>'nullable',
                            'localGuardian'=>'nullable',
                            'localGuardianCell'=>'nullable'
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
