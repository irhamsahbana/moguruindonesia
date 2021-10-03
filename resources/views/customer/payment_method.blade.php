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
            <span class="nav-title">Pembayaran</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="nav-link-number">5</span>
            <span class="nav-title">Pembayaran Berhasil</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="card card-body rounded-corner">
      <h3>Metode Pembayaran</h3>
      <form class="custom-control-stacked" action="index.html" method="post">
        <div class="accordion accordion-connected" id="faq-security">
          <div class="card">
            <h5 class="card-title">
              <a data-toggle="collapse" data-parent="#faq-security" href="#question-security-1" aria-expanded="false" class="collapsed">Bank 1</a>
            </h5>
            <input type="radio" class="radio-btn" id="crs-1" name="rg-5">

            <div id="question-security-1" class="collapse" aria-expanded="false">
              <div class="card-body pl-50">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
              </div>
            </div>
          </div>

          <div class="card">
            <h5 class="card-title">
              <a data-toggle="collapse" data-parent="#faq-security" href="#question-security-2" aria-expanded="false" class="collapsed">Bank 2</a>
            </h5>
            <input type="radio" class="radio-btn" id="crs-2" name="rg-5">

            <div id="question-security-2" class="collapse" aria-expanded="false">
              <div class="card-body pl-50">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-round w-100" name="button">Selanjutnya</button>
      </form>
    </div>

  </div>

</div>

@endsection
