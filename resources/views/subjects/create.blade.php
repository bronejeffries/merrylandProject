@extends('layouts.layout')
@section('content')
<div class="row">
<div class=" col-lg-12 col-lg-offset-3 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create A Subject</h4>
        <div class="">
          <form class="" method="post" action="{{route('subjects.store')}}">
            {{ csrf_field() }}
            <p class="card-description">
              Subject information
            </p>
            <div class="row">
              <div class="col-md-9">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Subject Code</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="code"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-9">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" />
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
                      <option value="select_level">select level...</option>
                      <option value="Olevel">O'Level</option>
                      <option value="Alevel">A'level</option>
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
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="is_core">
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-9">
              <div class="form-group">
              <input class="btn btn-sm btn-outline-success" type="submit" value="Add Subject">
            </div>
            </div>
            <div class="col-sm-3 pull-right">
              <div class="form-group">
              <button class="btn btn-sm btn-outline-success" type="submit">Import from/as Excel</button>
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
