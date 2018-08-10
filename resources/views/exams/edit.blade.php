@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Subject Marks</h4>
        <form class="form-sample" action="{{route('exams.update',1)}}" method="post">
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
                      <input type="text" name="Term" class="form-control" />
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
                      <input type="text" name="code" class="form-control" />
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
                    <input type="text" name="class_name" class="form-control" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Stream<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                      <input type="text" name="stream" class="form-control" />
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
                    <input type="text" name="Assesment" class="form-control" />
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
