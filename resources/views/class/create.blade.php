@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <h4 class="card-title">Create New Class and Stream</h4>
          </div>
          <div class="col-md-6">
            <a class="text-warning pull-right" href="" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus"></i>Add Stream</a>
          </div>
        </div>
        <form class="form-sample" action="{{route('sclasses.store')}}" method="post">
          {{ csrf_field() }}
          <p class="card-description text-success">
            Class details
          </p>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Class<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Senior something" name="classname" required>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Stream<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="streamid" required>
                    @foreach($stream as $mystream)
                      <option value="{{ $mystream->id}}">{{ $mystream->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Class Number<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="number" name="classnumber" class="form-control" />
                </div>
              </div>
            </div>

            <div class="alert-warning col-md-8" role="alert">
              Note: make sure you have created a stream!!
            </div>

          </div>
        </br>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group row">
                <div class="col-sm-9">
                  <button type="submit" class="btn btn-md btn-outline-success pull-right" name=" "> CONFIRM </button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <a class="text-warning pull-right" href="{{ route('classes.index')}}"><i class="mdi mdi-plus"></i>View classes</a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Stream</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-sample" action="{{route('streams.store')}}" method="post">
          {{ csrf_field() }}
          <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Stream<span class="text-danger">* </span></label>
                  <div class="col-sm-9">
                    <input class="form-control" name="stream" required>
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
