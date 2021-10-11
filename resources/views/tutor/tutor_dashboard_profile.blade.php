@extends('root.root_tutor_layout')

@section('content')
<div class="container">
  <div class="profile-section" style="padding-top:0;">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="card card-body rounded-corner">
          <div class="profile-pict">
            <img class="avatar avatar-bordered" src="{{ asset('assets/img') }}/account.png" alt="">
            <h4>Bambang Pamungkas</h4>
            <div class="verified">
              <h5>Terverifikasi</h5>
              <span class="material-icons">check_circle</span>
            </div>
            <a class="btn btn-round btn-primary" href="#"> Edit Profile </a>
            <!-- <a class="btn btn-round btn-primary" data-toggle="modal" data-target="#exampleModal" href="#"> Edit Profile </a> -->
          </div>

        </div>
        <div class="card card-body rounded-corner">
          <div class="profile-info">

            <!-- IF CUSTOMER OPEN TUTOR'S PROFILE / DETAIL -->
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

            <!-- END OF TUTOR PROFILE -->


          </div>

        </div>

      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">

          <!-- IF CUSTOMER OPEN TUTOR PROFILE -->
        <div class="card card-body rounded-corner">
          <div class="profile-desc">
            <h4>Profile Saya</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>

        <div class="card card-body rounded-corner">
          <div class="education">
            <h4>Riwayat Pendidikan Saya</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>

        <div class="card card-body rounded-corner">
          <div class="education">
            <h4>Pengalaman</h4>
            <p></p>
          </div>
        </div>
        <!-- END OF TUTOR PROFILE -->
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
            <input class="form-control" type="text" name="" value="" placeholder="Nama Depan">
            <input class="form-control" type="text" name="" value="" placeholder="Nama Belakang">
            <input class="form-control" type="text" name="" value="" placeholder="Alamat">
            <input class="form-control" type="text" name="" value="" placeholder="Nomor HP">
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

@endsection
