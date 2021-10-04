@extends('root.root_customer_layout')

@section('content')

<div class="page-container">
  <div class="container">
    <div class="profile-section">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="card card-body rounded-corner">
            <div class="profile-pict">
              <img class="avatar avatar-bordered" src="{{ asset('assets/img') }}/account.png" alt="">
              <h4>Bambang Pamungkas</h4>
              <h5>Mahasiswa</h5>
              <a class="btn btn-round btn-primary" href="#"> Reservasi Kursus </a>
              <!-- <a class="btn btn-round btn-primary" href="#"> Dashboard Saya </a> -->
            </div>

          </div>
          <div class="card card-body rounded-corner">
            <div class="profile-info">
              <!-- IF customer OPEN THEIR OWN PROFILE -->
              <h5>Alamat</h5>
              <p>Jalan-jalan no. 40</p>
              <h5>No. Hp</h5>
              <p>081234567890</p>
              <!-- End -->
            </div>

          </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="card card-body rounded-corner">
            <h4 style="margin: 10px 0 10px 0;">Detail Kursus dan Absensi</h4>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <p>Kursus:</p>
                <h6>Matematika - SMA</h6>
                <p>Metode Pembelajaran: </p>
                <h6>Offline (Di rumah)</h6>

              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <p>Nama Tutor:</p>
                <h6>Hamka Hamzah</h6>
                <p>Nomor Transaksi:</p>
                <h6> #098699</h6>

              </div>
            </div>
          </div>

          <div class="card card-body rounded-corner">
            <div class="absen">
              <div class="absen-list">
                <h5>Pertemuan 1</h5>
                <p>Status: <span style="color: #63cabb;">Belum Terlaksana</span></p>
                <p>Tanggal: 20-10-2021</p>
                <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#exampleModal">
                  Isi Absensi
                </button>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="card card-body rounded-corner">
            <div class="profile-info">
              <!-- <h4>Tarif</h4>
              <h5>Rp. 30.000/sesi</h5> -->
            </div>
          </div>
        </div>


      </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Isi absensi untuk hari ini</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body form-type-round">
            <form class="form-group" action="index.html" method="post">
              <input class="form-control" type="text" name="" value="" placeholder="Ulasan anda untuk hari ini">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-round" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-round">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
