@extends('layouts.layout')
@section('content')
<div class="row">
<div class=" col-lg-12 col-lg-offset-3 ">
    <div class="card">
      <div class="card-header">
        <a class="text-warning" href="{{ route('subjects.create') }}"><i class="mdi mdi-plus"></i>Add Subject</a>
      </div>
      <div class="card-body">
        <h4 class="card-title text-success">Subjects list</h4>

        <div class="col-lg-10 grid-margin stretch-card">
          <div class="card dashboard-table-advanced">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>subject Code</th>
                    <th>Level</th>
                    <th>No. Of Teachers</th>
                    <th>No. Of Students</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($subjects as $index=>$subject)
                    <tr>
                      <td>{{$index + 1}}</td>
                      <td class="p-2">
                        <div class="d-flex align-items-center">
                        {{$subject->code}} </div>
                      </td>
                      <td class="p-2">{{$subject->studentgroup->name}}</td>
                      <td class="p-2"><div class="d-flex align-items-center">12</div></td>
                      <td class="p-2"><div class="d-flex align-items-center">12</div></td>
                      <td class="p-2">
                        <a class=" badge badge-pill btn btn-sm btn-outline-success" href="{{ route('subjects.edit',[$subject->id]) }}">Edit</a>
                        <a class="badge badge-pill btn btn-sm btn-outline-danger" href="#"
                      onclick="
                      var result = confirm('Are you sure you wish to delete this Subject?');
                          if( result ){
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{$subject->id}}').submit();
                          }
                              ">
                          Delete</a>
                          <form id="delete-form-{{$subject->id}}" action="{{ route('subjects.destroy',[$subject->id]) }}"
                            method="POST" style="display: none;">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            </form>
                          </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endSection
