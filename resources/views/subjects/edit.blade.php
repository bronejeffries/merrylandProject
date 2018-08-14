@extends('layouts.layout')
@section('content')
<div class="row">
<div class=" col-lg-12 col-lg-offset-3 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit A Subject</h4>
        <div class="">
          <form class="" method="post" action="{{route('subjects.update',[$subject->id])}}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <p class="card-description">
              Subject information
            </p>
            <div class="row">
              <div class="col-md-9">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Subject Code</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$subject->code}}" name="code"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-9">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$subject->name}}" name="name" />
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-9">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Available For</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="available_for_stdgroup_id">
                      <option value="{{$subject->studentgroup->id}}">{{$subject->studentgroup->name}}</option>
                      <option value="1">O'Level</option>
                      <option value="2">A'level</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-9">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label"> Specify If Core Subject</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="is_core">
                      <option value="select_level">specify category</option>
                      <option value="1">Core</option>
                      <option value="0">Not Core</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-9">
              <div class="form-group">
              <input class="btn btn-sm btn-outline-success" type="submit" value="Update Subject">
            </div>
            </div>
          </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

@endSection
