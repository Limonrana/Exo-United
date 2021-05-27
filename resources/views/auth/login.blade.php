@extends('admin.layouts.app')

@section('title', 'Exo-United - Customer Login')

@section('content')

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
            <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">{{ __('Exo-United') }} <span class="tx-normal" style="color: #33b5f7;">{{ __('CUSTOMER') }}</span></div>
            <div class="tx-center mg-b-60">Enter your Email and Password for login</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter your password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="form-group mt-3">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="pb-0" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                    @endif
                </div><!-- form-group -->

                <button type="submit" class=" btn-block my-btn">{{ __('Login') }}</button>

                <div class="social-login">
                    <div class="tx-center mg-t-20">Login With</div>
                    <ul class="list-inline text-center">
                        <li class="list-inline-item mr-1">
                            <a href="{{ route('customer.social.login', 'facebook') }}">
                                <img src="{{ asset('uploads/others/facebook.png') }}" width="43px">
                            </a>
                        </li>
                        <li class="list-inline-item mr-1">
                            <a href="{{ route('customer.social.login', 'google') }}">
                            <img src="{{ asset('uploads/others/google.png') }}" width="35px">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mg-t-20 tx-center">Not yet a customer? <a href="{{ route('register') }}" class="tx-info">{{ __('Register') }}</a></div>
            </form>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->
@endsection

