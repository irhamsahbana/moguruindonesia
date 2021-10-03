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
          <a class="nav-link" href="#">
            <span class="nav-link-number"><i class="ti-check"></i></span>
            <span class="nav-title">Metode Pembayaran</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="nav-link-number">3</span>
            <span class="nav-title">Ringkasan dan Checkout</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="nav-link-number">4</span>
            <span class="nav-title">Menunggu Konfirmasi Tutor</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="nav-link-number">5</span>
            <span class="nav-title">Pembayaran</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="card card-body rounded-corner">
      <h3>Pembayaran</h3>
      <div class="row" style="border-bottom:#8b95a5 solid 1px;">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <p>Nomor Transaksi:</p>
          <h6>#098699</h6>
          <p>Kursus:</p>
          <h6>Matematika - SMA</h6>
          <p>Nama Pemesan:</p>
          <h6>Hamka Hamzah</h6>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <p>Bayar dalam: </p>
          <h6>23:00:00</h6>
          <p>Metode Pembayaran</p>
          <div class="accordion accordion-connected" id="faq-security">
            <div class="card">
              <h5 class="card-title" style="margin:0; padding:0;">
                <a data-toggle="collapse" data-parent="#faq-security" href="#question-security-1" aria-expanded="false" class="collapsed">Bank 1</a>
              </h5>

              <div id="question-security-1" class="collapse" aria-expanded="false">
                <div class="card-body pl-50">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <h5 style="margin: 30px 0 0 0; text-align: center;">Total Bayar: Rp. 120.000</h5>
      <button type="submit" class="btn btn-primary btn-round w-100" name="button">Sudah Bayar</button>
    </div>

  </div>

</div>

@endsection
