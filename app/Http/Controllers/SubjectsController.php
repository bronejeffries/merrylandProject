<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */


    public function index()
    {
    
        $subjects = Subject::all();
        return view('subjects.index', compact('subjects')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     
         $subject = Subject::create(
            [
            'code'=>$request->input('code'),
            'name'=>$request->input('name'),
             'is_core'=>$request->is_core,
              'available_for_stdgroup_id'=>$request->input('available_for_stdgroup_id')
              ]);

            if($subject){
                return redirect()->route('subjects.index')
                ->with('success' , 'Subject created successfully');
            }
            return back()->withInput()
            ->with('error' , "Subject Couldn\'t be created");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
        return view('subjects.show', ['subject'=>$subject]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
        return view('subjects.edit',Compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //

         $subjectUpdate = Subject::where('id', $subject->id)
                                ->update([
                                        'code'=>$request->input('code'),
                                        'name'=>$request->input('name'),
                                        'is_core'=>$request->input('is_core'),
                                        'available_for_stdgroup_id'=>$request->input('available_for_stdgroup_id')
                                ]);

      if($subjectUpdate){
          return redirect()->route('subjects.index')
          ->with('success' , 'Subject updated successfully');
      }
      //redirect
      return back()->withInput()
      ->with('error' , 'Error updating subject');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //

        if($subject->delete()){

            //redirect
            return redirect()->route('subjects.index')
            ->with('success' , 'Subject deleted successfully');
        }

        return back()->withInput()
       ->with('error' , 'Subject could not be deleted');
    }
}
