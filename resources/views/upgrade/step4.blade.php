@extends('root.root_customer_layout')

@section('content')

<div class="page-container bg-white">
  <div class="container">
    <div class="inner-container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="tagline">
            <h1>Upload KTP dan Ijazah</h1>
            <h4>Uploaad KTP dan ijazah anda agar profil anda terverifikasi</h4>
            <button class="btn btn-secondary btn-round btn-lg btn-w-lg" type="button" name="button">Kembali</button>
            <button class="btn btn-primary btn-round btn-lg btn-w-lg" type="button" name="button">Selanjutnya</button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="list-of-course" style="margin-top: 100px;">

            <div class="box">
              <form class="form-group" action="index.html" method="post">
                <label for="">Upload KTP anda</label>
                <div class="input-group form-type-round file-group">
                  <input type="text" class="form-control file-value" placeholder="Pilih file..." readonly="">
                  <input type="file" multiple="">
                  <span class="input-group-append">
                    <button class="btn btn-light file-browser" type="button"><i class="fa fa-upload"></i></button>
                  </span>
                </div>
                <label for="">Upload ijazah terakhir</label>
                <div class="input-group form-type-round file-group">
                  <input type="text" class="form-control file-value" placeholder="Pilih file..." readonly="">
                  <input type="file" multiple="">
                  <span class="input-group-append">
                    <button class="btn btn-light file-browser" type="button"><i class="fa fa-upload"></i></button>
                  </span>
                </div>
              </form>
            </div>

          </div>
        </div>

      </div>




    </div>
  </div>

</div>

@endsection
