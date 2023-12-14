@extends('layouts.auth')

@section('register')
<div class="register-box">
    <div class="register-box-body" style="background: rgba(0, 0, 0, 0.5);">
        <div class="register-logo">
            <a href="{{ url('/') }}">
                <img src="{{ url($setting->path_logo) }}" alt="logo.png" width="250">
            </a>
        </div>

        <div style="text-align: left; margin-bottom: 20px;">
            <h2 style="color: white; font-weight: bold; font-size: 24px;">Register</h2>
        </div>

        <form action="{{ route('register') }}" method="post" class="form-register">
            @csrf
            <div class="form-group has-feedback @error('name') has-error @enderror">
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required value="{{ old('name') }}">
                <span class="glyphicon glyphicon-user form-control-feedback" style="color: rgb(162, 6, 6);"></span>
                @error('name')
                    <span class="help-block">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="form-group has-feedback @error('email') has-error @enderror">
                <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback" style="color: rgb(162, 6, 6);"></span>
                @error('email')
                    <span class="help-block">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="form-group has-feedback @error('password') has-error @enderror">
                <input type="password" name="password" class="form-control" placeholder="Sandi" required>
                <span class="glyphicon glyphicon-lock form-control-feedback" style="color: rgb(162, 6, 6);"></span>
                @error('password')
                    <span class="help-block">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="form-group has-feedback @error('password_confirmation') has-error @enderror">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Sandi" required>
                <span class="glyphicon glyphicon-lock form-control-feedback" style="color: rgb(162, 6, 6);"></span>
                @error('password_confirmation')
                    <span class="help-block">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" style="font-weight: bold; background: red; color: white;">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
