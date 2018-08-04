<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function _construct(){

        $this->middleware('auth');
    }


    public function index()
    {
        //
        $exams = Exam::all();

        return view('pages.Exams.index',compact('exams'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('pages.exams.create');
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
                        ->where('class_id',$request->input('class_id'))
                        ->where('subject_id',$request->input('subject_id'))
                        ->where('term_id',$request->input('term_id'))
                        ->where('academic_year_id',$request->input('academic_year_id'))
                        ->first();
        if ($findExam) {
            
            update($request,$findExam->id);
        }

        //if the exam doesnot exist


         $exam = Exam::create([
                'student_id'=>$request->input('student_id'),
                'class_id'=>$request->input('class_id'),
                'subject_id'=>$request->input('subject_id'),
                $request->input('exam_type')=>$request->input('marks'),
                'term_id'=>$request->input('term_id'),
                'academic_year_id'=>$request->input('academic_year_id')
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

        return view('pages.exams.show',compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //

        return view('pages.exams.edit',compact('exam'));
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
            
            return view('pages.exams.index')->with('success','Exam deleted');
        }

        return back()->withInput();
    }
}
