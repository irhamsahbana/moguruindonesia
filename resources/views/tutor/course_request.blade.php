@extends('root.root_tutor_layout')

@section('content')
<div class="container">
  <div class="profile-section" style="padding-top:0;">
    <div class="card">
      <div class="media-list media-list-divided media-list-hover">

        <div class="media">
          <a class="avatar avatar-lg status-success" href="#">
            <img src="{{ asset('assets/img') }}/account.png" alt="...">
          </a>
          <div class="media-body">
            <p>
              <a class="hover-primary" href="#"><strong>Bambang Pamungkas</strong></a>
              <small class="sidetitle">23-10-2021</small>
            </p>
            <div class="preview-info">
              <p>Kursus: <strong>Matematika</strong> </p>
              <p>Jumlah Pertemuan: <strong>4</strong></p>
              <p>Metode Pembelajaran: <strong>Dirumah</strong></p>
              <p><a href="#" style="color:#48b0f7;">Selengkapnya...</a></p>

            </div>
          </div>
          <div class="action">
            <a href="#" class="more-detail">Tolak</a>
            <button type="button" class="btn btn-xs btn-primary btn-round" name="button">Ambil</button>

          </div>
        </div>
        <div class="media">
          <a class="avatar avatar-lg status-success" href="#">
            <img src="{{ asset('assets/img') }}/account.png" alt="...">
          </a>
          <div class="media-body">
            <p>
              <a class="hover-primary" href="#"><strong>Bambang Pamungkas</strong></a>
              <small class="sidetitle">23-10-2021</small>
            </p>
            <div class="preview-info">
              <p>Kursus: <strong>Matematika</strong> </p>
              <p>Jumlah Pertemuan: <strong>4</strong></p>
              <p>Metode Pembelajaran: <strong>Dirumah</strong></p>
              <p><a href="#" style="color:#48b0f7;">Selengkapnya...</a></p>

            </div>
          </div>
          <div class="action">
            <a href="#" class="more-detail">Tolak</a>
            <button type="button" class="btn btn-xs btn-primary btn-round" name="button">Ambil</button>

          </div>
        </div>
        <div class="media">
          <a class="avatar avatar-lg status-success" href="#">
            <img src="{{ asset('assets/img') }}/account.png" alt="...">
          </a>
          <div class="media-body">
            <p>
              <a class="hover-primary" href="#"><strong>Bambang Pamungkas</strong></a>
              <small class="sidetitle">23-10-2021</small>
            </p>
            <div class="preview-info">
              <p>Kursus: <strong>Matematika</strong> </p>
              <p>Jumlah Pertemuan: <strong>4</strong></p>
              <p>Metode Pembelajaran: <strong>Dirumah</strong></p>
              <p><a href="#" style="color:#48b0f7;">Selengkapnya...</a></p>

            </div>
          </div>
          <div class="action">
            <a href="#" class="more-detail">Tolak</a>
            <button type="button" class="btn btn-xs btn-primary btn-round" name="button">Ambil</button>

          </div>
        </div>

      </div>


      <nav class="mt-3">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#">
              <span class="ti-arrow-left"></span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <a class="page-link" href="#">
              <span class="ti-arrow-right"></span>
            </a>
          </li>
        </ul>
      </nav>

    </div>
  </div>
</div>

@endsection
