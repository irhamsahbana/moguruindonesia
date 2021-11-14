@extends('root.root_customer_layout')

@section('content')
  <div class="page-container">
    <div class="container">
      <div class="progress-bar-section">
        <ul class="nav nav-process nav-process-box">
          <li class="nav-item complete">
            <a class="nav-link" href="#">
              <span class="nav-link-number">1</span>
              <span class="nav-title">Permintaan Kursus</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-number">2</span>
              <span class="nav-title">Ringkasan dan Checkout</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-number">3</span>
              <span class="nav-title">Reservasi Berhasil</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="card card-body rounded-corner form-type-round">
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form class="form-group" action="{{ route('direct.order.request.post', $tutor->slug) }}" method="post">
          @csrf
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h3>Permintaan Kursus</h3>
              <label class="require" for="subject_id">Kursus</label>
              <select class="form-control" id="subject_id" name="subject_id">
                <option value="">Pilih Kursus</option>
                @foreach($tutorSubjects as $tutorSubject)
                  <option value="{{ $tutorSubject->subject_id }}" {{ old('subject_id') == $tutorSubject->subject_id ? "selected":"" }}>{{ $tutorSubject->subject_name }}</option>
                @endforeach
              </select>
              <label class="require" for="learning_method">Metode Belajar</label>
              <select class="form-control" id="learning_method" name="learning_method">
                <option value="offline">Offline (Dirumah pelajar)</option>
                <option value="online">Online</option>
              </select>
              <label class="require" for="num_meets">Jumlah Pertemuan</label>
              <select class="form-control" id="num_meets" name="num_meets">
                <option value="4" selected>4 Kali</option>
                <option value="6">6 Kali</option>
                <option value="8">8 Kali</option>
                <option value="12">12 Kali</option>
              </select>
              <label class="require" for="num_people">Jumlah Murid</label>
              <select class="form-control" id="num_people" name="num_people">
                <option selected value="1">1 Orang</option>
                <option value="2">2 Orang</option>
                <option value="3">3 Orang</option>
                <option value="4">4 Orang</option>
                <option value="5">5 Orang</option>
              </select>
              <label class="require" for="start_date">Tanggal Kursus Pertama</label>
              <input type="text" class="form-control" data-provide="datepicker" data-date-today-highlight="true" id="start_date" name="start_date">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h3>Informasi Pemesan</h3>
              <label class="require" for="customer_name">Nama Lengkap</label>
              <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Nama Lengkap"
                value="{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}">
              <label class="require" for="address">Alamat Belajar</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Alamat tempat belajar"
                value="{{ Auth::user()->address }}">
              <label class="require" for="phone">Nomor Handphone</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Nomor yang bisa di hubungi"
                value="{{ Auth::user()->phone }}">
              <label for="other">Keterangan kursus</label>
              <input type="text" class="form-control" id="additional_information" name="additional_information" placeholder="Contoh: mempunyai keterbatasan dalam ...">

              <div class="fee-estimation">
                <h5 style="margin:30px 0 0 0; text-align:center;">Estimasi Biaya</h5>
                <h1 style="margin:30px 0 0 0; text-align:center;">Rp. <span
                    id="total_price">{{ number_format($tutor->fee_per_session * 4) }}</span></h1>
              </div>

            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-round w-100"
            style="margin:30px 0 0 0; width:100%;">Selanjutnya</button>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {

      function numberWithCommas(x) {
        return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",")
      }

      function calculatePrice() {
        let numMeets = parseInt($('#num_meets').val())
        let numPeople = parseInt($('#num_people').val())
        let price = $('#total_price');
        let totalPrice
        if(numPeople > 1){
          let addtionalPerson = numPeople - 1
          totalPrice = numMeets * {{ $tutor->fee_per_session }} + (addtionalPerson * 100000)
        } else {
          totalPrice = numMeets * {{ $tutor->fee_per_session }}
        }
        price.text(numberWithCommas(totalPrice))
      }

      $('#num_meets').change(function() {
        calculatePrice()
      })

      $('#num_people').change(function() {
        calculatePrice()
      })

    });
  </script>
@endpush
