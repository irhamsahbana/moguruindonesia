@extends('root.root_tutor_layout')

@section('content')
<div class="container">
  <div class="profile-section" style="padding-top:0;">
    <div class="card card-body rounded-corner">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <table>
            <tr>
              <td>Nama Pemesan </td>
              <td> <strong>: Hamka Hamzah</strong> </td>
            </tr>
            <tr>
              <td>Alamat </td>
              <td> <strong>: Jalan aja tapi gak jadian</strong></td>
            </tr>
            <tr>
              <td>Nomor Handphone </td>
              <td> <strong>: 08454326543</strong> </td>
            </tr>
            <tr>
              <td>Lainnya </td>
              <td> <strong>: Tidak ada</strong> </td>
            </tr>
          </table>


        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <table>
            <tr>
              <td>Kursus </td>
              <td> <strong>: Matematika - SMA</strong> </td>
            </tr>
            <tr>
              <td>Metode Pembelajaran </td>
              <td> <strong>: Offline (dirumah)</strong></td>
            </tr>
            <tr>
              <td>Jumlah Murid </td>
              <td> <strong>: 3 orang</strong> </td>
            </tr>
            <tr>
              <td>Jumlah Pertemuan </td>
              <td> <strong>: 8 kali</strong> </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="card card-body rounded-corner">
      <div class="absen">
        <div class="absen-list">
          <h5>Pertemuan 1</h5>
          <p>Status: <span style="color: #63cabb;">Belum Terlaksana</span></p>
          <p>Tanggal: 20-10-2021</p>
          <button type="button" class="btn btn-info rounded-corner2" data-toggle="modal" data-target="#exampleModal">
            Isi Absensi
          </button>

        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Isi absensi untuk hari ini</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body form-type-round">
            <form class="form-group" action="index.html" method="post">
              <label for="date">Tanggal Pertemuan</label>
              <input type="text" class="form-control" data-provide="datepicker" placeholder="Pilih sesuai tanggal hari ini" id="date">
              <label for="desc">Ulasan/label>
              <input class="form-control" type="text" name="" value="" placeholder="Ulasan anda untuk hari ini" id="desc">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary rounded-corner2" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info rounded-corner2">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
