@extends('layouts.auth')

@section('login')
<div class="login-box" style="width: 600px; height: 624px; display: flex; justify-content: center; align-items: center;">
    <div class="login-box-body" style="background-color: rgba(40, 120, 172, 0.79); width: 560px; height: 330px; border-radius: 15px;">
        <div class="login-logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logis.png') }}" alt="logo.png" width="300">
            </a>
        </div>

        <div style="text-align: left; margin-bottom: 20px;">
            <h2 style="color: white; font-weight: bold; font-size: 24px;">Masuk</h2>
        </div>

        <form action="{{ route('login') }}" method="post" class="form-login">
            @csrf
            <div class="form-group has-feedback @error('email') has-error @enderror">
                <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">

                @error('email')
                    <span class="help-block">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="form-group has-feedback @error('password') has-error @enderror">
                <input type="password" name="password" class="form-control" placeholder="Sandi" required>

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
                    <button type="submit" class="btn btn-primary btn-block btn-flat" style="font-weight: bold; background: #FF5E37; color: #FFFFFF;">Sign In</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
