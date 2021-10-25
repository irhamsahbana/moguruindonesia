@extends('root.root_customer_layout')

@section('content')
  <div class="page-container">
    <div class="container">
      <div class="search-container min-width-200px-center">
        <form class="lookup lookup-right search-bar" action="index.html" method="post">
          <input class="search-input" type="text" name="" value="" placeholder="lokasi anda"
            style="width:40%; height:70px; border-radius: 50px;">
          <input class="search-input" type="text" name="" value="" placeholder="Kursus"
            style="width:60%; height:70px; border-radius: 50px;">
          <button class="search-btn" type="button" name="button"> <img src="{{ asset('assets/img') }}/icon/loupe.png"
              alt=""> </button>
        </form>
      </div>

      <div class="row">
        @foreach ($tutors as $tutor)
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card card-body rounded-corner">
              <img class="rounded-corner" src="{{ asset('assets/img') }}/no-photo.png" alt="">
              <h5 class="tutor-name">{{ $tutor->first_name . ' ' . $tutor->last_name }}</h5>
              <div class="tutor-rate">
                <span class="material-icons">
                  star_rate
                </span>
                <p>5.0 (100 Ulasan)</p>
              </div>
              <h6>Rp. {{ $tutor->fee_per_session }} / Sesi</h6>
              <p>{{ Str::limit($tutor->bio, 100) }}</p>
              <a class="btn btn-round btn-primary" href="{{ route('tutor.profile', ['slug' => $tutor->slug]) }}">Lihat Profil</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
