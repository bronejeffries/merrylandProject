@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Subject Marks</h4>
        <form class="form-sample" action="{{route('exams.update',[$exam->id])}}" method="post">
          {{ csrf_field() }}
          @method('PUT')
          <p class="card-description text-success">
            Academic year informaton
          </p>
          <br>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Enrollment <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" value="{{$exam->enrollment->period}}-{{$exam->enrollment->term->name}}" required/>
                </div>
              </div>
            </div>

          </div>
          <br>
          <p class="card-description text-success">
            Subject Details
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Code<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                      <input type="text" name="subject_code" value="{{$exam->subject->code}}" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <br>
          <p class="card-description text-success">
            Class Details
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Senior<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" name="class_id" value="{{$exam->sclassstream->sclass->name}}" class="form-control" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Stream<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                      <input type="text" name="stream" value="{{$exam->sclassstream->stream->name}}" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          <br>
          <p class="card-description text-success">
            Student Details
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Student Id.</label>
                <div class="col-sm-9">
                  <input type="text" name="student_id[]" value="{{$exam->student_id}}" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          <br>
          <p class="card-description text-success">
            Marks Details
          </p>
          <div class="row">
            <div class="col-md-7">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Assesment Type<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="assesment_type" required>
                    <option value="">Select Type...</option>
                    <option value="test">Test</option>
                    <option value="mid">Mid Term</option>
                    <option value="final">Final Exam</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Marks</label>
                <div class="col-sm-9">
                  <input type="number" name="marks[]" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-8">
              <div class="form-group row">

                <div class="col-sm-9">
                  <button type="submit" class="btn btn-md btn-outline-success pull-right" name=" "> UPDATE </button>
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
