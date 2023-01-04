@extends('layouts.head')

@section('content')
  <center>
    <div style="margin-top:130px">
        <div class="p-2" style="background-color:#F7F7F7;width:600px">
          <h6 style="font-weight:bold">Login</h6>
      </div>
      <div class="mt-1 bg-white pb-3" style="width:600px;border-bottom-left-radius:5px;border-bottom-right-radius:5px">
        <form method="POST" action="{{ route('login') }}" class="text-start">
         @csrf
          <div class="mb-3 px-5">
            <label for="exampleInputEmail1" class="form-label mt-3" style="text-align:left">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-3 px-5">
            <label for="exampleInputPassword1" class="form-label text-start">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Enter Your Password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-3 form-check ms-5">

            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
          </div>
          <center>
            <button type="submit" class="btn btn-outline-secondary px-5" style="border-radius:5px">
                {{ __('Login') }}
            </button>
          </center>
        </form>
        <p class="mt-3 text-start ms-3">Don't have an account? <a href="/register">Register Here</a></p>
      </div>
    </div>
  </center>
@endsection