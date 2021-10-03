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

        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="nav-link-number">2</span>
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

    <div class="card card-body rounded-corner form-type-round">
      <form class="form-group" action="index.html" method="post">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <h3>Permintaan Kursus</h3>
            <label class="require" for="course">Kursus</label>
            <select class="form-control" id="course">
              <option>Pilih Kursus</option>
              <option>Matematika</option>
              <option>Aritmatika</option>
              <option>Logaritma</option>
            </select>
            <label class="require" for="degree">Tingkat</label>
            <select class="form-control" id="course">
              <option>Pilih Tingkat</option>
              <option>SD</option>
              <option>SMP</option>
              <option>SMA</option>
              <option>Kuliah</option>
            </select>
            <label class="require" for="method">Metode Belajar</label>
            <select class="form-control" id="method">
              <option>Pilih Metode Belajar</option>
              <option>Offline (Dirumah)</option>
              <option>Online</option>
            </select>
            <label class="require" for="meeting">Jumlah Pertemuan</label>
            <select class="form-control" id="course">
              <option>Jumlah Pertemuan</option>
              <option>4</option>
              <option>6</option>
              <option>8</option>
              <option>12</option>
            </select>
            <label class="require" for="students">Jumlah Murid</label>
            <select class="form-control" id="course">
              <option>Jumlah Murid</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <label class="require" for="days">Tanggal Kursus</label>
            <input type="text" class="form-control" data-provide="datepicker" placeholder="Pilih sesuai jumlah pertemuan" id="date" data-date-multidate="true">
            <label class="require" for="time">Waktu Kursus</label>
            <input type="text" class="form-control" data-provide="timepicker" id="time" data-show-meridian="false">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <h3>Informasi Pemesan</h3>
            <label class="require" for="name">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
            <label class="require" for="address">Alamat Belajar</label>
            <input type="text" class="form-control" id="address" placeholder="Alamat tempat belajar">
            <label class="require" for="address">Nomor Handphone</label>
            <input type="text" class="form-control" id="address" placeholder="Nomor yang bisa di hubungi">
            <label for="other">Keterangan lainnya</label>
            <input type="text" class="form-control" id="other" placeholder="Contoh: mempunyai keterbatasan dalam ...">

            <div class="fee-estimation">
              <h5 style="margin:30px 0 0 0; text-align:center;">Estimasi Biaya</h5>
              <h1 style="margin:30px 0 0 0; text-align:center;">Rp. 100.000</h1>
            </div>

          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-round w-100" name="button" style="margin:30px 0 0 0; width:100%;">Selanjutnya</button>

      </form>

    </div>

  </div>

</div>

@endsection
