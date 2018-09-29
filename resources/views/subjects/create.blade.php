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
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Subject Code</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="code" value="{{old('code')}}"/>
                    @if($errors->has('code'))
                    <span class="text-danger">
                      {{$errors->first('code')}}
                    </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" />
                    @if($errors->has('name'))
                    <span class="text-danger">
                      {{$errors->first('name')}}
                    </span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="row">

            </div> --}}

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Available For</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="available_for_stdgroup_id" value={{old('available_for_stdgroup_id')}}>
                      <option value="select_level">select level...</option>
                      <option value="1">O'Level</option>
                      <option value="2">A'level</option>
                    </select>
                    @if($errors->has('available_for_stdgroup_id'))
                    <span class="text-danger">
                      {{$errors->first('available_for_stdgroup_id')}}
                    </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label"> Specify If Core Subject</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="is_core" value={{old('is_core')}}>
                        <option value="select_level">specify category</option>
                        <option value="1">Core</option>
                        <option value="0">Not Core</option>
                      </select>
                    </div>
                    @if($errors->has('is_core'))
                    <span class="text-danger">
                      {{$errors->first('is_core')}}
                    </span>
                    @endif
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
              <button class="btn btn-sm btn-outline-success" type="button" disabled>Upload from/as Excel</button>
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
