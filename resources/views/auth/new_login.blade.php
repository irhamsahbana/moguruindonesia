@extends('auth.auth_layout')

@section('content')
<div class="row min-h-fullscreen center-vh p-20 m-0">
  <div class="col-12">
    @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Sepertinya ada yang salah yang salah.</strong>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="card card-shadowed px-50 py-30 w-400px mx-auto rounded-corner" style="max-width: 100%">
      <img src="{{ asset('assets/img') }}/brand/brand-logo.png" alt="" width="250" height="auto" style="margin-left:auto; margin-right:auto;">
      <!-- <h5 class="text-uppercase"style="margin-left:auto; margin-right:auto; margin-top:20px; color:#33cabb;">MASUK</h5> -->
      <br>

      <form class="form-type-material" action="{{ route('auth.login.user') }}" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" id="email" name="email" autofocus value="{{ old('email') }}">
          <label for="email">Email</label>
          {{-- <p class="error-msg">email yang anda masukan tidak terdaftar</p> --}}
        </div>

        <div class="form-group">
          <input type="password" class="form-control" id="password" name="password">
          <label for="password">Password</label>
          {{-- <p class="error-msg">password yang anda masukkan salah</p> --}}
        </div>

        <div class="form-group flexbox flex-column flex-md-row">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" checked="">
            <!-- <label class="custom-control-label">Remember me</label> -->
          </div>

          <a class="text-muted hover-primary fs-13 mt-2 mt-md-0" href="#">Lupa Password Anda?</a>
        </div>

        <div class="form-group">
          <button class="btn btn-bold btn-block btn-primary btn-rounded" type="submit">Masuk</button>
        </div>
      </form>

      <div class="divider">Masuk dengan</div>
      <div class="text-center">
        <a class="btn btn-square btn-google" href="{{ route('auth.google') }}"><i class="fa fa-google"></i></a>
      </div>
    </div>
    <p class="text-center text-muted fs-13 mt-20">Belum Punya Akun? <a class="text-primary fw-500" href="{{ route('auth.register') }}">Daftar sekarang</a></p>
  </div>


  <footer class="col-12 align-self-end text-center fs-13">
    <p class="mb-0"><small>Copyright © 2019 <a href="http://thetheme.io/theadmin">TheAdmin</a>. All rights reserved.</small></p>
  </footer>
</div>
@endsection
