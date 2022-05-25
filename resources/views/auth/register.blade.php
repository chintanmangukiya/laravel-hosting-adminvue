@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <section id="wrapper" class="login-register">
        <div class="page-fade animation-slide-right animation-duration-1 page-register-main"
            style="height: 100%;padding: 0;margin: 0!important;">
            {{-- <div class="page-brand-info" style="position: absolute; margin: 165px  100px 0 140px;">
                <div class="brand">
                    <img class="brand-img" src="{{ asset('plugins/images/NorthStarLogo.png') }}" alt="..."
                        width="200">
                </div>
                <p class="text-size" style="color:#152b4b;font-weight:bold;">Get cash on your receivables in 1
                    day.<br>Simple as that.</p>
            </div> --}}
            <div class="login-box login-sidebar" id="scroll" style="overflow-y: scroll;">
                <div class="white-box" style="margin-top: 80px;">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <h2 class="font-size-24"><b>Sign Up</b></h2>
                            <p>Create a free account to get started with North Star Factor.</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group m-t-20">
                            <div class="col-xs-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                                    <input type="checkbox" id="inputCheckbox" name="term" required="">
                                    <label for="inputCheckbox"></label>
                                </div>
                                <p class="ml-40">By clicking Sign Up, you agree to our <a href=""> <span
                                            class="text-primary"><b>Terms</b></span> </a>.</p>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! NoCaptcha::renderJs('gu', false, 'recaptchaCallback') !!}
                            {!! NoCaptcha::display(['data-theme' => 'dark']) !!}
                        </div>
                        <div class="form-group">

                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong style="color: red">{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-block text-uppercase waves-effect waves-light"
                                    type="submit">Sign Up</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12">
                                <p>Already have an account? <a href="{{ url('/') }}" class="m-l-5 text-primary"><b>Sign
                                            In</b></a>
                                </p>
                            </div>
                        </div>
                    </form>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <p>© {{ date('Y') }} All Rights Reserved</p>
                            <div class="social">
                                <a class="btn btn-icon btn-round social-facebook mx-5" href="javascript:void(0)">
                                    <i class="icon bd-facebook" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-icon btn-round social-instagram mx-5" href="javascript:void(0)">
                                    <i class="icon bd-instagram" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
