@extends('admin.layouts.app')

@section('content')

<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">{{ __('Exo-United') }} <span class="tx-normal" style="color: #33b5f7;">{{ __('CUSTOMER') }}</span></div>
        <div class="tx-center mg-b-60">Enter your register here and get access</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="form-group">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter your fullname">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><!-- form-group -->

        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter your email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><!-- form-group -->

        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter your password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div><!-- form-group -->

        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="confirm password">
        </div><!-- form-group -->

        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <button type="submit" class="btn btn-block my-btn">{{ __('Register') }}</button>

            <div class="social-login">
                <div class="tx-center mg-t-20">Login With</div>
                <ul class="list-inline text-center">
                    <li class="list-inline-item mr-1">
                        <a href="{{ route('customer.social.login', 'facebook') }}">
                            {{--                            <i class="fa fa-facebook-square fa-2x"></i>--}}
                            <img src="{{ asset('uploads/others/facebook.png') }}" width="43px">
                        </a>
                    </li>
                    <li class="list-inline-item mr-1">
                        <a href="{{ route('customer.social.login', 'google') }}">
                            {{--                            <i class="fa fa-google fa-2x"></i>--}}
                            <img src="{{ asset('uploads/others/google.png') }}" width="35px">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('customer.social.login', 'github') }}">
                            {{--                            <i class="fa fa-github fa-2x"></i>--}}
                            <img src="{{ asset('uploads/others/github.png') }}" width="40px">
                        </a>
                    </li>
                </ul>
            </div>

        <div class="mg-t-20 tx-center">Already have an account? <a href="{{ route('login') }}" class="tx-info">{{ __('Login') }}</a></div>
    </form>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->
@endsection
