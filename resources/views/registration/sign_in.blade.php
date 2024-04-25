@extends('layouts.vega')

@section('Title', 'Sign in')

@section('Files')

    <link rel="stylesheet" href="{{ asset('Assets/css/sign in.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
@endsection
@section('content')
    <section class="containers forms">
        <div class="form login">
            <div class="form-content">

                <header class="text1">Welcome Back !</header>
                <header class="text2">Sign in to your Vega account</header>
                <div class="media-options">
                    <a href="{{ route('Google_Auth.index') }}" class="field google">
                        <img src="{{ asset('Assets/img/google.webp') }}" alt="" class="google-img">
                        <span>Continue with Google</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="{{ asset('Assets/img/Vector.webp') }}" alt="" class="google-img">
                        <span>Continue with Facebook</span>
                    </a>
                </div>
                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="{{ asset('Assets/img/apple.webp') }}" alt="" class="google-img">
                        <span>Continue with Apple</span>
                    </a>
                </div>





                <div class="line"></div>

                <form action="{{ Route('Login.post') }}" method="POST" id="form">
                    @csrf

                    <div class="mt-5">
                        @if ($errors->any())
                            <div class="col-12">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if (session()->has('Success'))
                            <div class="alert alert-Success">{{ session('Success') }}</div>
                        @endif
                    </div>
                    <div class="field input-field">
                        <input type="text" placeholder="Email Address" class="input" name="email" id="email"
                            value="{{ old('email') }}">
                        <div class="error" id="emailError"></div>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="password" id="password"
                            value="{{ old('password') }}">
                        <i class='bx bx-hide eye-icon'></i>
                        <div class="error" id="passwordError"></div>
                    </div>

                    <div class="form-link">
                        <label class="checkbox">
                            <input type="checkbox" value="remember-me" id="rememberMe" name="remember" name="rememberMe">
                            Remember me
                        </label>
                        <a href="{{ route('Reset.create') }}" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button type="submit" id="submit">Login</button>
                    </div>

                </form>

                <p class="sign">Don`t have a account ? <a href="{{ route('Signup.create') }}">Sign Up</a></p>
            </div>
        </div>
    </section>
@endsection
@section('Js')

    <script src="{{ asset('Assets/js/script.js') }}"></script>
    <script src="{{ asset('Assets/js/lib/bootstrap.js') }}"></script>
@endsection
