@extends('layouts.master')
@section('content')
  <!-- The Modal -->
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>

  <section class="about-four" id="about">
    <div class="container">
      <div class="about-four__image wow fadeInRight" data-wow-duration="1500ms">
        <img src="{{ asset('assets/img/archives/history/m-tekstil/header.png') }}" id="myImg1" alt="Bangunan Museum Tekstil DKI Jakarta"
          class="img-modal" style="border-radius: 15px" />

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
      <!-- /.about-four__image -->
      <div class="row">
        <div class="col-lg-6">
          <div class="about-four__content">
            <div class="block-title">
              <p>Sejarah</p>
              <h3>Sejarah Bangunan</h3>
            </div>
            <!-- /.block-title -->
            <div style="text-align: justify; color: #252930">
              <div class="about-four__highlite-text">
                <p>
                  Museum Tekstil merupakan museum yang diresmikan pada tanggal
                  28 Juni 1976 oleh Ibu Tien Suharto.
                </p>
              </div>
              <!-- /.about-four__highlite-text -->
              <p>
                Pada mulanya adalah rumah pribadi seorang warga negara Prancis
                yang dibangun pada abad ke-19. Kemudian dibeli oleh konsul
                Turki bernama Abdul Azis Almussawi Al Kazimi yang menetap di
                Indonesia. Selanjutnya tahun 1942 dijual kepada Dr. Karel
                Christian Cruq.
              </p>
              <p>
                Pada masa perjuangan kemerdekaan Indonesia, gedung ini menjadi
                markas Barisan Keamanan Rakyat (BKR) dan tahun 1947 didiami
                oleh Lie Sion Pin. Pada tahun 1952 dibeli oleh Departemen
                Sosial dan pada tanggal 25 Oktober 1975 diserahkan kepada
                Pemda DKI Jakarta yang untuk kemudian pada tanggal 28 Juni
                1976 diresmikan penggunaannya oleh Ibu Tien Soeharto sebagai
                Museum Tekstil.
              </p>
              <p>
                Pendirian museum tekstil dilatarbelakangi oleh penurunan tren
                kain tradisional yang dimulai pada tahun 1970. Penurunan
                tersebut diiringi dengan berkurangnya pemahaman mengenai
                penggunaannya serta kuantitas dan kualitas kain tradisional.
                Tak ayal, terdapat dorongan dari para pencinta kain
                tradisional untuk membuat organisasi yang berorientasi pada
                pelestarian kain tradisional. Organisasi <i>Wastraprema</i> pun
                terbentuk, mereka menyumbangkan 500 kain tradisional kepada
                pemerintahan DKI Jakarta.
              </p>
              <p>
                Setelah peresmian, pada tahun 1985 dibangun dua gedung baru
                yang dipergunakan untuk ruang perawatan, ruang penyimpanan
                koleksi, ruang pengenalan wastra, <i>auditorium</i>, perpustakaan dan
                kantor. Selanjutnya, pada tanggal 2 Oktober 2010 Museum
                Tekstil melakukan bekerja sama dengan Yayasan Batik Indonesia
                dan meresmikan Galeri Batik yang menyajikan koleksi Batik dari
                seluruh Indonesia. Pada satu waktu, UNESCO mengakui batik
                sebagai warisan budaya dunia asal Indonesia piagam Warisan
                Budaya Tak Benda.
              </p>
            </div>
          </div>
          <!-- /.about-four__content -->
        </div>
        <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.about-four -->

  <style>
    .owl-nav {
      margin-top: 100px !important;
    }
  </style>

  <section class="collection-two collection-two__home-three" style="background-color: #f6f8fa">
    <div class="container">
      <div class="block-title-two text-center">
        <div class="block-title-two__line"></div>
        <!-- /.block-title-two__line -->
        <p>Foto Sejarah</p>
        <h3>Foto Sejarah Museum</h3>
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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-tekstil/gallery-1.png" id="myImg2"
                alt="Bangunan Museum Tekstil DKI Jakarta Masa Lampau - 1" class="img-modal" />

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
            <!-- /.collection-two__image -->
          </div>
          <!-- /.collection-two__single -->
        </div>
        <!-- /.item -->
        <div class="item">
          <div class="collection-two__single">
            <div class="collection-two__image">
              <img style="border-radius: 15px" src="assets/img/archives/history/m-tekstil/gallery-2.png" id="myImg3"
                alt="Bangunan Museum Tekstil DKI Jakarta Masa Lampau - 2" class="img-modal" />

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
            <!-- /.collection-two__image -->
          </div>
          <!-- /.collection-two__single -->
        </div>
        <!-- /.item -->
        <div class="item">
          <div class="collection-two__single">
            <div class="collection-two__image">
              <img style="border-radius: 15px" src="assets/img/archives/history/m-tekstil/gallery-3.png" id="myImg4"
                alt="Bangunan Museum Tekstil DKI Jakarta Masa Lampau - 3" class="img-modal" />

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
            <!-- /.collection-two__image -->
          </div>
          <!-- /.collection-two__single -->
        </div>
        <!-- /.item -->
        <div class="item">
          <div class="collection-two__single">
            <div class="collection-two__image">
              <img style="border-radius: 15px" src="assets/img/archives/history/m-tekstil/gallery-4.png" id="myImg5"
                alt="Bangunan Museum Tekstil DKI Jakarta Masa Lampau - 4" class="img-modal" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg5");
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
            <!-- /.collection-two__image -->
          </div>
          <!-- /.collection-two__single -->
        </div>
        <!-- /.item -->
        <div class="item">
          <div class="collection-two__single">
            <div class="collection-two__image">
              <img style="border-radius: 15px" src="assets/img/archives/history/m-tekstil/gallery-5.png" id="myImg6"
                alt="Bangunan Museum Tekstil DKI Jakarta Masa Lampau - 5" class="img-modal" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg6");
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
            <!-- /.collection-two__image -->
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

  <section class="venue-one">
    <div class="container">
      <div class="venue-one__top">
        <div class="block-title">
          <p>Litografi</p>
          <h3>Litografi Museum</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <!-- /.venue-one__top -->

      <div class="row high-gutter" style="justify-content: center">
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image">

            </div>
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image">

            </div>
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <a href="assets/img/archives/history/m-tekstil/litografi-3.png">
              <div class="venue-one__image">
                <img src="assets/img/archives/history/m-tekstil/litografi-3.png" style="border-radius: 15px"
                  alt="" />
              </div>
            </a>
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <a href="assets/img/archives/history/m-tekstil/litografi-4.png">
              <div class="venue-one__image">
                <img src="assets/img/archives/history/m-tekstil/litografi-4.png" style="border-radius: 15px"
                  alt="" />
              </div>
            </a>
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <a href="assets/img/archives/history/m-tekstil/litografi-5.png">
              <div class="venue-one__image">
                <img src="assets/img/archives/history/m-tekstil/litografi-5.png" style="border-radius: 15px"
                  alt="" />
              </div>
            </a>
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.venue-one -->

  <section class="venue-one">
    <div class="container">
      <div class="venue-one__top">
        <div class="block-title">
          <p>Peta</p>
          <h3>Peta Sejarah Museum</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <!-- /.venue-one__top -->

      <div class="row high-gutter" style="justify-content: center">
        <div class="col-lg-6">
          <div class="venue-one__single">
            <a href="assets/img/archives/history/m-tekstil/peta-1.png">
              <div class="venue-one__image">
                <img src="assets/img/archives/history/m-tekstil/peta-1.png" style="border-radius: 15px"
                  alt="" />
              </div>
            </a>
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-6">
          <div class="venue-one__single">
            <a href="assets/img/archives/history/m-tekstil/peta-2.png">
              <div class="venue-one__image">
                <img src="assets/img/archives/history/m-tekstil/peta-2.png" style="border-radius: 15px"
                  alt="" />
              </div>
            </a>
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.venue-one -->
@endsection
