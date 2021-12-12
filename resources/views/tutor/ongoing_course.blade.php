@extends('root.root_tutor_layout')

@section('content')
  <div class="container">
    <div class="profile-section" style="padding-top:0;">
      <div class="card rounded-corner">
        <div class="media-list media-list-divided media-list-hover">
          @foreach ($acceptedOrders as $ao)
            <div class="media">
              <a class="avatar avatar-lg status-success" href="#">
                <img src="{{ asset('assets/img') }}/account.png" alt="...">
              </a>
              <div class="media-body">
                <p>
                  <a class="hover-primary" href="#"><strong>{{ "$ao->first_name $ao->last_name" }}</strong></a>
                  <small class="sidetitle">{{ $ao->start_date }}</small>
                </p>
                <div class="preview-info">
                  <p>Kursus: <strong>{{ $ao->subject_name }}</strong> </p>
                  <p>Jumlah Pertemuan: <strong>{{ $ao->num_meets }}</strong></p>
                  <p>Metode Pembelajaran: <strong>{{ $ao->learning_method }}</strong></p>

                </div>
              </div>
              <div class="action">
                <a href="{{ route('dashboard.tutor.course.detail', $ao->unique_code) }}" role="button"
                  style="color:#48b0f7;">Lihat Detail</a>
              </div>
            </div>
          @endforeach

          @if(count($acceptedOrders) < 1)
            <div class="media">
              <div class="media-body">
                <p>Tidak ada kursus yang sedang berjalan.</p>
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
