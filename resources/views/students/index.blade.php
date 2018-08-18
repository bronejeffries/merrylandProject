@extends('layouts.layout')
@section('content')
<div class="card">
<div class="card-body">
<div class="card-title row">
    <div class="text col-md-4">
        <a href="{{ route('students.create') }}" class="text-primary">
        <i class="mdi mdi-plus"></i>
        Add  a Student
        </a>
    </div>
  
  <div class=" col-md-8">
      <select style="float:right;width:50%;" class="form-control pull-right">
          <option value="">Choose a class</option>
          <option value="">Senior One</option>
      </select>
    </div>
   </div>
   <table class="table" id="example">
       <thead>
           <tr>
               <th>Name</th>
               <th>Class</th>
               <th>RegNo</th>
               <th> Stream</th>
               <th>Group</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>

         @foreach($students as $student)
         <tr>
           <td>{{ $student->firstName }} {{ $student->lastName }} </td>
           <td>wer</td>
         </tr>

         @endforeach
       </tbody>
   </table>
</div>
</div>

@endSection