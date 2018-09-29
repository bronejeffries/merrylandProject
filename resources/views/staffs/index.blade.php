
@extends('layouts.layout')
@section('content')
<div class="card">
<div class="card-body">
<div class="card-title row">
    <div class="text col-md-4">
        <a href="{{ route('staffs.create') }}" class="text-primary">
        <i class="mdi mdi-plus"></i>
        Add  a Staff
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
           
           @foreach ($staffs as $staff)
           <tr>
               <td>{{ $staff->first_name}} {{  $staff->last_name }}</td>
               <td>{{ $staff->id_no }}</td>
               <td>{{ $staff->religion }}</td>
               
               <td>
                    <a class=" badge badge-pill btn btn-xs btn-outline-success" href="{{ route('staffs.edit',[$staff->id]) }}">Edit</a>
                    <a class="badge badge-pill btn btn-xs btn-outline-danger" href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this teacher?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form-{{$staff->id}}').submit();
                      }
                          ">
                      Delete</a>
                      <form id="delete-form-{{$staff->id}}" action="{{ route('staffs.destroy',[$staff->id]) }}"
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
