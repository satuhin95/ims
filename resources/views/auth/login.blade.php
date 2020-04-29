@extends('layouts.app')

@section('content')
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="{{URL::to('public/admin/assets/images/logo.png')}}" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
        <div class="card-body">
            <form  method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-lg" name="email" placeholder="Email Address" >
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control @error('password') is-invalid @enderror form-control-lg" id="password" type="password" placeholder="Password" name="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
        <div class="bg-white p-0  ">
                <div class=" btn btn-lg btn-block text-center">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"class="btn btn-info ">Forgot Password</a>
                    @endif

                </div>
        </div>
    </div>
    @endsection
