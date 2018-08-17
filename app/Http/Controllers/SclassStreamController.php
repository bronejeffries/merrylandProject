<?php

namespace App\Http\Controllers;

use App\SclassStream;
use App\Stream;
use Illuminate\Http\Request;

class SclassStreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = SclassStream::all();
        return view('class.index', ['class' => $class]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stream = Stream::all();
        return view('class.create', ['stream' => $stream]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SclassStream  $sclassStream
     * @return \Illuminate\Http\Response
     */
    public function show(SclassStream $sclassStream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SclassStream  $sclassStream
     * @return \Illuminate\Http\Response
     */
    public function edit(SclassStream $sclassStream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SclassStream  $sclassStream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SclassStream $sclassStream)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SclassStream  $sclassStream
     * @return \Illuminate\Http\Response
     */
    public function destroy(SclassStream $sclassStream)
    {
        //
    }
}
