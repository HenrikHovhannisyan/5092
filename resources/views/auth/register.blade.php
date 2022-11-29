@extends('layouts.app')
@section('title')
    Sign Up
@endsection

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center"
         style="background-image: url({{ asset('img/bg-register.png') }}); height: 100vh">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center">
                    <img class="img-fluid pt-5" src="{{ asset("img/logo.png") }}" alt="">
                    <p class="register_logo_test"><span>Register</span> to stay up to date on all things Jaad <span>Indonesian</span>
                        coffee.</p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="ms-auto bg-white p-5 rounded-top">
                        <div class="register_routs border rounded-pill">
                            <a href="{{ route('login') }}" class="reg_sign_in"> Sign In</a>
                            <a href="{{ route('register') }}" class="reg_sign_up">Sign Up</a>
                        </div>
                        <h1 class="sign_up_title">{{ __('Sign Up') }}</h1>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="col-form-label">{{ __('First Name') }}</label>
                                    <div class="">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="col-form-label">{{ __('Last Name') }}</label>
                                    <div class="">
                                        <input id="last_name" type="text"
                                               class="form-control @error('last_name') is-invalid @enderror"
                                               name="last_name" value="{{ old('last_name') }}" required
                                               autocomplete="name"
                                               autofocus>

                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-form-label">{{ __('Email Address') }}</label>

                                <div class="">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="password"
                                           class="col-form-label">{{ __('Password') }}</label>

                                    <div class="input-group rounded border">
                                        <input id="password" type="password"
                                               class="form-control border-0 @error('password') is-invalid @enderror"
                                               name="password"
                                               required autocomplete="new-password">
                                        <div class="input-group-prepend d-flex align-items-center">
                                            <div class="input-group-text p-0 border-0" id="btn_eye">
                                                <button type="button" class="btn btn_eye">
                                                    <i class="fa_eye fa-solid fa-eye d-block"></i>
                                                    <i class="fa_eye-slash fa-solid fa-eye-slash d-none"></i>
                                                </button>
                                            </div>
                                        </div>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="password-confirm"
                                           class="col-form-label">{{ __('Repeat Password') }}</label>

                                    <div class="input-group rounded border">
                                        <input id="password-confirm" type="password" class="form-control border-0"
                                               name="password_confirmation" required autocomplete="new-password">
                                        <div class="input-group-prepend d-flex align-items-center">
                                            <div class="input-group-text p-0 border-0" id="btn_eye_slash">
                                                <button type="button" class="btn btn_eye">
                                                    <i class="c_fa_eye fa-solid fa-eye d-block"></i>
                                                    <i class="c_fa_eye-slash fa-solid fa-eye-slash d-none"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <button type="submit" class="btn-sign_up">
                                    {{ __('Sign Up') }}
                                </button>
                                <button type="button" class="btn-sign_up_google">
                                    <img src="{{ asset('img/google-logo.png') }}" alt="">
                                    {{ __('Sign Up with Google') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="sign_up_footer">
                        <p class="sign_up_footer_text">
                            By clicking the button above, you agree to our
                            <span>terms of use and privacy policies</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
