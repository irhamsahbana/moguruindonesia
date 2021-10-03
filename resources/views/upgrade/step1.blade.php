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
            <button class="btn btn-primary btn-round btn-lg btn-w-lg" type="button" name="button">Selanjutnya</button>

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
              <form class="lookup lookup-right search-bar" action="index.html" method="post">
                <input class="search-input" type="text" name="" value="" placeholder="Kursus" style="width:100%; height:70px; border-radius: 50px;">
                <button class="search-btn" type="button" name="button"> <img src="{{ asset('assets/img') }}/icon/loupe.png" alt="">  </button>
              </form>

            </div>
            <h6 style="margin-top: 20px;">Pilih kursus</h6>
            <div class="course-list">
              <div class="course-item rounded-corner">
                <label for="ccs-1"><h5>Matematika</h5></label>
                <input type="checkbox" class="course-check" id="ccs-1">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-2"><h5>Fisika</h5></label>
                <input type="checkbox" class="course-check" id="ccs-2">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-3"><h5>Biologi</h5></label>
                <input type="checkbox" class="course-check" id="ccs-3">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-4"><h5>Kimia</h5></label>
                <input type="checkbox" class="course-check" id="ccs-4">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-4"><h5>Kimia</h5></label>
                <input type="checkbox" class="course-check" id="ccs-4">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-4"><h5>Kimia</h5></label>
                <input type="checkbox" class="course-check" id="ccs-4">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-4"><h5>Kimia</h5></label>
                <input type="checkbox" class="course-check" id="ccs-4">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-4"><h5>Kimia</h5></label>
                <input type="checkbox" class="course-check" id="ccs-4">
              </div>
            </div>

          </div>
        </div>

      </div>




    </div>
  </div>

</div>

@endsection
