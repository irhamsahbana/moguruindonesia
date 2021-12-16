@extends('root.root_tutor_layout')

@section('content')
  <div class="container">
    <div class="profile-section" style="padding-top:0;">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="card card-body rounded-corner">
            <div class="profile-pict">
              <img class="avatar avatar-bordered" src="{{ asset('assets/img') }}/account.png" alt="">
              <h4>{{ $basicProfile->name }}</h4>
              <div class="verified">
                <h5>Terverifikasi</h5>
                <span class="material-icons">check_circle</span>
              </div>
              <a class="btn btn-info rounded-corner2" href="{{ route('dashboard.tutor.profile-edit') }}"> Sunting Profile </a>
              <!-- <a class="btn btn-round btn-primary" data-toggle="modal" data-target="#exampleModal" href="#"> Edit Profile </a> -->
            </div>

          </div>
          <div class="card card-body rounded-corner">
            <div class="profile-info">
              <h4>Profile Saya</h4>

              <!-- IF CUSTOMER OPEN TUTOR'S PROFILE / DETAIL -->
              <p>Email</p>
              <h6>{{ $basicProfile->email }}</h6>
              <p>No. Hp</p>
              <h6>{{ $basicProfile->phone }}</h6>
              <p>Alamat</p>
              <h6>{{ $basicProfile->address }}</h6>
              {{-- <p>Kota</p>
            <h6>Bandung</h6>
            <p>Nomor Rekening</p>
            <h6>76890764</h6>
            <p>Pemilik Rekening</p>
            <h6>Bambang Pamungkas</h6> --}}

            </div>

          </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">

          <!-- IF CUSTOMER OPEN TUTOR PROFILE -->
          <div class="card card-body rounded-corner">
            <div class="profile-desc">
              <h4>Tentang Saya</h4>
              <p>{{ $tutorProfile->bio }}</p>
            </div>
          </div>

          <div class="card card-body rounded-corner">
            <div class="education">
              <h4>Riwayat Pendidikan Saya</h4>
              <p>{{ $tutorProfile->last_degree_desc }}</p>
            </div>
          </div>
          <!-- END OF TUTOR PROFILE -->
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="card card-body rounded-corner">
            <div class="profile-info">
              <h4>Kelengkapan</h4>
              <div class="verified" style="justify-content: space-between;">
                <h6>KTP</h6> <span class="material-icons">check_circle</span>
              </div>
              <div class="verified" style="justify-content: space-between;">
                <h6>Ijazah</h6> <span class="material-icons">check_circle</span>
              </div>

            </div>
          </div>
          <div class="card card-body rounded-corner">
            <div class="profile-info">
              <h4>Tarif</h4>
              <h6>Rp. {{ $tutorProfile->fee_per_session }}/sesi</h6>
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
                @foreach ($subjects as $subject)
                  <li>
                    <div class="capsule">
                      {{ $subject->subject_name }}
                    </div>
                  </li>
                @endforeach
              </ul>

              <h5>Tingkat</h5>
              <ul>
                @foreach ($degrees as $degree)
                  <li>
                    <div class="capsule">
                      {{ $degree->degree_name }}
                    </div>
                  </li>
                @endforeach
              </ul>

              <!-- END OF TUTOR PROFILE -->


            </div>

          </div>

        </div>


      </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
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
