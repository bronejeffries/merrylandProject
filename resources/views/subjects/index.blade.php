@extends('layouts.layout')
@section('content')
<div class="row">
<div class=" col-lg-12 col-lg-offset-3 ">
    <div class="card">
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
                  <tr>
                    <td>1</td>
                    <td class="p-2">
                      <div class="d-flex align-items-center">
                      Mth12303 </div>
                    </td>
                    <td class="p-2">Olevel</td>
                    <td class="p-2"><div class="d-flex align-items-center">12</div></td>
                    <td class="p-2"><div class="d-flex align-items-center">12</div></td>
                    <td class="p-2">
                      <a class=" badge badge-pill btn btn-sm btn-outline-success" href="{{ route('subjects.edit',1) }}">Edit</a>
                      <a class=" badge badge-pill btn btn-sm btn-outline-info" href="{{ route('subjects.show',1)}}">Details</a>
                      <a class=" badge badge-pill btn btn-sm btn-outline-danger" href="{{ route('subjects.destroy',1)}}">Delete</a>
                                          </td>
                  </tr>

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
