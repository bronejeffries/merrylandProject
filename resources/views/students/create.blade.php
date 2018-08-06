@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create A Student</h4>
        <form class="form-sample" method="post" action="{{ route('students.store') }}">
          @csrf
          <p class="card-description">
            Personal info
          </p>
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
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">RegNo:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="reg_no"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Level</label>
                                <div class="col-sm-4">
                                  <div class="form-radio">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="level" id="shift1" value="" checked>
                                      O'Level
                                    </label>
                                  </div>
                                </div>
                                <div class="col-sm-5">
                                  <div class="form-radio">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="level" id="shift2" value="option2">
                                     A'Level
                                    </label>
                                  </div>
                                </div>
                              </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">class</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="class" id="">
                      <option value="">Select Class</option>
                      {{-- @foreach ($classes as $class)
                          <option value="{{ $class->id }}">{{ $class->name }}</option>
                      @endforeach --}}
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Stream</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="stream" id="">
                            <option value="">Select Stream</option>
                            {{-- @foreach ($streams as $stream)
                                <option value="{{ $stream->id }}">{{ $stream->name }}</option>
                            @endforeach --}}
                          </select>
                      </div>
                    </div>
                  </div>
                  </div>
               
          <div class="row">
            <div class="col-md-6">
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
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date of Birth</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" name="date_of_birth"/>
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
                <label class="col-sm-3 col-form-label">Shift</label>
                <div class="col-sm-4">
                  <div class="form-radio">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="shift" >
                      Day
                    </label>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-radio">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="shift" checked>
                      Boarding
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Photo</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="photo"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Co-Activity</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="co-activity" placeholder="co-activity"/>
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
                  <select class="form-control">
                    <option>Choose ...</option>
                    <option>Uganda</option>
                    <option>Italy</option>
                    <option>Russia</option>
                    <option>Britain</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <p class="card-description">
                Parent Info<b><i class="text-primary">(if a student has parents)</i></b>
              </p>
              <hr/>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Father's Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="fatherName" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Fathers Phone No</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="fatherCellNo" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Mother's Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="MothersName" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Mothers Phone No</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="motherCellNo" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="card-description">
                       Guadian Info<b><i class="text-primary">(if a student stays with a guardian)</i></b>
                      </p>
                      <hr/>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Guardian's Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="localGuardianName" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Guardians Phone No</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="fatherCellNo" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description">
                            Organisation's Info<b><i class="text-primary">(if a student is sponsored by an organisation)</i></b>
                           </p>
                           <hr/>
                           <div class="row">
                             <div class="col-md-6">
                               <div class="form-group row">
                                 <label class="col-sm-3 col-form-label">Organisation's Name</label>
                                 <div class="col-sm-9">
                                   <input type="text" class="form-control" name="localGuardianName" />
                                 </div>
                               </div>
                             </div>
                             <div class="col-md-6">
                               <div class="form-group row">
                                 <label class="col-sm-3 col-form-label">Organisation Contact</label>
                                 <div class="col-sm-9">
                                   <input type="text" class="form-control" name="org_contact" />
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Person's Name</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="contact_person_name" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Person's Address</label>
                                    <div class="col-sm-9">
                                      <input type="email" class="form-control" name="contact_person_address" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group row">
                                          <label class="col-sm-3 col-form-label">Contact Person's Contact</label>
                                          <div class="col-sm-9">
                                            <input type="text" class="form-control" name="contact_person_contact" />
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