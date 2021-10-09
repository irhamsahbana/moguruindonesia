@extends('root.root_customer_layout')

@section('content')

<div class="page-container bg-white">
  <div class="container">
    <div class="inner-container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="tagline">
            <h1>Maaf, token anda tidak valid!</h1>
            <h4>Silahkan periksa kembali email atau kirim kembali email untuk memverifikasi diri anda.</h4>
            <!-- <div class="search-container">

            </div> -->
            <form action="{{ route('verification.send') }}">
              <button type="submit" class="btn btn-primary btn-round w-100" name="button" style="margin:30px 0 0 0; width:100%;">Kirim kembali email verifikasi</button>
            </form>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="image-container">
            <img src="{{ asset('assets/img') }}/mobile devices.png" alt="Loomies">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    app.toast('A basic toast using Javascript. It stays for 4 seconds.');
    }
  )

</script>
@endsection
