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
        <a href="{{ route('index') }}">
         <img src="{{ asset('assets/img') }}/brand/brand-logo.png" alt="" width="250" height="auto" style="margin-left:auto; margin-right:auto;">
         
        </a>
      <!-- <h5 class="text-uppercase">Create an account</h5> -->
      <br>

      <form class="form-type-material" action="{{ route('auth.register.user') }}" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" id="first_name" value="{{ old('first_name') }}" name="first_name">
          <label for="first_name">Nama Depan</label>
          {{-- <p class="error-msg">Nama depan tidak boleh kosong</p> --}}
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="last_name" value="{{ old('last_name') }}" name="last_name">
          <label for="last_name">Nama Belakang</label>
          <!-- <p class="error-msg">kolom ini tidak boleh kosong</p> -->
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="email" value="{{ old('email') }}" name="email">
          <label for="email">Email</label>
          {{-- <p class="error-msg">email tidak boleh kosong</p> --}}
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="phone" value="{{ old('phone') }}" name="phone">
          <label for="phone">Nomor HP</label>
          <!-- <p class="error-msg">kolom ini tidak boleh kosong</p> -->
        </div>

        <div class="form-group">
          <input type="password" class="form-control" id="password" name="password">
          <label for="password">Password</label>
          {{-- <p class="error-msg">password tidak boleh kosong</p>
          <p class="error-msg">password harus berisi minimal 6 karakter huruf dan angka</p> --}}
        </div>

        <div class="form-group">
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
          <label for="password_confirmation">Konfirmasi Password</label>
          {{-- <p class="error-msg">kolom ini tidak boleh kosong</p>
          <p class="error-msg">password yang anda masukkan salah</p> --}}
        </div>

        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <p class="custom-control-label"> <input type="checkbox"> Dengan mendaftar anda setuju dengan semua <a class="text-primary" href="#" style="margin-left: 16px;">ketentuan</a></p>

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
