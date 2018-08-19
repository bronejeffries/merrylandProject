<?php

namespace App\Http\Controllers;

use App\Sclass;
use App\SclassStream;
use Illuminate\Http\Request;

class SclassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $newclass = Sclass::create([
          'name'=>$request->input('classname'),
          'class_number'=>$request->input('classnumber')
        ]);

        if($newclass){
          // dd($request->all());
          $validator=0;
          $check = SclassStream::where('stream_id',$request->input('streamid'))->get();
              foreach ($check as  $class_stream) {
                if($class_stream->sclass->name == $newclass->name){
                  $validator++;
                }
              }
        
          if($validator==0){
              $assign_class_to_stream = SclassStream::create([
                'sclass_id'=>$newclass->id,
                'stream_id'=>$request->input('streamid')
              ]);

                  if($assign_class_to_stream){
                      return redirect()->route('classes.create')
                      ->with('success','class created successfully');
                    }else {
                      return back()->withErrors(['errors'=>'Error while creating class'])->withInput();
                    }

          }else {
            return back()->withErrors(['errors'=>'Class already exists'])->withInput();
          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sclass  $sclass
     * @return \Illuminate\Http\Response
     */
    public function show(Sclass $sclass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sclass  $sclass
     * @return \Illuminate\Http\Response
     */
    public function edit(Sclass $sclass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sclass  $sclass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sclass $sclass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sclass  $sclass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sclass $sclass)
    {
        //
    }
}
