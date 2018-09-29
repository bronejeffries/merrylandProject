@extends('layouts.layout')
@section('content')
<div class="card">
<div class="card-body">
<div class="card-title row">
    <div class="text col-md-4">
<a class="text-warning pull-left" href="" data-toggle="modal" data-target="#exampleModal">
  <i class="mdi mdi-plus"></i>
  Enroll Students For Academic Period
</a>

    </div>

  <div class=" col-md-8">
      <select style="float:right;width:50%;" class="form-control pull-right">
          <option value="">Choose a class</option>
          @foreach ($classes as $class)
              <option value="{{$class->id}}">{{$class->sclass->name}} {{$class->stream->name}}</option>
          @endforeach
      </select>
      <select style="float:right;width:50%;" class="form-control pull-right">
          <option value="">Choose a year</option>
          @foreach ($enrollments as $enrollment)
              <option value="{{$enrollment->id}}">{{$enrollment->period}} Term {{$enrollment->term->name}}</option>
          @endforeach
      </select>
    </div>
   </div>
   <table class="table" id="example">
       <thead>
           <tr>
               <th>Name</th>
               <th>RegNo</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>

         @foreach($enrolledstudents as $student)
         <tr>
           <td>{{ $student->student->firstName }} {{ $student->student->lastName }} </td>
           <td>{{ $student->student_id }}</td>
           <td>
             Unenroll student button
           </td>
         </tr>

         @endforeach
       </tbody>
   </table>
</div>
</div>

{{-- modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Academic Period</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-sample" action="{{route('enrollmentstudents.period')}}" method="post">
          {{ csrf_field() }}
          <div class="row">
              <div class="col-md-10">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Period<span class="text-danger">*</span></label>
                  <div class="col-sm-7">
                    <select name="enrollment_period"  class="form-control">
                        <option value="">Choose a period</option>
                        @foreach ($enrollments as $enrollment)
                            <option value="{{$enrollment->id}}">{{$enrollment->period}} Term {{$enrollment->term->name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
              </div>
          </div>
            <div class="row">
            <div class="col-md-8">
              <div class="form-group row">
                <div class="col-sm-9 offset-3">
                  <input type="submit" class="btn btn-primary pull-right" value="Submit">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

@endSection
