@extends('layouts.head')
@section('content')
  <center>
    <div style="margin-top:60px">
        <div class="p-2" style="background-color:#F7F7F7;width:600px">
          <h6 style="font-weight:bold">Profile</h6>
      </div>
      <div class="mt-1 bg-white pb-3" style="width:600px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <form class="text-start">
          <div class="px-5">
            <label for="exampleInputEmail1" class="form-label mt-3" style="text-align:left">Name</label>
            <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" disabled readonly>
          </div>
          <div class="mb-3 px-5">
            <label for="exampleInputEmail1" class="form-label mt-3" style="text-align:left">Email</label>
            <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" disabled readonly>
          </div>
          <div class="mb-3 px-5">
            <label for="exampleInputPassword1" class="form-label text-start">Gender</label>
            <input type="text" name="name" class="form-control" value="{{Auth::user()->gender}}" disabled readonly>
          </div>
           <div class="mb-3 px-5">
            <label for="exampleInputPassword1" class="form-label text-start">Date of Birth</label>
            <input type="text" name="dob" class="form-control" value="{{Auth::user()->birth}}" disabled readonly>
           </div>
          <div class="mb-3 px-5">
            <label for="exampleInputPassword1" class="form-label text-start">Country</label>
            <input type="text" name="country" class="form-control" value="{{Auth::user()->country}}" disabled readonly>
          </div>
        </form>
      </div>
    </div>
  </center>
@endsection