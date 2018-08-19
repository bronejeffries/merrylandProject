
@extends('layouts.layout')
@section('content')
<div class="card">
<div class="card-body">
<div class="card-title row">
    <div class="text col-md-4">
        <a href="{{ route('teachers.create') }}" class="text-primary">
        <i class="mdi mdi-plus"></i>
        Add  a Teacher
        </a>
    </div>
   </div>
   <table class="table" id="example">
       <thead>
           <tr>    
            <th>Name</th>
            <th>ID No</th>
            <th> religion</th>
            <th>Action</th>
           </tr>
       </thead>
       <tbody>
           
           @foreach ($teachers as $teacher)
           <tr>
               <td>{{ $teacher->first_name}} {{  $teacher->last_name }}</td>
               <td>{{ $teacher->id_no }}</td>
               <td>{{ $teacher->religion }}</td>
               
               <td>
                    <a class=" badge badge-pill btn btn-xs btn-outline-success" href="{{ route('teachers.edit',[$teacher->id]) }}">Edit</a>
                    <a class="badge badge-pill btn btn-sm btn-outline-danger" href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this teacher?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form-{{$teacher->id}}').submit();
                      }
                          ">
                      Delete</a>
                      <form id="delete-form-{{$teacher->id}}" action="{{ route('teachers.destroy',[$teacher->id]) }}"
                        method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" class="btn btn-xs" name="_method" value="delete">
                        </form>
               </td>
           </tr>
           @endforeach
           
       </tbody>
   </table>
</div>
</div>

@endSection
