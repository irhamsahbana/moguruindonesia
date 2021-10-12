@extends('root.root_tutor_layout')

@section('content')
<div class="container">
  <div class="profile-section" style="padding-top:0;">
    <div class="card card-body rounded-corner">
      <form class="form-group form-type-round" action="index.html" method="post" style="width:100%;">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="profile-pict" style="width:100%;">
              <img class="rounded-corner" src="{{ asset('assets/img') }}/no-photo.png" alt="">
              <div class="file-group file-group-inline" style="margin-left:auto; margin-right:auto; margin-top:20px; width:100%;">
                <button class="btn btn-info btn-round file-browser" style="width:100%;" type="button">Ganti Foto</button>
                <input type="file">
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <label for="name">Nama Depan</label>
            <input type="text" class="form-control" id="name" placeholder="Nama Depan">
            <label for="name">Nama Belakang</label>
            <input type="text" class="form-control" id="name" placeholder="Nama Belakang">
            <label for="name">Nomor Hp</label>
            <input type="text" class="form-control" id="name" placeholder="Nomor Hp">
            <label for="name">Alamat</label>
            <input type="text" class="form-control" id="name" placeholder="Alamat">
            <label for="name">Kota</label>
            <input type="text" class="form-control" id="name" placeholder="Kota">
            <label for="name">Nomor Rekening</label>
            <input type="text" class="form-control" id="name" placeholder="Rekening Anda">
            <label for="name">Nama Bank</label>
            <input type="text" class="form-control" id="name" placeholder="Nama Bank">
            <label for="name">Pemilik Rekening</label>
            <input type="text" class="form-control" id="name" placeholder="Pemilik Rekening">
            <label for="tarif">Tarif</label>
            <input type="text" class="form-control" id="tarif" placeholder="Tarif per sesi">
          </div>

          <div class="col-lg-5 col-md-5 col-sm-12">

            <label for="bio">Bio</label>
            <textarea class="form-control" id="bio" rows="6"></textarea>
            <label for="last-degree">Pendidikan Terakhir</label>
            <textarea class="form-control" id="last-degree" rows="6"></textarea>
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

          </div>

        </div>
        <button type="submit" class="btn btn-primary btn-round w-100" name="button" style="margin:30px 0 0 0; width:100%;">Simpan</button>
      </form>

    </div>
  </div>
</div>

@endsection
