@extends('layouts.layout')
@section('content')

<div class="row">
    <div class="col-lg-3 grid-margin">
      <div class="card chart-bg">
        <div class="card-body">
          <div class="wrapper d-flex justify-content-center mt-4 mb-4">
            <div class="icon"><i class="mdi mdi-chart-pie icon-md text-success mr-2"></i></div>
            <div class="details">
              <h2 class="mb-1 mt-2">Students</h2>
              <h4>1359</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 grid-margin">
      <div class="card user-bg">
        <div class="card-body">
          <div class="wrapper d-flex justify-content-center mt-4 mb-4">
            <div class="icon"><i class="mdi mdi-account-multiple icon-md text-info mr-2"></i></div>
            <div class="details">
              <h2 class="mb-1 mt-2">Staff</h2>
              <h4>98</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 grid-margin">
      <div class="card wallet-bg">
        <div class="card-body">
          <div class="wrapper d-flex justify-content-center mt-4 mb-4">
            <div class="icon"><i class="mdi mdi-wallet icon-md text-primary mr-2"></i></div>
            <div class="details">
              <h2 class="mb-1 mt-2">Non-Staff</h2>
              <h4>50</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 grid-margin">
      <div class="card layer-bg">
        <div class="card-body">
          <div class="wrapper d-flex justify-content-center mt-4 mb-4">
            <div class="icon"><i class="mdi mdi-buffer icon-md text-warning mr-2"></i></div>
            <div class="details">
              <h2 class="mb-1 mt-2">Classes</h2>
              <h4>35</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
      <div class="card dashboard-table-advanced">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th class="d-flex align-items-center justify-content-center border-bottom-0">
                  <div class="form-check mt-2"><label><input type="checkbox" class="form-check-input"></label></div>
                </th>
                <th>Profile</th>
                <th>IdNo.</th>
                <th>Created</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-2 d-flex align-items-center justify-content-center border-bottom-0">
                  <div class="form-check mt-2"><label class=""><input type="checkbox" class="form-check-input"></label></div>
                </td>
                <td class="p-2">
                  <div class="d-flex align-items-center">
                    <div class="profile-img mr-3"><img src="images/faces/face1.jpg" alt=""></div>Jacob</div>
                </td>
                <td class="p-2">53275531</td>
                <td class="p-2">12 May 2017</td>
                <td class="p-2">
                  <div class="badge badge-pill badge-danger">pending</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 d-flex align-items-center justify-content-center border-bottom-0">
                  <div class="form-check mt-2"><label><input type="checkbox" class="form-check-input"></label></div>
                </td>
                <td class="p-2">
                  <div class="d-flex align-items-center">
                    <div class="profile-img mr-3"><img src="images/faces/face2.jpg" alt=""></div>Jacob</div>
                </td>
                <td class="p-2">53275531</td>
                <td class="p-2">12 May 2017</td>
                <td class="p-2">
                  <div class="badge badge-pill badge-warning">in process</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 d-flex align-items-center justify-content-center border-bottom-0">
                  <div class="form-check mt-2"><label><input type="checkbox" class="form-check-input"></label></div>
                </td>
                <td class="p-2">
                  <div class="d-flex align-items-center">
                    <div class="profile-img mr-3"><img src="images/faces/face3.jpg" alt=""></div>Jacob</div>
                </td>
                <td class="p-2">53275531</td>
                <td class="p-2">12 May 2017</td>
                <td class="p-2">
                  <div class="badge badge-pill badge-info">fixed</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 d-flex align-items-center justify-content-center border-bottom-0">
                  <div class="form-check mt-2"><label><input type="checkbox" class="form-check-input"></label></div>
                </td>
                <td class="p-2">
                  <div class="d-flex align-items-center">
                    <div class="profile-img mr-3"><img src="images/faces/face4.jpg" alt=""></div>Jacob</div>
                </td>
                <td class="p-2">53275531</td>
                <td class="p-2">12 May 2017</td>
                <td class="p-2">
                  <div class="badge badge-pill badge-success">completed</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 d-flex align-items-center justify-content-center border-bottom-0">
                  <div class="form-check mt-2"><label><input type="checkbox" class="form-check-input"></label></div>
                </td>
                <td class="p-2">
                  <div class="d-flex align-items-center">
                    <div class="profile-img mr-3"><img src="images/faces/face5.jpg" alt=""></div>Jacob</div>
                </td>
                <td class="p-2">53275531</td>
                <td class="p-2">12 May 2017</td>
                <td class="p-2">
                  <div class="badge badge-pill badge-warning">in process</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 d-flex align-items-center justify-content-center border-bottom-0">
                  <div class="form-check mt-2"><label><input type="checkbox" class="form-check-input"></label></div>
                </td>
                <td class="p-2">
                  <div class="d-flex align-items-center">
                    <div class="profile-img mr-3"><img src="images/faces/face6.jpg" alt=""></div>Jacob</div>
                </td>
                <td class="p-2">53275531</td>
                <td class="p-2">12 May 2017</td>
                <td class="p-2">
                  <div class="badge badge-pill badge-info">fixed</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 d-flex align-items-center justify-content-center border-bottom-0">
                  <div class="form-check mt-2"><label><input type="checkbox" class="form-check-input"></label></div>
                </td>
                <td class="p-2">
                  <div class="d-flex align-items-center">
                    <div class="profile-img mr-3"><img src="images/faces/face7.jpg" alt=""></div>Jacob</div>
                </td>
                <td class="p-2">53275531</td>
                <td class="p-2">12 May 2017</td>
                <td class="p-2">
                  <div class="badge badge-pill badge-warning">in process</div>
                </td>
              </tr>
              <tr>
                <td class="p-2 d-flex align-items-center justify-content-center border-bottom-0">
                  <div class="form-check mt-2"><label><input type="checkbox" class="form-check-input"></label></div>
                </td>
                <td class="p-2">
                  <div class="d-flex align-items-center">
                    <div class="profile-img mr-3"><img src="images/faces/face8.jpg" alt=""></div>Jacob</div>
                </td>
                <td class="p-2">53275531</td>
                <td class="p-2">12 May 2017</td>
                <td class="p-2">
                  <div class="badge badge-pill badge-warning">in process</div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title  mb-5">Academic Perfomance History</h2>
          <div class="wrapper d-flex justify-content-between">
            <div class="side-left">
              <p class="mb-2">The best perfomance</p>
              <p class="display-3 text-primary mb-4">+45.2%</p>
            </div>
            <div class="side-right">
              <h5>2017</h5>
            </div>
          </div>
          <div class="wrapper d-flex justify-content-between">
            <div class="side-left">
              <p class="mb-2">Worst perfomance</p>
              <p class="display-3 text-primary mb-5">-35.3%</p>
            </div>
            <div class="side-right">
              <h5>2015</h5>
            </div>
          </div>
          <div class="wrapper">
            <div class="d-flex justify-content-between">
              <h5 class="mb-2">Payments this term</h5>
              <h5 class="mb-2">88%</h5>
            </div>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="wrapper mt-4">
            <div class="d-flex justify-content-between">
              <h5 class="mb-2">Budget this term</h5>
              <h5 class="mb-2">56%</h5>
            </div>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  @endSection