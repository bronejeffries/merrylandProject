<?php

namespace App\Http\Controllers;
use App\Sclass;
use App\Subject;
Use App\StuClass;
use App\Stream;
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
        $classes = StuClass::all();
        $streams = Stream::all();
        $subjects = Subject::all();
        return view('students.create', compact('streams', 'classes','subjects'));
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
                            'class_id'=>'required',
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
                            'remarks'=>'nullable',
                            'fatherName'=>'nullable',
                            'fatherCellNo'=>'nullable',
                            'motherName'=>'nullable',
                            'motherCellNo'=>'nullable',
                            'localGuardian'=>'nullable',
                            'localGuardianCell'=>'nullable',
                            'presentAddress'=>'nullable',
                            'parmanentAddress'=>'nullable',
                            'village'=>'required',
                            'subjects' =>'required',
                            'sub_county'=>'required',
                            'county'=>'required',
                            'country'=>'required'
        ]);
        $photo = $request->file('photo');
        Student::create([
            'regiNo'=>$request->regiNo,
           'class_id'=>$request->class_id,
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
           'remarks'=>$request->remarks,
           'village'=>$request->village,
           'sub_county'=>$request->sub_country,
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
           'presentAddress'=>$request->presentAddress,
           'parmanentAddress'=>$request->permanentAddress,
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
