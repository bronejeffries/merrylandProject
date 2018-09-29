@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create A Caretaker</h4>
        {{-- {{ var_dump($errors) }} --}}
        <form class="form-sample" method="post" action="{{ route('students.caretaker.store', $student->id) }}" enctype="multipart/form-data">
          @csrf
          <p class="card-description">
            Personal info
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="name" value="{{old('name')  }}"/>
                </div>
              </div>
            </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Student Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="student_id" value="{{$student->firstName }} {{$student->lastName }}" disabled />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                        <div class="form-group row">
                             <label class="col-sm-3 col-form-label">Type</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="type" id="">
                                  <option value="">Select type</option>
                                
                                      <option value="0">Parent</option>
                                      <option value="1">Guardian</option>
                                      <option value="2">Organisation</option>
              
                                </select>
                                </div>
                                </div>
                              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Contact</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="contact" value="{{ old('contact') }}">
                  </div>
                </div>
              </div>
                  </div>
               
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>
              </div>
            </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Photo</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="photo" value="{{old('photo')  }}"/>
                    </div>
                  </div>
                </div>
              </div>
           <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Permanent Address</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="permanent_address" value="{{old('permanent_address')  }}">
                          
                        </textarea>
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