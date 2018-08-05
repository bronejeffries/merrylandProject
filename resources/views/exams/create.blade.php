@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Subject Marks</h4>
        <form class="form-sample" action="{{route('exams.store')}}" method="post">
          {{ csrf_field() }}
          <p class="card-description text-success">
            Academic year informaton
          </p>
          <br>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Year <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" name="year" autofocus required/>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Term <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="term" required>
                    <option value="Male">select term...</option>
                    <option value="term_id_1">1</option>
                    <option value="term_id_2">2</option>
                    <option value="term_id_3">3</option>
                  </select>
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
                  <select class="form-control" name="subject_code" required>
                    <option value="subject_code_1">Physics code</option>
                    <option value="subject_code_2">Chemistry code</option>
                  </select>
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
                  <select class="form-control" name="class_id" required>
                    <option value="">Select class...</option>
                    <option value="class_id_1">One</option>
                    <option value="class_id_2">Two</option>
                    <option value="class_id_2">Three</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Stream<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="stream_id" required>
                    <option value="">Select Stream...</option>
                    <option value="stream_id_1">A</option>
                    <option value="stream_id_2">B</option>
                    <option value="stream_id_3">C</option>
                  </select>
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
                <label class="col-sm-3 col-form-label">Registration No.</label>
                <div class="col-sm-9">
                  <input type="text" name="regNo" class="form-control" />
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
                    <option value="stream_id_1">Test</option>
                    <option value="stream_id_2">Mid Term</option>
                    <option value="stream_id_3">Final Exam</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Marks</label>
                <div class="col-sm-9">
                  <input type="number" name="marks" class="form-control"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">

              <br>
              if class marks ready in csv file
              <div class="form-group row">
                <div class="col-sm-4">
                  <button type="button" class="btn btn-sm btn-light pull-left" onclick="document.getElementById('upload').style.display='block'" name=" "> UPLOAD CLASS MARKS AS CSV </button>
                </div>
              </div>
            </div>
            <div class="col-md-6" id="upload" style="display:none;">
              <div class="form-group row">
                <label class="col-sm-5 col-form-label">MARKS CSV FILE</label>
                <div class="col-sm-9">
                  <input type="file" name="marks" class="form-control" />
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
