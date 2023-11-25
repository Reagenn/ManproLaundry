@extends('layouts.auth')

@section('login')
<div class="login-box">
    <div class="login-box-body" style="background: rgba(0, 0, 0, 0.5);">
        <div class="login-logo">
            <a href="{{ url('/') }}">
                <img src="{{ url($setting->path_logo) }}" alt="logo.png" width="100">
            </a>
        </div>

        <div style="text-align: left; margin-bottom: 20px;">
            <h2 style="color: white; font-weight: bold; font-size: 24px;">Masuk</h2>
        </div>

        <form action="{{ route('login') }}" method="post" class="form-login">
            @csrf
            <div class="form-group has-feedback @error('email') has-error @enderror">
                <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}" required style="background: rgba(255, 255, 255, 0.2); color: rgb(162, 6, 6);">
                <span class="glyphicon glyphicon-envelope form-control-feedback" style="color: rgb(162, 6, 6);"></span>
                @error('email')
                    <span class="help-block">{{ $message }}</span>
                @else
                <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="form-group has-feedback @error('password') has-error @enderror">
                <input type="password" name="password" class="form-control" placeholder="Sandi" required style="background: rgba(255, 255, 255, 0.2); color: rgb(255, 255, 255);">
                <span class="glyphicon glyphicon-lock form-control-feedback" style="color: rgb(162, 6, 6);"></span>
                @error('password')
                    <span class="help-block">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck" >
                        <label style="color: white; font-weight: bold;">
                            <input type="checkbox" > Ingat saya
                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" style="font-weight: bold; background: red; color: white;">Sign In</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
