@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create A staff</h4>
        {{-- {{ var_dump($errors) }} --}}
        <form class="form-sample" method="post" action="{{ route('staffs.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{old('first_name')  }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Middle Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="middle_name"  value="{{old('middle_name')  }}" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="last_name"  value="{{old('last_name')  }}"/>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
                <div class="col-md-4">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">IDNo:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="id_no"  value="{{old('id_no')  }}"/>
                    </div>
                  </div>
                </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-9">
                  <select class="form-control" name="gender" >
                        <option value="">Select a gender..</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date of Birth</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" name="date_of_birth" placeholder="dd/mm/yyyy"  value="{{old('date_of_birth')  }}"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Religion</label>
                <div class="col-sm-9">
                  <select class="form-control" name="religion" value="{{ old('religion') }}">
                      <option value="">Select a religion..</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Protestant">Protestant</option>
                    <option value="Catholic">Catholic</option>
                    <option value="Saventh Day">Saventh Day</option>
                  </select>
                </div>
              </div>
            </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Photo</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="photo" value"{{ old('photo') }}"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
          <p class="card-description">
            Address
          </p>
          <hr/>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Village</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="village" value"{{ old('village') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Sub-County</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="sub_county" value"{{ old('sub_county') }}"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">County</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="county" value"{{ old('county') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Country</label>
                <div class="col-sm-9">
                  <select class="form-control" name="country" value"{{ old('country') }}">
                    <option value="">Choose ...</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Kenya">Italy</option>
                    <option value="Tanzania">Russia</option>
                    <option value="South Sudan">Britain</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
         
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary"> Add Staff</button>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endSection