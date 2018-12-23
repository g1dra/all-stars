@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col"></div>
        <div class="col-md-8" >
            <div class="card">
                <div class="card__header">
                    <h4>Login to your Account</h4>
                </div>
                <div class="card__content">
                    <!-- Login Form -->
                    <form method="POST" id="login-form" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="login-name">Your Email</label>
                            <input type="email" name="email" id="login-name" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   value="{{ old('email') }}" placeholder="Enter your email address..." required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="login-password">Your Password</label>
                            <input type="password" name="password" id="login-password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   placeholder="Enter your password...">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group form-group--password-forgot">
                            <label class="checkbox checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                <span class="checkbox-indicator"></span>
                            </label>
                            <span class="password-reminder">Forgot your password? <a href="{{ route('password.request') }}">Click Here</a></span>
                        </div>
                        <div class="form-group form-group--sm">
                            <a href="javascript:{}" class="btn btn-primary-inverse btn-lg btn-block"
                               onclick="document.getElementById('login-form').submit();">
                                Sign in to your account
                            </a>
                        </div>
                    </form>
                    <!-- Login Form / End -->
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
@endsection