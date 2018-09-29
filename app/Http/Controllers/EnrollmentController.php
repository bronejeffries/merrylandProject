<?php

namespace App\Http\Controllers;

use App\Enrollment;
use App\Term;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('enrollments.index',['enrollments'=>Enrollment::all(),'terms'=>Term::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $checkenrollment = Enrollment::where('period',$request->period)
                            ->where('term_id',$request->term_id)->first();
        if ($checkenrollment) {
          return redirect()->route('enrollments.index')
             ->with('errors',['Period already enrolled']);
        }else {
          $enrollment = Enrollment::create([
                 'period'=>$request->period,
                 'term_id'=>$request->term_id,
             ]);
             return redirect()->route('enrollments.index')
                ->with('success','Period Enrolled successfully');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollment $enrollment)
    {
        //
        if ($enrollment->delete()) {

            return redirect()->route('enrollment.index')->with('success','Enrollment cleared');
        }

        return back()->withInput();
    }
}
