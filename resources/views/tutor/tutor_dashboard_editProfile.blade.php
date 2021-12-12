@extends('root.root_tutor_layout')

@section('content')
<div class="container">
  <div class="profile-section" style="padding-top:0;">
    <div class="card card-body rounded-corner">
      <form class="form-group form-type-round" action="{{ route('dashboard.tutor.profile-update') }}"style="width:100%;" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="profile-pict" style="width:100%;">
              <img class="rounded-corner" src="{{ asset('assets/img') }}/no-photo.png" alt="">
              <div class="file-group file-group-inline" style="margin-left:auto; margin-right:auto; margin-top:20px; width:100%;">
                <button class="btn btn-info btn-round file-browser" style="width:100%;" type="button">Ganti Foto</button>
                <input type="file" name="avatar">
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <label for="first_name">Nama Depan</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $basicProfile->first_name }}" placeholder="Nama Depan">
            <label for="last_name">Nama Belakang</label>
            <input type="text" class="form-control" id="last_name" name="last_name"value="{{ $basicProfile->last_name }}" placeholder="Nama Belakang">
            <label for="phone">Nomor Hp</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $basicProfile->phone }}" placeholder="Nomor Hp">
            <label for="address">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="address" value="{{ $basicProfile->address }}" placeholder="Alamat">
           {{--  <label for="city">Kota</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Kota"> --}}
            <label for="bank_account_number">Nomor Rekening</label>
            <input type="text" class="form-control" id="bank_account_number" name="bank_account_number" value="{{ $tutorProfile->bank_account_number }}" placeholder="Rekening Anda">
            <label for="bank_name">Nama Bank</label>
            <input type="text" class="form-control" id="bank_name" name="bank_name" value="{{ $tutorProfile->bank_name }}" placeholder="Nama Bank">
            <label for="bank_owner">Pemilik Rekening</label>
            <input type="text" class="form-control" id="bank_owner" name="bank_owner" value="{{ $tutorProfile->bank_owner }}" placeholder="Pemilik Rekening">
            <label for="fee_per_session">Tarif</label>
            <input type="text" class="form-control" id="rate" name="rate" value="{{ $tutorProfile->fee_per_session }}" placeholder="Tarif per sesi">
          </div>

          <div class="col-lg-5 col-md-5 col-sm-12">

            <label for="bio">Bio</label>
            <textarea class="form-control" id="bio" rows="6"> {{ $tutorProfile->bio }} </textarea>
            <label for="last-degree">Pendidikan Terakhir</label>
            <textarea class="form-control" id="last-degree" rows="6"> {{ $tutorProfile->last_degree_desc }} </textarea>
            {{-- <label for="">Upload KTP anda</label>
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
            </div> --}}

          </div>

        </div>
        <button type="submit" class="btn btn-primary btn-round w-100" name="button" style="margin:30px 0 0 0; width:100%;">Simpan</button>
      </form>

    </div>
  </div>
</div>

@endsection
