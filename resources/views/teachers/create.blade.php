@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create A Teacher</h4>
        {{-- {{ var_dump($errors) }} --}}
        <form class="form-sample" method="post" action="{{ route('teachers.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="first_name"/>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Middle Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="middle_name" />
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="last_name"/>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
                <div class="col-md-4">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">IDNo:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="id_no"/>
                    </div>
                  </div>
                </div>
            <div class="col-md-4">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-9">
                  <select class="form-control" name="gender">
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
                  <input type="date" class="form-control" name="date_of_birth" placeholder="dd/mm/yyyy"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Religion</label>
                <div class="col-sm-9">
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
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Photo</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="photo"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label ">Subjects</label>
                      <div class="col-sm-9">
                          <select name="subject[]" class="form-control " id="" multiple>
                              <option value="">select...</option>
                              @foreach($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                      </div>
                    </div>
                  </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Other Role</label>
                          <div class="col-sm-9">
                            <select name="others[]" class="form-control" id="">
                              <option value="">select...</option>
                              @foreach(['Director of Studies', 'Class Teacher','House Master', 'Foods Master'] as$index => $subject)
                                <option value="{{ $index}}">{{ $subject}}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
          <p class="card-description">
            Address
          </p>
          <hr/>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Village</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="village" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Sub-County</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="sub-county" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">County</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="county"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Country</label>
                <div class="col-sm-9">
                  <select class="form-control" name="country">
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
                    <button type="submit" class="btn btn-outline-primary"> Add Teacher</button>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endSection