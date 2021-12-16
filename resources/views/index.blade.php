@extends('root.root_index_layout')

@section('content')

  <div class="page-container">
    <div class="home">
      <div class="container">
        <div class="inner-container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="tagline">
                  <h1>Temukan Tutor Kursus di Sekitar Anda</h1>
                  <!-- <h4>Tersedia metode pembelajaran secara offline maupun online sesuai kebutuhan anda</h4> -->

                  <div class="search-container">
                    <form class="lookup lookup-right search-bar" action="index.html" method="post">
                      <input class="search-input" type="text" name="" value="" placeholder="lokasi anda"
                      style="width:40%; height:70px; border-radius: 50px;">
                      <input class="search-input" type="text" name="" value="" placeholder="Kursus"
                      style="width:60%; height:70px; border-radius: 50px;">
                      <button class="search-btn" type="button" name="button"> <img
                        src="{{ asset('assets/img') }}/icon/loupe.png" alt=""> </button>
                  </form>
                </div>

              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="image-container">
                <img src="{{ asset('assets/img') }}/Loomies-illustrations/Scenes/2x/web development _ girl, person, window, layout, webpage, website, analytics, statistics, dashboard@2x.png" alt="Loomies">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="about" >
      <div class="container" style="background-color: #57b0f7; border-radius: 10px; box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
        <div class="inner-container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="tagline" style="padding-top: 20px;">
                <h1 style="color: white; padding-left: 20px;">Tentang Kami</h1>
                <h4 style="color: white; padding-left: 20px;">Moguru adalah wadah untuk menemukan teman belajar atau yang kami sebut sebagai Tutor yang sesuai dengan keinginan calon murid diluar dari metode belajar pendidikan formal serta dapat mengembangkan keahlian para calon murid. Moguru hadir dalam bentuk yang berbeda. Moguru memungkinkan tersedianya ratusan Tutor sebagai teman belajar yang dapat terhubung dengan ratusan hingga ribuan calon murid di seluruh Indonesa dengan system belajar online maupun offline sesuai dengan keinginan calon murid.</h4>

                

              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="image-container">
                <img src="{{ asset('assets/img') }}/workspace _man1.png" alt="Loomies">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
      <h1 style="font-weight:bold; padding-top: 50px; text-align: center;">Layanan Kami</h1>
        <div class="inner-container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="tagline">
                <div class="mini-card" style="background-color: white;">
                  <h3 style="font-weight: bold;"> 1. Bebas Memilih Tutor</h3>
                  <h4> <strong>Anda bebas memilih tutor sesuai dengan keinginan dan kebutuhan anda. Tutor kami tersebar di seluruh wilayah Indonesia. </strong> </h4>
                </div>

              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="image-container">
              <img src="{{ asset('assets/img') }}/Loomies-illustrations/Scenes/2x/communication _ man, guy, person, table, stool, chair, laptop, computer, conversation, chat@2x.png" alt="Loomies">
              </div>
            </div>
          </div>
        </div>

        <div class="inner-container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="image-container">
              
              <img src="{{ asset('assets/img') }}/Loomies-illustrations/Scenes/2x/workspace _ woman, girl, person, coffee shop, window, table, laptop, computer, coffee@2x.png" alt="Loomies">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="tagline">
                <div class="mini-card" style="background-color: #57b0f7;">
                  <h3 style="color: white; font-weight: bold;"> 2. Bebas Tentukan Jadwal Sendiri</h3>
                  <h4 style="color: white;"> <strong> Bebas menentukan jadwal yang anda inginkan, asalkan sesuai dengan kesepakatan antara anda dan tutor ya. </strong> </h4>
                </div>
                

              </div>
            </div>
          </div>
        </div>

        <div class="inner-container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="tagline">
                <div class="mini-card" style="background-color: white;">
                  <h3 style="font-weight: bold;"> 3. Bisa Online dan Offline</h3>
                  <h4> <strong>Anda bisa memilih metode pembelajaran sesuai keinginan anda, mau online atau offline semua bisa </strong> </h4>
                </div>

              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="image-container">
              
              <img src="{{ asset('assets/img') }}/Loomies-illustrations/Scenes/2x/workspace _ woman, girl, person, laptop, computer, home@2x.png" alt="Loomies">
              </div>
            </div>
          </div>
        </div>

        <div class="inner-container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="image-container">
              
              <img src="{{ asset('assets/img') }}/Loomies-illustrations/Scenes/2x/workflow _ woman, man, person, computer, laptop, couple, friends@2x.png" alt="Loomies">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="tagline" >
                <div class="mini-card" style="background-color: #57b0f7;">
                  <h3 style="color: white; font-weight: bold;"> 4. Masih Bingung Pilih Tutor? <br> Tenang, Kami Bantu Anda Mendapatkan Tutor</h3>
                  <h4 style="color: white;"> <strong> Anda kebingungan memilih tutor yang tepat? Jangan khawatir, karena kami akan membantu anda menemukan tutor yang tepat dengan fitur ORDERAN TERBUKA </strong> </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimoni">
      <div class="container">
      <h1 style="font-weight:bold; padding-top: 50px; text-align: center;">Testimoni</h1>
        <div class="inner-container">
          <div class="swiper-container swiper-pagination-outside swiper-container-horizontal" data-provide="swiper" data-slides-per-view="3" data-space-between="8">
            <div class="swiper-wrapper" style="transform: translate3d(-1014px, 0px, 0px); transition-duration: 0ms;">

              <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 330px; margin-right: 8px;">
                <img src="{{ asset('assets/img') }}/testimoni/testimoni1.jpg" alt="testimoni 3">
              </div>

              <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 330px; margin-right: 8px;">
                <img src="{{ asset('assets/img') }}/testimoni/testimoni2.jpg" alt="testimoni 3">
              </div>

              <div class="swiper-slide" data-swiper-slide-index="2" style="width: 330px; margin-right: 8px;">
                <img src="{{ asset('assets/img') }}/testimoni/testimoni3.jpg" alt="testimoni 3">
              </div>

              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 330px; margin-right: 8px;">
                <img src="{{ asset('assets/img') }}/testimoni/testimoni1.jpg" alt="testimoni 1">
              </div>
              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 330px; margin-right: 8px;">
                <img src="{{ asset('assets/img') }}/testimoni/testimoni2.jpg" alt="testimoni 1">
              </div>
              <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 330px; margin-right: 8px;">
                <img src="{{ asset('assets/img') }}/testimoni/testimoni3.jpg" alt="testimoni 3">
              </div>
            </div>

            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
          </div>
          
        </div>
      </div>
    </div>

    <div class="contact" style="margin-bottom: 50px;">
      <div class="container" style="background-color: #57b0f7; border-radius: 10px; box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
        <h1 style="color: white; font-weight:bold; padding-top: 50px; text-align: center;">Kontak Kami</h1>
          <div class="inner-contect" style="padding-bottom: 50px; padding-left:30px; padding-right: 30px; padding-top:30px;">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-12">
                <h4 style="color: white; text-align: center;"> <i class="ion-android-mail" style="font-size: 25pt; font-weight:bolder;"></i> moguruindonesia@gmail.com </h4>
      
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12">
                <h4 style="color: white; text-align: center;"> <i class="ion-social-whatsapp-outline" style="font-size: 25pt; font-weight:bold;"></i> <br> 085158884204</h4>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12">
                <a href="https://www.instagram.com/moguruindonesia/"><h4 style="color: white; text-align: center;">  <i class="ion-social-instagram-outline" style="font-size: 25pt; font-weight:bold;"></i> <br>@moguruindonesia </h4> </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12">
                <a href="https://www.facebook.com/Moguru-Indonesia-103012628424882"><h4 style="color: white; text-align: center;"><i class="ion-social-facebook" style="font-size: 25pt; font-weight:bolder;"></i> <br> Moguru Indonesia</h4> </a>
              </div>
            </div>
          </div>
          
      </div>
    </div>

  </div>

@endsection
