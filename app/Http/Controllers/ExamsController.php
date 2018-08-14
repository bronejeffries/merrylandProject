<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Subject;
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
        $findExam = Exam::where('student_id',$request->input('student_id'))
                        ->where('sclass_id',$request->input('class_id'))
                        ->where('subject_id',$request->input('subject_id'))
                        ->where('term_id',$request->input('term_id'))
                        ->where('academic_year_id',$request->input('academic_year_id'))
                        ->first();
        if ($findExam) {

            update($request,$findExam->id);
        }

        //if the exam doesnot exist

        // dd($request->all());
         $exam = Exam::create([
                'student_id'=>$request->input('student_id'),
                'sclass_id'=>$request->input('class_id'),
                'subject_id'=>$request->input('subject_id'),
                $request->input('assesment_type')=>$request->input('marks'),
                'term_id'=>$request->input('term_id'),
                'academic_year_id'=>$request->input('academic_year_id'),
                'grade'=>'A',
            ]);


            if($exam){

                return back();
                // return redirect()->route('exams.', ['company'=> $company->id])
                // ->with('success' , 'Company created successfully');
            }

            return back()->withInput();
            // ->with('errors', 'Error creating new company');

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
