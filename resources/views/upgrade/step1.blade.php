@extends('root.root_customer_layout')

@section('content')
  <div class="page-container bg-white">
    <div class="container">
      <div class="inner-container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="tagline">
              <h1>Pilih kursus yang ingin anda ajarkan</h1>
              <h4>Gunakan mesin pencari untuk memudahkan mencari kursus anda</h4>
              <form action="{{ route('tutor.reg.1.next') }}" method="POST">
                @csrf
                <button class="btn btn-primary btn-round btn-lg btn-w-lg" type="submit">Selanjutnya</button>
              

              <!-- <div class="search-container">
                    <form class="lookup lookup-right search-bar" action="index.html" method="post">
                      <input class="search-input" type="text" name="" value="" placeholder="Kursus" style="width:100%; height:70px; border-radius: 50px;">
                      <button class="search-btn" type="button" name="button"> <img src="{{ asset('assets/img') }}/icon/loupe.png" alt="">  </button>
                    </form>

                  </div> -->

            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="list-of-course">
              <div class="search-container">
                <p class="lookup lookup-right search-bar" action="index.html" method="post">
                  <input class="search-input" type="text" name="" value="" placeholder="Kursus"
                    style="width:100%; height:70px; border-radius: 50px;">
                  <button class="search-btn" type="button" name="button"> <img
                      src="{{ asset('assets/img') }}/icon/loupe.png" alt=""> </button>
                </p>
              </div>
              <h6 style="margin-top: 20px;">Pilih kursus</h6>
              <div class="course-list">
                @foreach ($subjects as $subject)
                  <div class="course-item rounded-corner">
                    <label for="ccs-1">
                      <h5>{{ $subject->subject_name }} </h5>
                    </label>
                    <input 
                      @foreach ($tutorSubjects as $ts)
                        @if ($ts->subject_id == $subject->id)
                          {{'checked'}}
                        @endif
                      @endforeach
                      type="checkbox" class="course-check" id="ccs-1" name="subjects[]" value="{{$subject->id}}">
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
