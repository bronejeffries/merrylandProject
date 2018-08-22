<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Session;
class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $data= $this->validate($request, [
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'id_no'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'religion'=>'required',
            'photo'=>'required|mimes:jpeg,bmp,png,jpg,svg',
            'village'=>'required',
            'sub_county'=>'required',
            'county'=>'required',
            'country'=>'required'
        ]);
        $photo = $request->file('photo');
       
       $teacher =  Staff::create([
           
            'first_name'=>$request->first_name,
            'middle_name'=>$request->middle_name,
            'last_name'=>$request->last_name,
            'id_no'=>$request->id_no,
            'gender'=>$request->gender,
            'date_of_birth'=>$request->date_of_birth,
            'religion'=>$request->religion,
            'photo'=>$photo->store('public/storage'),
            'village'=>$request->village,
            'sub_county'=>$request->sub_county,
            'county'=>$request->county,
            'country'=>$request->country
        ]);
        Session::flash('success', 'You have successfully created a teacher');
        return redirect()->route('staffs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('staffs.show',compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staffs.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $staff->update($request->validate([

            ]));
            Session::flash('success', 'You have successfully updated a teacher');
            return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staffs.index');
    }
}
