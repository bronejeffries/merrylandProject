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
                  <tr>
                    <td>1</td>
                    <td class="p-3">
                      <div class="d-flex align-items-center">
                      Agaba Davis</div>
                    </td>
                    <td class="p-3">Senior One</td>
                    <td class="p-3"><div class="d-flex align-items-center">33</div></td>
                    <td class="p-3"><div class="d-flex align-items-center">50</div></td>
                    <td class="p-3"><div class="d-flex align-items-center">83</div></td>
                    <td class="p-3"><div class="d-flex align-items-center">A</div></td>
                    <td class="p-3"><div class="d-flex align-items-center">3</div></td>
                    <td class="p-3"><div class="d-flex align-items-center">2019</div></td>
                    <td class="p-3">
                    <a class="btn btn-sm btn-outline-success" href="{{ route('exams.edit',1) }}">Edit</a>
                    <a class="btn btn-sm btn-outline-danger" href="{{ route('exams.destroy',1) }}">Delete</a>
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
