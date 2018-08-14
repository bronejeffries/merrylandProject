
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
   <table class="table">
       <thead>
           <tr>    
            <th>Name</th>
            <th>contact</th>
            <th>IDNo</th>
            <th> Status</th>
            <th>Email</th>
            <th>Action</th>
           </tr>
       </thead>
   </table>
</div>
</div>

@endSection
