@extends('root.root_customer_layout')

@section('content')

<div class="page-container bg-white">
  <div class="container">
    <div class="inner-container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="tagline">
            <h1>Selamat Registrasi Anda Berhasil!</h1>
            <h4>Silahkan cek email yang anda gunakan untuk mengaktivasi akun anda</h4>

            <!-- <div class="search-container">

            </div> -->
            <button type="submit" class="btn btn-primary btn-round w-100" name="button" style="margin:30px 0 0 0; width:100%;">Kembali ke halaman awal</button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="image-container">
            <img src="{{ asset('assets/img') }}/mobile devices.png" alt="Loomies">

          </div>
        </div>

      </div>




    </div>
  </div>

</div>

@endsection
