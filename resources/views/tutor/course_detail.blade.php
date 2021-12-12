@extends('root.root_tutor_layout')

@section('content')
  <div class="container">
    <div class="profile-section" style="padding-top:0;">
      <div class="card card-body rounded-corner">
        <h4>Detail Kursus</h4>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <table>
              <tr>
                <td>Nama Pemesan </td>
                <td> <strong>: {{ $order->customer_name }}</strong> </td>
              </tr>
              <tr>
                <td>Alamat </td>
                <td> <strong>: {{ $order->address }}</strong></td>
              </tr>
              <tr>
                <td>Nomor Handphone </td>
                <td> <strong>: {{ $order->phone }}</strong> </td>
              </tr>
              <tr>
                <td>Lainnya </td>
                <td> <strong>: {{ $order->additional_infromation }}</strong> </td>
              </tr>
            </table>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <table>
              <tr>
                <td>Kursus </td>
                <td> <strong>: {{ $order->subject->subject_name }}</strong> </td>
              </tr>
              <tr>
                <td>Metode Pembelajaran </td>
                <td> <strong>: {{ $order->learning_method }}</strong></td>
              </tr>
              <tr>
                <td>Jumlah Murid </td>
                <td> <strong>: {{ $order->num_people }} orang</strong> </td>
              </tr>
              <tr>
                <td>Jumlah Pertemuan </td>
                <td> <strong>: {{ $order->num_meets }} kali</strong> </td>
              </tr>
            </table>
          </div>
          {{-- <div class="confirm-btn">
          <a href="#" class="btn btn-flat" data-toggle="modal" data-target="#modal-small2" name="button">TOLAK</a>
          <button type="button" class="btn btn-primary rounded-corner2" data-toggle="modal" data-target="#modal-small" name="button">AMBIL</button>

          <!-- MODAL 1 -->
          <div class="modal fade" id="modal-small" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Anda yakin mengambil kursus ini?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-bold btn-pure btn-info">Ambil</button>
                </div>
              </div>
            </div>
          </div>

          <!-- MODAL 2 -->
          <div class="modal fade" id="modal-small2" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Anda yakin menolak kursus ini?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Tidak</button>
                  <button type="button" class="btn btn-bold btn-pure btn-primary">Ya</button>
                </div>
              </div>
            </div>
          </div>
          <!-- END OF MODAL -->

        </div> --}}
        </div>

        @if ($order->status == 'accepted')
          <br>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>

@endsection
