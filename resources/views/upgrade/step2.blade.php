@extends('root.root_customer_layout')

@section('content')
  <div class="page-container bg-white">
    <div class="container">
      <div class="inner-container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="tagline">
              <h1>Pilih Jenjang</h1>
              <h4>Pilih jenjang yang ingin anda ajarkan untuk mempermudah orang-orang dalam mencari anda</h4>
              <form action="{{ route('tutor.reg.2.next') }}" method="POST">
                @csrf
              <a class="btn btn-secondary btn-round btn-lg btn-w-lg" href="{{ route('tutor.reg.1') }}">Kembali</a>
              <button class="btn btn-primary btn-round btn-lg btn-w-lg" type="submit" }}">Selanjutnya</button>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="list-of-course">
              <h6 style="margin-top: 20px;">Pilih Jenjang</h6>
              <div class="course-list">
                @foreach ($degrees as $degree)
                  <div class="course-item rounded-corner">
                    <label for="ccs-1">
                      <h5>{{ $degree->degree_name }}</h5>
                    </label>
                    <input
                      @foreach ($tutorDegrees as $td)
                        @if ($td->degree_id == $degree->id)
                          {{'checked'}}
                        @endif
                      @endforeach
                      type="checkbox" class="course-check" id="ccs-1" name="degrees[]" value="{{ $degree->id }}">
                  </div>
                @endforeach
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
