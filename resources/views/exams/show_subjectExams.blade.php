@extends('layouts.layout')
@section('content')
<div class="row">
<div class=" col-lg-12 col-lg-offset-3 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-success">Exams list</h4>

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card dashboard-table-advanced">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Test</th>
                    <th>mid(/40)</th>
                    <th>final(/60)</th>
                    <th>Total(/100)</th>
                    <th>grade</th>
                    <th>term</th>
                    <th>Year</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($subject_exams as $index => $exam)
                    <tr>
                      <td>{{$index+1}}</td>
                      <td class="p-3">
                        <div class="d-flex align-items-center">
                        {{$exam->student_id}}</div>
                      </td>
                      <td class="p-3">{{$exam->sclass_id}}</td>
                      <td class="p-3"><div class="d-flex align-items-center">{{$exam->test}}</div></td>
                      <td class="p-3"><div class="d-flex align-items-center">{{$exam->mid}}</div></td>
                      <td class="p-3"><div class="d-flex align-items-center">{{$exam->final}}</div></td>
                      <td class="p-3"><div class="d-flex align-items-center">{{$exam->total}}</div></td>
                      <td class="p-3"><div class="d-flex align-items-center">{{$exam->grade}}</div></td>
                      <td class="p-3"><div class="d-flex align-items-center">{{$exam->term_id}}</div></td>
                      <td class="p-3"><div class="d-flex align-items-center">{{$exam->academic_year_id}}</div></td>
                      <td class="p-3">
                      <a class="btn btn-sm btn-outline-success" href="{{ route('exams.edit',[$exam->id])}}">Edit</a>
                      <a class="btn btn-sm btn-outline-danger" href="#"
                    onclick="
                    var result = confirm('Are you sure you wish to delete this Exam?');
                        if( result ){
                                event.preventDefault();
                                document.getElementById('delete-form-{{$exam->id}}').submit();
                        }
                            ">
                        Delete</a>
                        <form id="delete-form-{{$exam->id}}" action="{{ route('exams.destroy',[$exam->id]) }}"
                  method="POST" style="display: none;">
                          <input type="hidden" name="_method" value="delete">
                          {{ csrf_field() }}
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
