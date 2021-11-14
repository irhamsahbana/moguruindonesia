@extends('root.root_customer_layout')

@section('content')
<div class="page-container">
  <div class="container">
    <div class="progress-bar-section">
      <ul class="nav nav-process nav-process-box">
        <li class="nav-item complete">
          <a class="nav-link" href="#">
            <span class="nav-link-number"><i class="ti-check"></i></span>
            <span class="nav-title">Permintaan Kursus</span>
          </a>
        </li>

        <li class="nav-item complete">
          <a class="nav-link" href="#">
            <span class="nav-link-number"><i class="ti-check"></i></span>
            <span class="nav-title">Ringkasan dan Checkout</span>
          </a>
        </li>

        <li class="nav-item complete">
          <a class="nav-link" href="#">
            <span class="nav-link-number"><i class="ti-check"></i></span>
            <span class="nav-title">Reservasi Berhasil</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="card card-body rounded-corner">
      <h3 style="text-align: center;">Reservasi Berhasil!</h3>
      <p style="text-align: center;">Terimakasih sudah melakukan reservasi order</p>
      <p style="text-align: center;">Resevasi order untuk les private telah berhasil kami proses.</p>
      <button type="submit" class="btn btn-primary btn-round w-100" name="button">Beranda</button>
    </div>

  </div>

</div>

@endsection
