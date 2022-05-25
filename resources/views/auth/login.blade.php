@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section id="wrapper" class="login-register">
        <div class="page-fade">
            {{-- <div class="page-brand-info" style="position: absolute; margin: 165px  100px 0 140px;">
                <div class="brand">
                    <img class="brand-img" src="{{ asset('plugins/images/NorthStarLogo.png') }}" alt="..."
                        width="200">
                </div>
                <p class="text-size" style="color:#152b4b;font-weight:bold;">Get cash on your receivables in 1
                    day.<br>Simple as that.</p>
            </div> --}}

            <div class="login-box login-sidebar ">
                <div class="white-box">
                    <div style="margin-top:100px;">
                        {{-- Google Translate --}}
                        <div style="text-align:right;">
                            <div id="google_translate_element"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <h2 class="font-size-24"><b>Sign In</b></h2>
                                <p>Securely sign in to elite or use the App.</p>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="email" type="email"
                                        class="registerinput form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback registerspan" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox checkbox-primary pull-left p-t-0">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" id="to-recover"
                                            class="text-dark pull-right m-t-10"><i class="fa fa-lock m-r-5"></i> Forgot
                                            password?</a>
                                    @endif
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
                            <div class="form-group text-center" style="margin-top: 50px;">
                                <div class="col-xs-12">
                                    <button type="submit"
                                        class="btn btn-info btn-md btn-block text-uppercase waves-effect waves-light">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-12">
                                    <p>Don't have an account? <a href="{{ route('register') }}"
                                            class="text-primary m-l-5"><b>Sign
                                                Up</b></a></p>
                                </div>
                            </div>
                        </form>
                        <div class="form-group text-center" style="margin-top: 55px;">
                            <div class="col-xs-12">
                                <p style="font-size: 85%; letter-spacing: 0.1rem;"> <b> © {{ date('Y') }} Laravel
                                        Vue</b></p>
                                <div class="social">
                                    <a class="btn btn-icon btn-round social-facebook mx-5" href="javascript:void(0)">
                                        <i class="icon bd-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-icon btn-round social-instagram mx-5" href="javascript:void(0)">
                                        <i class="icon bd-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    <a href="{{ url('auth/google') }}">
                                        <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                                            style="margin-left: 3em;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script type="text/javascript">
    var recaptchaCallback = function() {
        alert("grecaptcha is ready!");
    };
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
