@extends('root.root_customer_layout')

@section('content')
<div class="page-container">
  <div class="container">
    <div class="progress-bar-section">
      <ul class="nav nav-process nav-process-box">
        <li class="nav-item complete">
          <a class="nav-link" href="#">
            <span class="nav-link-number"><i class="ti-check"></i></span>
            <span class="nav-title">Permintaan Kursus</span>
          </a>
        </li>

        <li class="nav-item complete">
          <a class="nav-link" class="ti-check">
            <span class="nav-link-number ">2</span>
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

    <div class="card card-body rounded-corner">
      @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
      <h3>Checkout</h3>
      <p>Nomor Transaksi: {{ $no_trans = \Str::random(6) }} </p>
      <div class="row" style="border-bottom:#8b95a5 solid 1px;">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <p>Kursus:</p>
          <h6>{{ $subject_name }}</h6>
          <p>Metode Pembelajaran:</p>
          <h6>{{ old('learning_method') }}</h6>
          <p>Jumlah Murid: </p>
          <h6>{{ old('num_people') }}</h6>
          <p>Jumlah Pertemuan: </p>
          <h6>{{ old('num_meets') }}</h6>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <p>Nama Pemesan:</p>
          <h6>{{ old('customer_name') }}</h6>
          <p>Alamat: </p>
          <h6>{{ old('address') }}</h6>
          <p>Nomor Handphone: </p>
          <h6>{{ old('phone') }}</h6>
          <p>Lainnya: </p>
          <h6>{{ old('additional_information') }}</h6>
        </div>
      </div>

      <h5 style="margin: 30px 0 0 0; text-align: center;">Total Bayar: Rp. {{ number_format(old('fee')) }}</h5>
      <form action ={{ route('direct.order.confirm', $slug) }} method="POST">
        <button type="submit" class="btn btn-primary btn-round w-100">Konfirmasi</button>
        @csrf
        <input type="hidden" name="unique_code" value="{{ $no_trans }}">
        <input type="hidden" name="start_date" value="{{ old('start_date') }}" readonly>
        <input type="hidden" name="tutor_id" value="{{ old('tutor_id') }}" readonly>
        <input type="hidden" name="subject_id" value="{{ old('subject_id') }}" readonly>
        <input type="hidden" name="learning_method" value="{{ old('learning_method') }}" readonly>
        <input type="hidden" name="num_people" value="{{ old('num_people') }}" readonly>
        <input type="hidden" name="num_meets" value="{{ old('num_meets') }}" readonly>
        {{-- <input type="hidden" name="fee" value="{{ old('fee') }}" readonly> --}}
        <input type="hidden" name="customer_name" value="{{ old('customer_name') }}" readonly>
        <input type="hidden" name="address" value="{{ old('address') }}" readonly>
        <input type="hidden" name="phone" value="{{ old('phone') }}" readonly>
        <input type="hidden" name="additional_information" value="{{ old('additional_information') }}" readonly>
      </form>
    </div>

  </div>

</div>

@endsection
