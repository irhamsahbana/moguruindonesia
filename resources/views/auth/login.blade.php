@extends('auth._layout')

@section('content')
<!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container mt-5">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{ asset('assets/auth') }}/images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="{{ route('auth.register') }}" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign In</h2>
                    @if ($errors->any())

                    <div class="error_msgs">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form method="POST" class="register-form" id="login-form" action="{{ route('auth.login.user') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" name="email" id="username" placeholder="Email" autofocus value="{{ old('email') }}"/>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password"/>
                        </div>
                        {{-- <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div> --}}
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            {{-- <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li> --}}
      
                            <li><a href="{{ route('auth.google') }}" class="btn btn-danger btn-sm"><i class="fab fa-google fa-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>    
@endsection
