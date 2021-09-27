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
            </div>

          </div>
          <div class="card card-body rounded-corner">
            <div class="profile-info">
              <h5>Metode Pembelajaran</h5>
              <ul>
                <li>
                  <div class="capsule">
                    Online
                  </div>
                </li>
                <li>
                  <div class="capsule">
                    Rumah Anda
                  </div>
                </li>
              </ul>

              <h5>Bidang Yang Diajarkan</h5>
              <ul>
                <li>
                  <div class="capsule">
                    Matematika
                  </div>
                </li>
                <li>
                  <div class="capsule">
                    Kimia
                  </div>
                </li>
              </ul>

              <h5>Tingkat</h5>
              <ul>
                <li>
                  <div class="capsule">
                    SMA
                  </div>
                </li>
                <li>
                  <div class="capsule">
                    SMP
                  </div>
                </li>
              </ul>


            </div>

          </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="card card-body rounded-corner">
            <div class="profile-desc">
              <h4>Tentang Tutor</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>

          <div class="card card-body rounded-corner">
            <div class="education">
              <h4>Riwayat Pendidikan</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>

          <div class="card card-body rounded-corner">
            <div class="education">
              <h4>Pengalaman</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="card card-body rounded-corner">
            <div class="profile-info">
              <h4>Tarif</h4>
              <h5>Rp. 30.000/sesi</h5>
            </div>
          </div>
        </div>


      </div>

    </div>
  </div>

</div>

@endsection
