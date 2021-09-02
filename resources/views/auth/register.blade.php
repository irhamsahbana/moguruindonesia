@extends('auth._layout')

@section('content')
<!-- Sign up form -->
<section class="signup">
    <div class="container mt-5">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign Up</h2>
                @if ($errors->any())

                    <div class="error_msgs">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" class="register-form" id="register-form" action="{{ route('auth.register.user') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="first_name" id="name" placeholder="Your First Name" value="{{ old('first_name') }}" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="last_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="last_name" id="name" placeholder="Your Last Name" value="{{ old('last_name') }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                        <input type="number" name="phone" id="phone" placeholder="Your Phone Number" value="{{ old('phone') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password" required/>
                    </div>
                    {{-- <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                            statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div> --}}
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                    <div class="form-group">
                      <div class="social-login">
                          <span class="social-label">Or Register with</span>
                          <ul class="socials">
                            {{-- <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li> --}}
      
                            <li><a href="{{ route('auth.google') }}" class="btn btn-danger btn-sm"><i class="fab fa-google fa-xs"></i></a></li>
                        </ul>
                      </div>
                  </div>
                </form>

            </div>
            <div class="signup-image">
                <figure><img src="{{ asset('assets/auth') }}/images/signup-image.jpg" alt="sing up image"></figure>
                <a href="{{ route('auth.login') }}" class="signup-image-link">I am already member</a>
            </div>

        </div>
    </div>
</section>
@endsection
