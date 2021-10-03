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
            <span class="nav-title">Metode Pembayaran</span>
          </a>
        </li>

        <li class="nav-item complete">
          <a class="nav-link" href="#">
            <span class="nav-link-number"><i class="ti-check"></i></span>
            <span class="nav-title">Checkout</span>
          </a>
        </li>
        <li class="nav-item complete">
          <a class="nav-link" href="#">
            <span class="nav-link-number"><i class="ti-check"></i></span>
            <span class="nav-title">Konfirmasi Tutor</span>
          </a>
        </li>


        <li class="nav-item complete">
          <a class="nav-link" href="#">
            <span class="nav-link-number"><i class="ti-check"></i></span>
            <span class="nav-title">Pembayaran</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="card card-body rounded-corner">
      <h3 style="text-align: center;">Pembayaran Berhasil!</h3>
      <p style="text-align: center;">Terimakasih sudah melakukan pembayaran</p>
      <p style="text-align: center;">Pembayaran untuk les private telah berhasil kami proses, silahkan kembali ke halaman awal untuk mencari tutor lainnya</p>
      <button type="submit" class="btn btn-primary btn-round w-100" name="button">Beranda</button>
    </div>

  </div>

</div>

@endsection
