@extends('layouts.layout')
@section('content')
<div class="row">
<div class=" col-lg-12 col-lg-offset-3 ">
    <div class="card">
      <div class="card-header">
        <a class="text-warning" href="{{ route('classes.create') }}"><i class="mdi mdi-plus"></i>Add Class</a>
      </div>
      <div class="card-body">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Class</th>
                     <th>Stream</th>
                     <th>Class Teacher</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
               @foreach($class as $index=>$myclass)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{ $myclass->sclass->name }}</td>
                    <td>{{ $myclass->stream->name }}</td>
                    <td>2011/04/25</td>
                    <td>
                      <a class="text-warning pull-right" href="" data-toggle="modal" data-target="#exampleModal-{{$myclass->id}}"><i class="mdi mdi-plus"></i>New Marks Entry</a>
                    </td>
                </tr>
                @endforeach
             </tbody>
         </table>
      </div>
    </div>
  </div>
</div>

@foreach ($class as  $cl)

  <!-- Modal -->
  <div class="modal fade" id="exampleModal-{{$cl->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel-{{$cl->id}}">Specify</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-sample" action="{{route('exams.specifyStudents')}}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-10">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Term Informaton<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                      <input type="hidden" class="form-control" value="{{$cl->id}}" name="sclassstream_id" required>
                        <select class="form-control" name="enrollment_id" required>
                          <option value="">Select Term....</option>
                          @foreach ($enrollments as $enrollment)
                            <option value="{{$enrollment->id}}">{{$enrollment->period}}-Term {{$enrollment->term->name}}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Assessment Category<span class="text-danger">*</span></label>
                    <div class="col-sm-6">
                      <select class="form-control" name="assessment_type" required>
                        <option value="">Select....</option>
                          <option value="test">Test</option>
                          <option value="mid">Mid</option>
                          <option value="final">Final</option>
                      </select>
                    </div>
                  </div>
                </div>

            </div>
            <div class="row">
              <div class="col-md-9">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Subject<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <select class="form-control" name="subject_id" required>
                      <option value="">Select....</option>
                      @foreach ($subjects as $subject)
                          <option value="{{$subject->id}}">{{$subject->code}}</option>
                      @endforeach
                    </select>
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

@endforeach


@endSection
