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
                <h4>{{ $tutor->first_name . ' ' . $tutor->last_name }}</h4>
                {{-- <h5>Mahasiswa</h5> --}}
                @if ($userSlug == 'self')
                  <a class="btn btn-info rounded-corner2" data-toggle="modal" data-target="#exampleModal" href="#"> Sunting
                    Profil</a>
                @else
                  <a class="btn btn-info rounded-corner2" href="{{ route('direct.order.request', $tutor->slug) }}"> Reservasi Kursus </a>
                @endif
              </div>
            </div>

            <div class="card card-body rounded-corner">
              <div class="profile-info">
                <!-- IF customer OPEN THEIR OWN PROFILE -->
                @if ($userSlug == 'self')
                  <h5>Alamat</h5>
                  @if ($tutor->address)
                    <p>{{ $tutor->address }}</p>
                  @else
                    <p>-</p>
                  @endif

                  <h5>No. HP</h5>
                  @if ($tutor->phone)
                    <p>{{ $tutor->phone }}</p>
                  @else
                    <p>-</p>
                  @endif
                @endif
                <!-- End -->

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
                  @foreach ($tutorSubjects as $ts)
                    <li>
                      <div class="capsule">
                        {{ $ts->subject_name }}
                      </div>
                    </li>
                  @endforeach
                </ul>

                <h5>Tingkat</h5>
                <ul>
                  @foreach ($tutorDegrees as $td)
                    <li>
                      <div class="capsule">
                        {{ $td->degree_name }}
                      </div>
                    </li>
                  @endforeach
                </ul>
                <!-- END OF TUTOR PROFILE -->
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12">
            <!-- IF CUSTOMER OPEN THEIR OWN PROFILE -->
            @if ($userSlug == 'self')
              <div class="card rounded-corner">
                <!-- Nav tabs -->
                <h4 style="margin: 20px;"> Kursus Saya</h4>
                <ul class="nav nav-tabs nav-tabs-danger nav-justified" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Sedang Berlangsung</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Menunggu Konfirmasi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Riwayat</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="card-body tab-content">
                  <div class="tab-pane fade active show" id="home">
                    <div class="flexbox mb-20">
                      <div class="lookup">
                        <input class="w-200px" type="text" name="s" placeholder="Search">
                      </div>
                    </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Tutor</th>
                          <th>Kursus</th>
                          <th>Absen</th>
                          <th> Detail </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Jajang</td>
                          <td>Matematika</td>
                          <td>3/4</td>
                          <td> <a href="#">Lihat Absensi</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="tab-pane fade" id="profile">
                    <div class="flexbox mb-20">
                      <div class="lookup">
                        <input class="w-200px" type="text" name="s" placeholder="Search">
                      </div>
                    </div>

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Tutor</th>
                          <th>Kursus</th>
                          <th>Status</th>
                          <th> Detail </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Jajang</td>
                          <td>Matematika</td>
                          <td>Menunggu Pembayaran</td>
                          <td> <a href="#">Lihat Detail</a></td>
                        </tr>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mbappe</td>
                          <td>Matematika</td>
                          <td>Menunggu Tutor</td>
                          <td> <a href="#">Lihat Detail</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="tab-pane fade" id="messages">
                    <div class="flexbox mb-20">
                      <div class="lookup">
                        <input class="w-200px" type="text" name="s" placeholder="Search">
                      </div>
                    </div>

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Tutor</th>
                          <th>Kursus</th>
                          <th>Status</th>
                          <th> Detail </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Jajang</td>
                          <td>Matematika</td>
                          <td>Selesai</td>
                          <td> <a href="#">Lihat Detail</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            @endif
            <!-- END OF CUSTOMER PROFILE -->

            <!-- IF CUSTOMER OPEN TUTOR PROFILE -->
            @if ($userSlug == 'others')
              <div class="card card-body rounded-corner">
                <div class="profile-desc">
                  <h4>Tentang Tutor</h4>
                  <p>{{ $tutor->bio }}</p>
                </div>
              </div>

              <div class="card card-body rounded-corner">
                <div class="education">
                  <h4>Riwayat Pendidikan</h4>
                  <p>{{ $tutor->last_degree_desc }}</p>
                </div>
              </div>

              {{-- <div class="card card-body rounded-corner">
                <div class="education">
                  <h4>Pengalaman</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>
                </div>
              </div> --}}
            @endif

            <!-- END OF TUTOR PROFILE -->
          </div>

          @if ($userSlug == 'others')
            <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="card card-body rounded-corner">
                <div class="profile-info">
                  <h4>Tarif</h4>
                  <h5>Rp. {{ $tutor->fee_per_session }} / sesi</h5>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>

      @if ($userSlug == 'self')
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sunting Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body form-type-round">
                <form class="form-group" action="{{ route('tutor.profile.edit', ['slug' => $tutor->slug]) }}"
                  method="POST">
                  @csrf
                  @method('PUT')
                  <input class="form-control" type="text" name="first_name" value="{{ $tutor->first_name }}"
                    placeholder="Nama Depan">
                  <br>
                  <input class="form-control" type="text" name="last_name" value="{{ $tutor->last_name }}"
                    placeholder="Nama Belakang">
                  <br>
                  <input class="form-control" type="text" name="address" value="{{ $tutor->address }}"
                    placeholder="Alamat">
                  <br>
                  <input class="form-control" type="text" name="phone" value="{{ $tutor->phone }}"
                    placeholder="Nomor HP">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-corner2" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-info rounded-corner2">Simpan Perubahan</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      @endif
    </div>

  </div>

@endsection
