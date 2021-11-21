@extends('root.root_tutor_layout')

@section('content')
  <div class="container">
    <div class="profile-section" style="padding-top:0;">
      <div class="card rounded-corner">
        <div class="media-list media-list-divided media-list-hover">
          @foreach ($waitingOrders as $wo)
            <div class="media">
              <a class="avatar avatar-lg status-success" href="#">
                <img src="{{ asset('assets/img') }}/account.png" alt="...">
              </a>
              <div class="media-body">
                <p>
                  <a class="hover-primary" href="#"><strong>{{ "$wo->first_name $wo->last_name" }}</strong></a>
                  <small class="sidetitle">{{ $wo->start_date }}</small>
                </p>
                <div class="preview-info">
                  <p>Kursus: <strong>{{ $wo->subject_name }}</strong> </p>
                  <p>Jumlah Pertemuan: <strong>{{ $wo->num_meets }}</strong></p>
                  <p>Metode Pembelajaran: <strong>{{ $wo->learning_method }}</strong></p>
                  <p><a href="#" style="color:#48b0f7;">Selengkapnya...</a></p>

                </div>
              </div>
              <div class="action">
                <a href="#" class="" data-toggle="modal" data-target="#modal-reject{{ $wo->id }}"
                  name="button">TOLAK</a>
                <button type="button" class="btn btn-info rounded-corner2" data-toggle="modal"
                  data-target="#modal-accept{{ $wo->id }}" name="button">AMBIL</button>

                <!-- MODAL 1 -->
                <div class="modal fade" id="modal-accept{{ $wo->id }}" tabindex="-1" style="display: none;"
                  aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Modal title</h4>
                        <button type="button" class="close" data-dismiss="modal">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Anda yakin mengambil kursus ini?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-bold btn-pure btn-secondary"
                          data-dismiss="modal">Batal</button>
                        <form action="{{ route('dashboard.tutor.course.request.accept', $wo->unique_code) }}"
                          method="POST">
                          @method('PUT')
                          @csrf
                          <button type="submit" class="btn btn-bold btn-pure btn-primary">Ambil</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- MODAL 2 -->
                <div class="modal fade" id="modal-reject{{ $wo->id }}" tabindex="-1" style="display: none;"
                  aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Modal title</h4>
                        <button type="button" class="close" data-dismiss="modal">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Anda yakin menolak kursus ini?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-bold btn-pure btn-secondary"
                          data-dismiss="modal">Tidak</button>

                        <button type="button" class="btn btn-bold btn-pure btn-primary">Ya</button>

                      </div>
                    </div>
                  </div>
                </div>
                <!-- END OF MODAL -->
              </div>
            </div>
          @endforeach
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
