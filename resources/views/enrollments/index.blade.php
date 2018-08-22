@extends('layouts.layout')
@section('content')
<div class="row">
<div class=" col-lg-12 col-lg-offset-3 ">
    <div class="card">
      <div class="card-header">
<a class="text-warning pull-left" href="" data-toggle="modal" data-target="#exampleMo"><i class="mdi mdi-plus"></i>Enroll New Academic Period</a>
<a class="text-warning pull-right" href="" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus"></i>New Academic Period(Term)</a>
      </div>
      <div class="card-body">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Period</th>
                     <th>Term</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
               @foreach($enrollments as $index=>$enrollment)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{ $enrollment->period }}</td>
                    <td>{{ $enrollment->term->name }}</td>
                    <td>
                    </td>
                </tr>
                @endforeach
             </tbody>
         </table>
      </div>
    </div>
  </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleMo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Enroll Academic Period</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-sample" action="{{route('enrollments.store')}}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-10">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Year Name<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="YYYY" name="period" required>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Term<span class="text-danger">*</span></label>
                    <div class="col-sm-6">
                      <select class="form-control" name="term_id" required>
                        <option value="">Select....</option>
                        @foreach ($terms as $term)
                          <option value="{{$term->id}}">{{$term->name}}</option>
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
  {{-- modal2 --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Academic Period</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-sample" action="{{route('terms.store')}}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-10">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Term Name<span class="text-danger">*</span></label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" placeholder="Use words" name="term" required>
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
