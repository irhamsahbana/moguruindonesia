@extends('root.root_customer_layout')

@section('content')
  <div class="page-container bg-white">
    <div class="container">
      <div class="inner-container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="tagline">
              <h1>Temukan Tutor Kursus di Sekitar Anda</h1>
              <h4>Tersedia metode pembelajaran secara offline maupun online sesuai kebutuhan anda</h4>

              <div class="search-container">
                <form class="lookup lookup-right search-bar" action="index.html" method="post">
                  <input class="search-input" type="text" name="" value="" placeholder="lokasi anda"
                    style="width:40%; height:70px; border-radius: 50px;">
                  <input class="search-input" type="text" name="" value="" placeholder="Kursus"
                    style="width:60%; height:70px; border-radius: 50px;">
                  <button class="search-btn" type="button" name="button"> <img
                      src="{{ asset('assets/img') }}/icon/loupe.png" alt=""> </button>
                </form>
              </div>

            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="image-container">
              <img src="{{ asset('assets/img') }}/workspace _man1.png" alt="Loomies">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
