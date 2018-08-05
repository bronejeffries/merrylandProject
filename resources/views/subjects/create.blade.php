@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create A Subject</h4>
        <form class="form-sample" method="post" action="{{route('subjects.create')}}">
          {{ csrf_field() }}
          <p class="card-description">
            Subject info
          </p>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Subject Code</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="code"/>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="name" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Available For</label>
                <div class="col-sm-9">
                  <select class="form-control" name="available_for_stdgroup_id">
                    <option value="Olevel">O'Level</option>
                    <option value="Alevel">A'level</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Specify If Core Subject</label>
                <div class="col-sm-4">
                  <div class="form-radio">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="is_core" checked>
                    </label>
                  </div>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-3">
                  <input class="btn btn-sm btn-success" type="submit" value="Add Subject">
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