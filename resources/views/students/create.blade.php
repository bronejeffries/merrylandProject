@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create A Student</h4>
        {{-- {{ var_dump($errors) }} --}}
        <form class="form-sample" method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
          @csrf
          <p class="card-description">
            Personal info
          </p>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">First Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="firstName" value="{{old('firstName')  }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Middle Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="middleName" value="{{old('middleName')  }}"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Last Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lastName" value="{{old('lastName')  }}"/>
                  </div>
                </div>
              </div>

                <div class="col-md-5">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">RegNo:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="regiNo" value="{{old('regiNo')  }}"/>
                    </div>
                  </div>
                </div>
              </div>
            <div class="row">
                <div class="col-md-5">
                        <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Level</label>
                                <div class="col-sm-4">
                                  <div class="form-radio">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="level" value="0" id="shift1" value="{{old('level')  }}" checked>
                                      O'Level
                                    </label>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-radio">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="level" value="1"  value="{{old('level')  }}" id="shift2">
                                     A'Level
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
              <div class="col-md-5">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">class</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="sclass_id" id="">
                      <option value="">Select Class</option>
                      @foreach ($classes as $class)
                          <option value="{{ $class->id }}">{{ $class->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>
          <div class="row">
          <div class="col-md-5">
            <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Stream</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="stream" id="">
                            <option value="">Select Stream</option>
                            @foreach ($streams as $stream)
                                <option value="{{ $stream->id }}">{{ $stream->name }}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>
                  </div>
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-8">
                  <select class="form-control" name="gender">
                        <option value="">Select a gender..</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Date of Birth</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="dob" value="{{old('dob')  }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Religion</label>
                <div class="col-sm-8">
                  <select class="form-control" name="religion">
                      <option value="">Select a religion..</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Protestant">Protestant</option>
                    <option value="Catholic">Catholic</option>
                    <option value="Saventh Day">Saventh Day</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Shift</label>
                <div class="col-sm-4">
                  <div class="form-radio">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="shift" value="0" value="{{old('shift')  }}">
                      Day
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-radio">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" value="{{old('shift')  }}" name="shift" value="1" checked>
                      Boarding
                    </label>
                  </div>
                </div>
              </div>
            </div>
                <div class="col-md-5">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Photo</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" name="photo" value="{{old('photo')  }}"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Co-Activity</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="extraActivity" placeholder="coactivity" value="{{old('extraActivity')  }}"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nationality</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nationality" placeholder="nationality" value="{{old('nationality')  }}"/>
                    </div>
                  </div>
                </div>
              </div>
          <p class="card-description">
            Address
          </p>
          <hr/>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Village</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="village" value="{{old('village')  }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Sub-County</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="sub_county" value="{{old('sub_county')  }}"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">County</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="county" value="{{old('county')  }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Country</label>
                <div class="col-sm-8">
                  <select class="form-control" name="country">
                    <option>Choose ...</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Italy">Italy</option>
                    <option value="Russia">Russia</option>
                    <option value="Britain">Britain</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary"> Add Student</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endSection
@section('footer_scripts')

@endSection