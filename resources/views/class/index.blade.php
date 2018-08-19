@extends('layouts.layout')
@section('content')
<div class="row">
<div class=" col-lg-12 col-lg-offset-3 ">
    <div class="card">
      <div class="card-header">
        <a class="text-warning" href="{{ route('classes.create') }}"><i class="mdi mdi-plus"></i>Add Class</a>
      </div>
      <div class="card-body">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Class</th>
                     <th>Stream</th>
                     <th>Class Teacher</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
               @foreach($class as $index=>$myclass)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{ $myclass->sclass->name }}</td>
                    <td>{{ $myclass->stream->name }}</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                @endforeach
             </tbody>
         </table>
      </div>
    </div>
  </div>
</div>

@endSection
