@extends('root.root_tutor_layout')

@section('content')
  <div class="container">
    <div class="profile-section" style="padding-top:0;">
      <div class="card rounded-corner">
        <div class="media-list media-list-divided media-list-hover">

          @foreach ($completedOrders as $co)
            <div class="media">
              <a class="avatar avatar-lg status-success" href="#">
                <img src="{{ asset('assets/img') }}/account.png" alt="...">
              </a>
              <div class="media-body">
                <p>
                  <a class="hover-primary" href="#"><strong>{{ "$co->first_name $co->last_name" }}</strong></a>
                  <small class="sidetitle">{{ $co->start_date }}</small>
                </p>
                <div class="preview-info">
                  <p>Kursus: <strong>{{ $co->subject_name }}</strong> </p>
                  <p>Jumlah Pertemuan: <strong>{{ $co->num_meets }}</strong></p>
                  <p>Metode Pembelajaran: <strong>{{ $co->learning_method }}</strong></p>

                </div>
              </div>
              <div class="action">
                <button type="button" class="btn btn-secondary rounded-corner2" data-toggle="modal"
                  data-target="#modal-small" name="button" disabled>SELESAI</button>
                <!-- <button type="button" class="btn btn-info rounded-corner2" data-toggle="modal" data-target="#modal-small" name="button">KLAIM</button> -->
              </div>
            </div>
          @endforeach

          @if (count($completedOrders) < 1)
            <div class="media">
              <div class="media-body">
                <p>Tidak ada riwayat kursus yang selesai.</p>
              </div>
            </div>
          @endif
        </div>


        {{-- <nav class="mt-3">
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
        </nav> --}}
      </div>
    </div>
  </div>

@endsection
