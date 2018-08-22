@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Enroll Students For <br>{{$enrollment_period->period}}-Term {{$enrollment_period->term->name}} </h4>

        <form class="form-sample" action="{{route('exams.store')}}" method="post">
          {{ csrf_field() }}
        <table class="table" id="example">
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>RegNo.</th>
              <th>Enroll</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($students as $index=>$student)
              <tr>
                <td>{{$index + 1}}</td>
                <td>{{$student->firstName}}</td>
                <td>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="student_id[]" value="{{$student->id}}" readonly></td>
                </div>
                <td>
                  <div class="form-check col-sm-9">
                     <input type="checkbox" class=" col-md-3" name="enrollstatus[]" required/>
                  </div>

                 </td>
              </tr>
            @empty
              <div class="col-md-10 col-md-offset-5">
                    <h4 class="card-title  text-warning">Add Students first </h4>
              </div>

            @endforelse
          </tbody>
        </table>

        <input type="hidden" class="form-control" value="{{$enrollment_period->id}}" name="enrollment_id"/>
          <div class="row">
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
