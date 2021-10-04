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

        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="nav-link-number">3</span>
            <span class="nav-title">Ringkasan dan Checkout</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="nav-link-number">4</span>
            <span class="nav-title">Pembayaran</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="nav-link-number">5</span>
            <span class="nav-title">Pembayaran Berhasil</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="card card-body rounded-corner">
      <h3>Checkout</h3>
      <p>Nomor Transaksi: #098699</p>
      <div class="row" style="border-bottom:#8b95a5 solid 1px;">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <p>Kursus:</p>
          <h6>Matematika - SMA</h6>
          <p>Metode Pembelajaran: </p>
          <h6>Offline (Di rumah)</h6>
          <p>Jumlah Murid: </p>
          <h6>3</h6>
          <p>Jumlah Pertemuan: </p>
          <h6>8</h6>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <p>Nama Pemesan:</p>
          <h6>Hamka Hamzah</h6>
          <p>Alamat: </p>
          <h6>Jalan aja tapi gak jadian</h6>
          <p>Nomor Handphone: </p>
          <h6>0876543212</h6>
          <p>Lainnya: </p>
          <h6>Tidak ada</h6>
        </div>
      </div>
      <h5 style="margin: 30px 0 0 0; text-align: center;">Total Bayar: Rp. 120.000</h5>
      <button type="submit" class="btn btn-primary btn-round w-100" name="button">Selanjutnya</button>
    </div>

  </div>

</div>

@endsection
