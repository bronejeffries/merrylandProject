<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Subject;
use App\Enrollment;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function _construct(){
    //
    //     $this->middleware('auth');
    // }


    public function index()
    {
        //
        // $exams = Exam::all();
        //
        // return view('exams.index',compact('exams'));

        return view('exams.index',['subjects'=>Subject::all()]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('exams.create',['subjects'=>Subject::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //check if subject exam column has not yet been created already

      $exams=[];

      foreach($request->student_id as $index => $student) {
        $findExam = Exam::where('student_id',$student)
                        ->where('sclassstream_id',$request->sclass_stream_id)
                        ->where('subject_id',$request->subject_id)
                        ->where('enrollment_id',$request->enrollment_id)
                        ->first();
        if ($findExam) {
                  $this->update($request,$findExam);
                  continue;
          }
          else {
            $exams[] = Exam::create([
                   'student_id'=>$student,
                   'sclassstream_id'=>$request->sclass_stream_id,
                   'subject_id'=>$request->subject_id,
                   $request->assesment_type=>$request->marks[$index],
                   'enrollment_id'=>$request->enrollment_id,
                   'grade'=>'A',
               ]);


          }
        }



        if (count($exams)>0) {
           return redirect()->route('exams.index')
            ->with('success' ,count($exams). 'exams(s) created successfully');
        }else {
          return redirect()->route('exams.index')
          ->with('errors', ['0 exams  created']);
        }

              // ;
              // return redirect()->route('exams.', ['company'=> $company->id])
              // ;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //

        return view('exams.show',compact('exam'));
    }

    /**
     * Display the exams of specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function showSubjectExams($subjectid = null)
    {
      //
if ($subjectid) {
            $subject = Subject::find($subjectid);
      $subject_exams = $subject->exams;
      return view('exams.show_subjectExams',compact('subject_exams'));

        }

    }
    /**
     * Display the students of specified resource.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function showStudents(Request $request)
    {
      //
      $subject = Subject::find($request->subject_id);
      $enrollment = Enrollment::find($request->enrollment_id);
      $classenrollments =  $enrollment->enrolled_students
                            ->where('sclassstream_id',$request->sclassstream_id)
                            ->pluck('student_id');

        $subjectstudents = $subject->students->wherein('id',$classenrollments);


        return view('exams.addmarks',['subjectstudents'=>$subjectstudents,
                                      'subject'=>$subject,
                                      'enrollment'=>$enrollment,
                                      'assessment_type'=>$request->assessment_type,
                                      'class_id'=>$request->sclassstream_id]);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        return view('exams.edit',Compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        //
        // dd($request->all());
        // $subject = Subject::where('code',$request->subject_code)->first();
        // dd($request->all(),$exam);
        $index = array_search($exam->student_id,$request->student_id);
        dump($index,$request->marks[$index]);
        $examUpdate = Exam::where('id', $exam->id)
                               ->update([
                                 $request->assesment_type=>$request->marks[$index],
                               ]);

      if($examUpdate){

         return redirect()->route('exams.index')
         ->with('success' , 'Exam updated successfully');

     }
     //redirect
     return back()->withInput()
     ->with('error' , 'Error updating subject');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
        if ($exam->delete()) {

            return redirect()->route('exams.index')->with('success','Exam deleted');
        }

        return back()->withInput();
    }
}
