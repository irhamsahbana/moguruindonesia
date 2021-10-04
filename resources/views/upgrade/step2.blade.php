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
            <button class="btn btn-secondary btn-round btn-lg btn-w-lg" type="button" name="button">Kembali</button>
            <button class="btn btn-primary btn-round btn-lg btn-w-lg" type="button" name="button">Selanjutnya</button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="list-of-course">
            <h6 style="margin-top: 20px;">Pilih Jenjang</h6>
            <div class="course-list">
              <div class="course-item rounded-corner">
                <label for="ccs-1"><h5>TK / Pra Sekolah</h5></label>
                <input type="checkbox" class="course-check" id="ccs-1">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-2"><h5>SD</h5></label>
                <input type="checkbox" class="course-check" id="ccs-2">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-3"><h5>SMP</h5></label>
                <input type="checkbox" class="course-check" id="ccs-3">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-4"><h5>SMA</h5></label>
                <input type="checkbox" class="course-check" id="ccs-4">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-4"><h5>S1</h5></label>
                <input type="checkbox" class="course-check" id="ccs-4">
              </div>
              <div class="course-item rounded-corner">
                <label for="ccs-4"><h5>Umum</h5></label>
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
