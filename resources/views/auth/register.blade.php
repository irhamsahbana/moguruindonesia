@extends('auth.auth_layout')

@section('content')

<div class="row min-h-fullscreen center-vh p-20 m-0">
  <div class="col-12">
    <div class="card card-shadowed px-50 py-30 w-400px mx-auto rounded-corner" style="max-width: 100%">
      <img src="{{ asset('assets/img') }}/brand/brand-logo.png" alt="" width="250" height="auto" style="margin-left:auto; margin-right:auto;">
      <!-- <h5 class="text-uppercase">Create an account</h5> -->
      <br>

      <form class="form-type-material" action="{{ route('auth.register.user') }}">
        <div class="form-group">
          <input type="text" class="form-control" id="first_name" value="{{ old('first_name') }}" name="first_name">
          <label for="first_name">Nama Depan</label>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="last_name" value="{{ old('last_name') }}" name="last_name">
          <label for="last_name">Nama Belakang</label>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="email" value="{{ old('email') }}" name="email">
          <label for="email">Email</label>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="phone" value="{{ old('phone') }}" name="phone">
          <label for="phone">Nomor HP</label>
        </div>

        <div class="form-group">
          <input type="password" class="form-control" id="password" >
          <label for="password">Password</label>
        </div>

        <div class="form-group">
          <input type="password" class="form-control" id="password_confirmation">
          <label for="password_confirmation">Konfirmasi Password</label>
        </div>

        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input">
            <label class="custom-control-label">Dengan mendaftar anda setuju dengan semua <a class="text-primary" href="#">ketentuan</a></label>.
          </div>
        </div>

        <br>
        <button class="btn btn-bold btn-block btn-primary btn-rounded" type="submit">Daftar</button>
      </form>
      <div class="divider">Atau daftar dengan</div>
      <div class="text-center">
        <a class="btn btn-square btn-google" href="{{ route('auth.google') }}"><i class="fa fa-google"></i></a>
      </div>
    </div>
    <p class="text-center text-muted fs-13 mt-20">Sudah Punya Akun? <a class="text-primary fw-500" href="{{ route('auth.login') }}">Masuk</a></p>
  </div>


  <footer class="col-12 align-self-end text-center fs-13">
    <p class="mb-0"><small>Copyright © 2019 <a href="http://thetheme.io/theadmin">TheAdmin</a>. All rights reserved.</small></p>
  </footer>
</div>

@endsection
