@extends('root.root_customer_layout')

@section('content')
  <div class="page-container">
    <div class="container">
      <div class="search-container min-width-200px-center">
        <form class="lookup lookup-right search-bar" action="index.html" method="post">
          <input class="search-input" type="text" name="" value="" placeholder="lokasi anda" style="width:40%; height:70px; border-radius: 50px;">
          <input class="search-input" type="text" name="" value="" placeholder="Kursus" style="width:60%; height:70px; border-radius: 50px;">
          <button class="search-btn" type="button" name="button"> <img src="{{ asset('assets/img') }}/icon/loupe.png" alt="">  </button>
        </form>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card card-body rounded-corner">
            <img class="rounded-corner" src="{{ asset('assets/img') }}/no-photo.png" alt="">
            <h5 class="tutor-name">Jajang Nurjaman</h5>
            <div class="tutor-rate">
              <span class="material-icons">
                star_rate
              </span>
              <p>5.0 (100 Ulasan)</p>
            </div>
            <h6>Rp. 30.000 / Sesi</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <a class="btn btn-round btn-primary" href="#">Lihat Profil</a>


          </div>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card card-body rounded-corner">
            <img class="rounded-corner" src="{{ asset('assets/img') }}/no-photo.png" alt="">
            <h5 class="tutor-name">Jajang Nurjaman</h5>
            <div class="tutor-rate">
              <span class="material-icons">
                star_rate
              </span>
              <p>5.0 (100 Ulasan)</p>
            </div>
            <h6>Rp. 30.000 / Sesi</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <a class="btn btn-round btn-primary" href="#">Lihat Profil</a>


          </div>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card card-body rounded-corner">
            <img class="rounded-corner" src="{{ asset('assets/img') }}/no-photo.png" alt="">
            <h5 class="tutor-name">Jajang Nurjaman</h5>
            <div class="tutor-rate">
              <span class="material-icons">
                star_rate
              </span>
              <p>5.0 (100 Ulasan)</p>
            </div>
            <h6>Rp. 30.000 / Sesi</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <a class="btn btn-round btn-primary" href="#">Lihat Profil</a>


          </div>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card card-body rounded-corner">
            <img class="rounded-corner" src="{{ asset('assets/img') }}/no-photo.png" alt="">
            <h5 class="tutor-name">Jajang Nurjaman</h5>
            <div class="tutor-rate">
              <span class="material-icons">
                star_rate
              </span>
              <p>5.0 (100 Ulasan)</p>
            </div>
            <h6>Rp. 30.000 / Sesi</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <a class="btn btn-round btn-primary" href="#">Lihat Profil</a>


          </div>

        </div>

      </div>

    </div>

  </div>
@endsection
