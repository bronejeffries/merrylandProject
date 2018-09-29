@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add {{$subject->code}}-{{$subject->name}} Marks <br>{{$enrollment->period}}-Term {{$enrollment->term->name}} </h4>

        <form class="form-sample" action="{{route('exams.store')}}" method="post">
          {{ csrf_field() }}
        <table class="table" id="example">
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>RegNo.</th>
              <th>Assessment</th>
              <th>Marks</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($subjectstudents as $index=>$student)
              <tr>
                <td>{{$index + 1}}</td>
                <td>{{$student->firstname}}</td>
                <td> <input type="text" class="form-control" name="student_id[]" value="{{$student->id}}" readonly> </td>
                <td> <input type="text" class="form-control" name="assesment_type" value="{{$assessment_type}}" readonly></td>
                <td>
                   <input type="number" class="form-control" name="marks[]" required/>
                 </td>
              </tr>
            @empty
              <div class="col-md-10 col-md-offset-5">
                    <h4 class="card-title  text-danger">Add Students first!! </h4>
              </div>

            @endforelse
          </tbody>
        </table>

        <input type="hidden" class="form-control" value="{{$enrollment->id}}" name="enrollment_id"/>
        <input type="hidden" class="form-control" value="{{$class_id}}" name="sclass_stream_id"/>
        <input type="hidden" class="form-control" value="{{$subject->id}}" name="subject_id"/>
          <div class="row">
            <div class="col-md-8">

              <br>
              if class marks ready in csv file
              <div class="form-group row">
                <div class="col-sm-4">
                  <button type="button" class="btn btn-sm btn-light pull-left" onclick="document.getElementById('upload').style.display='block'" name=" " disabled> UPLOAD CLASS MARKS AS CSV </button>
                </div>
              </div>
            </div>
            <div class="col-md-6" id="upload" style="display:none;">
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">MARKS CSV FILE</label>
                <div class="col-sm-9">
                  <input type="file" name="marks_upload" class="form-control" />
                </div>
              </div>
            </div>
            <br>
            <div class="col-md-8">
              <div class="form-group row">

                <div class="col-sm-9">
                  <button type="submit" class="btn btn-md btn-outline-success pull-right" name=" "> CONFIRM </button>
                </div>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endSection
