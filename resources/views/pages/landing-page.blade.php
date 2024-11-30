@extends('layouts.master')

@section('content')
  <!-- banner section -->
  <section class="banner-section banner-section__home-two banner-section__home-three">
    <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel"
      data-options='{"loop": true, "items": 1, "margin": 0, "dots": false, "nav": true, "animateOut": "fadeOut", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 20000, "autoplayHoverPause": false}'>
      <!-- Slide Item -->
      <div class="slide-item">
        <div class="image-layer lazy-image"
          style="
                background-image: url('assets/img/landing-page/banner-1.png');
              ">
        </div>
        <div class="container">
          <div class="content-box text-left">
            <h3>HBIM Jakarta</h3>
            <h2>
              <i>
                Heritage Building Information <br />
                Modelling
              </i>
            </h2>
            <div class="btn-box">
              <a href="#about">
                <button onclick="banner_1()" class="thm-btn btn-style-one">Selengkapnya <i class="fa-solid fa-arrow-right"
                    style="margin-left: 5px; margin-top: 5px"></i></button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide Item -->
      <div class="slide-item">
        <div class="image-layer lazy-image"
          style="
                background-image: url('assets/img/landing-page/banner-2.webp');
              ">
        </div>
        <div class="container">
          <div class="content-box text-left">
            <h3>3D & Laser Scanner</h3>
            <h2>
              Pemindaian 3D Menggunakan Teknologi <i>Laser Scanner</i>
            </h2>
            <div class="btn-box">
              <a href="#about">
                <button onclick="banner_2()" class="thm-btn btn-style-one">Selengkapnya <i class="fa-solid fa-arrow-right"
                    style="margin-left: 5px; margin-top: 5px"></i></button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide Item -->
      <div class="slide-item">
        <div class="image-layer lazy-image"
          style="
                background-image: url('assets/img/landing-page/banner-landing.webp');
              ">
        </div>
        <div class="container">
          <div class="content-box text-left">
            <h3><i>Point Cloud</i>
              Representasi Data 3D
            </h3>
            <h2>
              Kumpulan titik dalam ruang 3D yang merepresentasikan objek fisik.
            </h2>
            <div class="btn-box">
              <a href="#about">
                <button onclick="banner_3()" class="thm-btn btn-style-one">Selengkapnya <i class="fa-solid fa-arrow-right"
                    style="margin-left: 5px; margin-top: 5px"></i></button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end banner section -->

  <section class="about-three" id="about">
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-lg-6">
          <div class="about-three__image clearfix">
            <img id="imgs" src="{{ asset('assets/img/landing-page/about-1.webp') }}" alt="" />
          </div>
          <!-- /.about-three__image -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6 d-flex" style="background-color: white !important">
          <div class="my-auto">
            <div class="about-three__content" style="text-align: justify">
              <div class="block-title">
                <p>Tentang Kami</p>
                <h3 id="header">HBIM Jakarta</h3>
              </div>
              <!-- /.block-title -->
              <p class="about-three__highlight" id="text_1">
                <i>Heritage Building Information Modelling (HBIM)</i> Jakarta
                adalah sistem terintegrasi pendokumentasian
                bangunan-bangunan cagar budaya yang berada di lingkup
                wilayah DKI Jakarta dengan menggunakan teknologi berbasis
                digital.
              </p>
              <p id="text_2">
                Menyadari pentingnya pelestarian warisan budaya, tidak hanya
                untuk melindungi aspek fisik tetapi juga nilai penting yang
                dikandung, Dinas Kebudayaan DKI Jakarta sejak tahun 2022
                mengaplikasikan HBIM dalam upaya pelestarian warisan budaya,
                khususnya pada bangunan dan struktur cagar budaya. Melalui
                sistem terintegrasi ini diharapkan dapat terwujud bentuk
                pengelolaan warisan budaya yang menyeluruh sekaligus membuka
                layanan akses informasi kepada publik dengan tampilan yang
                menarik dan informatif.
              </p>
            </div>
            <!-- /.about-three__content -->
          </div>
          <!-- /.my-auto -->
        </div>
        <!-- /.col-lg-6 -->
      </div>
      <!-- /.row no-gutters -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.about-three -->

  {{-- Banner 1 --}}
  <script>
    function banner_1() {
      var header = document.getElementById("header");
      header.innerHTML = 'HBIM Jakarta';

      var text_1 = document.getElementById("text_1");
      text_1.innerHTML =
        '<i>Heritage Building Information Modelling (HBIM)</i> Jakarta adalah sistem terintegrasi pendokumentasian bangunan-bangunan cagar budaya yang berada di lingkup wilayah DKI Jakarta dengan menggunakan teknologi berbasis digital. ';

      var text_2 = document.getElementById("text_2");
      text_2.innerHTML =
        'Menyadari pentingnya pelestarian warisan budaya, tidak hanya untuk melindungi aspek fisik tetapi juga nilai penting yang dikandung, Dinas Kebudayaan DKI Jakarta sejak tahun 2022 mengaplikasikan HBIM dalam upaya pelestarian warisan budaya, khususnya pada bangunan dan struktur cagar budaya. Melalui sistem terintegrasi ini diharapkan dapat terwujud bentuk pengelolaan warisan budaya yang menyeluruh sekaligus membuka layanan akses informasi kepada publik dengan tampilan yang menarik dan informatif. ';

      var imgs = document.getElementById("imgs");
      imgs.src = "{{ asset('assets/img/landing-page/about-1.webp') }}";
    }
  </script>

  {{-- Banner 2 --}}
  <script>
    function banner_2() {
      var header = document.getElementById("header");
      header.innerHTML = 'Pemindaian 3D dan Teknologi Laser Scanner';

      var text_1 = document.getElementById("text_1");
      text_1.innerHTML =
        'Pemindaian bangunan cagar budaya dengan menggunakan instrumen terrestrial laser scanner menjadi inovasi baru dalam upaya pelestarian cagar budaya, terutama dalam aspek dokumentasi dan konservasi. ';

      var text_2 = document.getElementById("text_2");
      text_2.innerHTML =
        'Pemindaian 3 dimensi merupakan proses ketika instrumen laser scanner melakukan perekaman terhadap permukaan objek dan menghasilkan data berupa titik-titik awan (point cloud) berkoordinat (x,y,z). Hasil pemindaian dengan menggunakan laser scanner mampu menangkap jutaan 3D point cloud hanya dalam beberapa menit, hal ini memberikan keuntungan dari segi efisiensi kerja dibandingkan dengan metode konvensional lainnya. ';

      var imgs = document.getElementById("imgs");
      imgs.src = "{{ asset('assets/img/landing-page/about-2.webp') }}";
    }
  </script>

  {{-- Banner 3 --}}
  <script>
    function banner_3() {
      var header = document.getElementById("header");
      header.innerHTML = 'Point Cloud Representasi Data 3D ';

      var text_1 = document.getElementById("text_1");
      text_1.innerHTML =
        'Point cloud adalah kumpulan titik-titik dalam ruang tiga dimensi yang merepresentasikan objek fisik atau lingkungan.  ';

      var text_2 = document.getElementById("text_2");
      text_2.innerHTML =
        'Penggunaan point cloud  dalam HBIM memiliki keunggulan karena dapat memberikan representasi visual yang sangat akurat mengenai sebuah objek atau bangunan cagar budaya.  ';

      var imgs = document.getElementById("imgs");
      imgs.src = "{{ asset('assets/img/landing-page/about-3.webp') }}";
    }
  </script>

  <section class="event-one event-one__home-three">
    <div class="container">
      <div class="block-title-two text-center">
        <span class="block-title-two__line"></span><!-- /.block-title-two__line -->
        <p>Produk Kami</p>
        <h3>Lihat Produk Terbaik Kami</h3>
      </div>
      <!-- /.block-title-two -->
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="row event-one__single" style="border-radius: 20px">
            <div class="col-md-4 event-one__image">
              <img id="myImg" class="img-modal img-thumbnail" style="border-radius: 15px; border: 0"
                src="assets/img/point-clouds/seni-rupa-keramik/5.webp"
                alt="Point Cloud Gedung Museum Seni Rupa & Keramik DKI Jakarta" />

              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>

              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg");
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function() {
                  modal.style.display = "block";
                  modalImg.src = this.src;
                  captionText.innerHTML = this.alt;
                }

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                  modal.style.display = "none";
                }
              </script>
            </div>
            <div class="col-md-5 event-one__content" style="text-align: justify">
              <h3><a href="{{ route('hbim') }}">HBIM</a></h3>
              <p>
                <i>HBIM</i> melibatkan pengumpulan data menggunakan berbagai
                teknologi, untuk membuat model digital yang akurat dari
                bangunan bersejarah.
              </p>
            </div>
            <div class="col-md-3 event-one__btn-block" style="display: grid; justify-content: end">
              <a href="{{ route('hbim') }}" class="thm-btn event-one__btn">Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12 mb-4">
          <div class="row event-one__single" style="border-radius: 20px">
            <div class="col-md-4 event-one__image">
              <img id="myImg1" class="img-modal img-thumbnail" style="border-radius: 15px; border: 0"
                src="assets/img/point-clouds/wayang/1.webp" alt="Point Cloud Gedung Museum Wayang DKI Jakarta" />

              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg1");
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function() {
                  modal.style.display = "block";
                  modalImg.src = this.src;
                  captionText.innerHTML = this.alt;
                }

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                  modal.style.display = "none";
                }
              </script>
            </div>
            <div class="col-md-5 event-one__content">
              <h3><a href="{{ route('point-clouds') }}">Point Clouds</a></h3>
              <p style="text-align: justify">
                <i>Point clouds</i> digunakan dalam berbagai aplikasi, termasuk
                pemindaian laser 3D, pemodelan bangunan, pemetaan
                lingkungan, rekayasa, pembuatan film, dan banyak lagi.
              </p>
            </div>
            <div class="col-md-3 event-one__btn-block" style="display: grid; justify-content: end">
              <a href="{{ route('point-clouds') }}" class="thm-btn event-one__btn">Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12 mb-4">
          <div class="row event-one__single" style="border-radius: 20px">
            <div class="col-md-4 event-one__image">
              <img id="myImg2" class="img-modal img-thumbnail" src="assets/img/products/plan-section/bahari.png"
                alt="Plan & Section Gedung Museum Bahari DKI Jakarta" />

              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg2");
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function() {
                  modal.style.display = "block";
                  modalImg.src = this.src;
                  captionText.innerHTML = this.alt;
                }

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                  modal.style.display = "none";
                }
              </script>
            </div>
            <div class="col-md-5 event-one__content">
              <h3><a href="{{ route('plan-section') }}">Plan and Section</a></h3>
              <p style="text-align: justify">
                <i>Plan and Section</i> adalah dua konsep yang merujuk pada dua
                jenis representasi visual yang digunakan untuk menggambarkan
                detail bangunan.
              </p>
            </div>
            <div class="col-md-3 event-one__btn-block" style="display: grid; justify-content: end">
              <a href="{{ route('plan-section') }}" class="thm-btn event-one__btn">Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.event-one -->

  <section class="collection-two collection-two__home-three">
    <div class="container">
      <div class="block-title-two text-center">
        <div class="block-title-two__line"></div>
        <!-- /.block-title-two__line -->
        <p>Situs</p>
        <h3>Bangunan Cagar Budaya di Jakarta</h3>
      </div>
      <!-- /.block-title-two -->
      <div class="collection-two__carousel shadowed__carousel thm__owl-carousel owl-carousel owl-theme"
        data-options='{
			"loop": true, "margin": 40, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": true, "items": 5, "smartSpeed": 700, "dots": false, "nav": true, "responsive": {
				"1920": { "items": 3},
				"1440": { "items": 3},
				"1199": { "items": 3},
				"991": { "items": 2},
				"767": { "items": 1},
				"575": { "items": 1},
				"480": { "items": 1},
				"0": { "items": 1}
			}
		}'>
        <div class="item">
          <div class="collection-two__single">
            <div class="collection-two__image">
              <img
                style="
                      border-top-left-radius: 15px;
                      border-top-right-radius: 15px;
                    "
                src="assets/img/landing-page/sites-1.webp" alt="" />
            </div>
            <!-- /.collection-two__image -->
            <div class="collection-two__content">
              <h3>
                <a href="{{ route('situs.museum-sejarah') }}">Museum Sejarah Jakarta</a>
              </h3>
              <p>Kota Jakarta Barat, DKI Jakarta, Indonesia</p>
            </div>
            <!-- /.collection-two__content -->
          </div>
          <!-- /.collection-two__single -->
        </div>
        <!-- /.item -->
        <div class="item">
          <div class="collection-two__single">
            <div class="collection-two__image">
              <img
                style="
                      border-top-left-radius: 15px;
                      border-top-right-radius: 15px;
                    "
                src="assets/img/landing-page/sites-2.webp" alt="" />
            </div>
            <!-- /.collection-two__image -->
            <div class="collection-two__content">
              <h3>
                <a href="{{ route('situs.museum-tekstil') }}">Museum Tekstil </a>
              </h3>
              <p>Jakarta Barat, DKI Jakarta, Indonesia</p>
            </div>
            <!-- /.collection-two__content -->
          </div>
          <!-- /.collection-two__single -->
        </div>
        <!-- /.item -->
        <div class="item">
          <div class="collection-two__single">
            <div class="collection-two__image">
              <img
                style="
                      border-top-left-radius: 15px;
                      border-top-right-radius: 15px;
                    "
                src="assets/img/landing-page/sites-3.webp" alt="" />
            </div>
            <!-- /.collection-two__image -->
            <div class="collection-two__content">
              <h3>
                <a href="{{ route('situs.museum-seni-rupa-dan-keramik') }}">Museum Seni Rupa dan Keramik</a>
              </h3>
              <p>Jakarta Barat, DKI Jakarta, Indonesia</p>
            </div>
            <!-- /.collection-two__content -->
          </div>
          <!-- /.collection-two__single -->
        </div>
        <!-- /.item -->

        <div class="item">
          <div class="collection-two__single">
            <div class="collection-two__image">
              <img
                style="
                      border-top-left-radius: 15px;
                      border-top-right-radius: 15px;
                    "
                src="assets/img/landing-page/sites-4.webp" alt="" />
            </div>
            <!-- /.collection-two__image -->
            <div class="collection-two__content">
              <h3><a href="{{ route('situs.museum-wayang') }}">Museum Wayang</a></h3>
              <p>Jakarta Barat, DKI Jakarta, Indonesia</p>
            </div>
            <!-- /.collection-two__content -->
          </div>
          <!-- /.collection-two__single -->
        </div>
        <!-- /.item -->
        <div class="item">
          <div class="collection-two__single">
            <div class="collection-two__image">
              <img
                style="
                      border-top-left-radius: 15px;
                      border-top-right-radius: 15px;
                    "
                src="assets/img/landing-page/sites-5.webp" alt="" />
            </div>
            <!-- /.collection-two__image -->
            <div class="collection-two__content">
              <h3><a href="{{ route('situs.museum-bahari') }}">Museum Bahari </a></h3>
              <p>Jakarta Utara, DKI Jakarta, Indonesia</p>
            </div>
            <!-- /.collection-two__content -->
          </div>
          <!-- /.collection-two__single -->
        </div>
        <!-- /.item -->
      </div>
      <!-- /.collection-two__carousel shadowed__carousel thm__owl-carousel owl-carousel owl-theme -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.collection-two -->

  <section class="event-one event-one__home-three">
    <div class="container">
      <div class="block-title-two text-center">
        <div class="block-title-two__line"></div>
        <!-- /.block-title-two__line -->
        <p>Lokasi</p>
        <h3>Lokasi Bangunan Cagar Budaya di Jakarta</h3>
      </div>
      <!-- /.block-title-two -->
      <iframe src="https://www.google.com/maps/d/embed?mid=1ESPvfcfXhhBBMCn1q1vm8b43-W9-GDA&ehbc=2E312F" width="100%" height="480" style="border-radius: 20px;"></iframe>
      <!-- /.collection-two__carousel shadowed__carousel thm__owl-carousel owl-carousel owl-theme -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.collection-two -->

  {{-- <section class="cta-two cta-two__home-two">
    <div class="container">
      <div class="inner-container">
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="cta-two__box">
              <div class="cta-two__icon">
                <i class="muzex-icon-clock"></i>
              </div>
              <!-- /.cta-two__icon -->
              <div class="cta-two__content">
                <h3>Open Hours</h3>
                <p>
                  Jam Kerja: 09.00 – 17.00 WIB <br />
                  Minggu & Hari Libur: Tutup
                </p>
                <a href="#" class="thm-btn">Detail Informasi</a><!-- /.thm-btn -->
              </div>
              <!-- /.cta-two__content -->
            </div>
            <!-- /.cta-two__box -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-md-6">
            <div class="cta-two__box">
              <div class="cta-two__icon">
                <i class="muzex-icon-location"></i>
              </div>
              <!-- /.cta-two__icon -->
              <div class="cta-two__content">
                <h3>Sites Location</h3>
                <p>
                  Kami menyediakan 5 museum <br />
                  terbaik yang dapat Anda kunjungi
                </p>
                <a href="#" class="thm-btn">Detail Lokasi</a><!-- /.thm-btn -->
              </div>
              <!-- /.cta-two__box -->
            </div>
            <!-- /.cta-two__content -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.inner-container -->
    </div>
    <!-- /.container -->
  </section> --}}
  <!-- /.cta-two -->

  <section class="team-one">
    <div class="container">
      <div class="block-title-two text-center">
        <p>Arsip</p>
        <h3>Arsip Sejarah & Referensi</h3>
      </div>
      <!-- /.block-title-two -->
      <div class="row">
        <div class="col-lg-6">
          <div class="team-one__single">
            <div class="team-one__image">
              <img src="assets/img/landing-page/archives-1.webp"
                alt="Kanal Tijgersgracht berjajar dengan rumah-rumah keluarga paling terkemuka di kota ini, k.k. 1682"
                id="myImg3" />
              <div class="team-one__social">
                <div class="team-one__content" style="padding-top: 15px; padding-bottom: 15px;">
                  <a href="{{ route('arsip.sejarah') }}">
                    <h1 class="text-dark mb-3">Arsip Sejarah</h1>
                  </a>
                  <span class="text-light px-3">Arsip sejarah adalah kumpulan dokumen, catatan,
                    surat-surat, gambar, peta, dan bahan-bahan lainnya yang
                    berkaitan dengan peristiwa atau kehidupan masa lalu
                    museum terkait.</span>

                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>

                  {{-- Script Modal --}}
                  <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById("myImg3");
                    var modalImg = document.getElementById("img01");
                    var captionText = document.getElementById("caption");
                    img.onclick = function() {
                      modal.style.display = "block";
                      modalImg.src = this.src;
                      captionText.innerHTML = this.alt;
                    }

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                      modal.style.display = "none";
                    }
                  </script>
                </div>
              </div>
              <!-- /.team-one__social -->
            </div>
            <!-- /.team-one__image -->
          </div>
          <!-- /.team-one__single -->
        </div>
        <!-- /.col-lg-6 -->

        <div class="col-lg-6">
          <div class="team-one__single">
            <div class="team-one__image">
              <img src="assets/img/landing-page/archives-2.webp"
                alt="Litografi Staadhuisplein Batavia pada tahun 1754_dibuat oleh van Schley_Pe" id="myImg4" />
              <div class="team-one__social">
                <div class="team-one__content" style="padding-top: 15px; padding-bottom: 15px;">
                  <a href="{{ route('arsip.referensi') }}">
                    <h1 class="text-dark mb-3">Referensi</h1>
                  </a>
                  <span class="text-light px-3">Arsip referensi merujuk pada kumpulan dokumen,
                    informasi, atau sumber daya yang digunakan sebagai dasar
                    atau acuan dalam penyampaian informasi pada
                    museum.</span>

                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>

                  {{-- Script Modal --}}
                  <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById("myImg4");
                    var modalImg = document.getElementById("img01");
                    var captionText = document.getElementById("caption");
                    img.onclick = function() {
                      modal.style.display = "block";
                      modalImg.src = this.src;
                      captionText.innerHTML = this.alt;
                    }

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                      modal.style.display = "none";
                    }
                  </script>
                </div>
              </div>
              <!-- /.team-one__social -->
            </div>
            <!-- /.team-one__image -->
          </div>
          <!-- /.team-one__single -->
        </div>
        <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.team-one -->

  <section class="collection-three">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="collection-three__block">
            <div class="block-title">
              <p>Kondisi Keterawatan</p>
              <h3>Kondisi Keterawatan Bangunan Cagar Budaya</h3>
            </div>
            <!-- /.block-title -->
            <p class="me-3" style="text-align: justify">
              Istilah <i>State of Conservation</i> mengacu pada kondisi atau
              keadaan suatu benda atau artefak dalam konteks museum dan
              pelestarian warisan budaya. Ini berkaitan erat dengan upaya
              untuk mempertahankan, melindungi, dan merawat benda-benda
              bersejarah atau seni agar tetap utuh dan dapat dinikmati oleh
              generasi mendatang.
            </p>
            <!-- <a href="#" class="thm-btn collection-three__block-btn">All Collection</a> -->
            <!-- /.thm-btn collection-three__block-btn -->
          </div>
          <!-- /.collection-three__block -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-6">
          <a href="{{ route('keadaan-bangunan.index') }}">
            <div class="blog-one__image" style="border-radius: 15px">
              <img src="{{ asset('assets/img/landing-page/state-consertavions.webp') }}" alt="">
            </div><!-- /.blog-one__image -->
          </a>
          <!-- /.row masonary-layout -->
        </div>
        <!-- /.col-lg-8 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.collection-three -->
@endsection
