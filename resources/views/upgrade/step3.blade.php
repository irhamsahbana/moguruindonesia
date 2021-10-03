@extends('root.root_customer_layout')

@section('content')

<div class="page-container bg-white">
  <div class="container">
    <div class="inner-container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="tagline">
            <h1>Lengkapi Profil dan Pendidikan Terakhir</h1>
            <h4>Tuliskan profil dan pendidikan terakhir anda semenarik mungkin agar orang-orang tertarik untuk kursus bersama anda.</h4>
            <button class="btn btn-secondary btn-round btn-lg btn-w-lg" type="button" name="button">Kembali</button>
            <button class="btn btn-primary btn-round btn-lg btn-w-lg" type="button" name="button">Selanjutnya</button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="list-of-course">

            <div class="box">
              <form class="form-group" action="index.html" method="post">
                <h6 style="margin-top: 20px;">Profil Anda</h6>
                <textarea class="form-control" id="textarea" rows="6"></textarea>
                <h6 style="margin-top: 20px;">Pendidikan Terakhir</h6>
                <textarea class="form-control" id="textarea" rows="6"></textarea>
              </form>
            </div>

          </div>
        </div>

      </div>




    </div>
  </div>

</div>

@endsection
