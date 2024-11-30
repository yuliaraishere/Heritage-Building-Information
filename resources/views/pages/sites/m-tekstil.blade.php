@extends('layouts.master')
@section('content')
  <!-- The Modal -->
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>

  <section class="video-one page-header"
    style="
          background-image: url(assets/img/sites/m-tekstil/paralax.webp);
          padding-top: 0 !important;
        ">
    <div class="container" style="padding-top: 200px !important">
      <h2 style="font-size: 70px !important" class="mb-2">
        MUSEUM TEKSTIL
      </h2>
      <p style="color: #fff; font-size: 20px !important">
        Jl. K.S. Tubun, Kota Bambu Sel., Kec. Palmerah, Kota Jakarta Barat,
        Daerah Khusus Ibukota Jakarta 11420
      </p>
      <a href="#about" class="thm-btn btn-style-one mt-3">Selengkapnya</a>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.video-one -->

  <section class="about-four" id="about">
    <div class="container">
      <div class="about-four__image wow fadeInRight" data-wow-duration="1500ms">
        <img src="assets/img/sites/m-tekstil/header.png" id="myImg1" alt="Bangunan Museum Tekstil DKI Jakarta"
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

  <section class="collection-two collection-two__home-three" style="background-color: #f6f8fa">
    <div class="container">
      <div class="block-title-two text-center">
        <div class="block-title-two__line"></div>
        <!-- /.block-title-two__line -->
        <p>Gallery</p>
        <h3>Dokumentasi Museum Tekstil Jakarta</h3>
      </div>
      <!-- /.block-title-two -->

      <!-- /Galery -->
      <div class="row" id="page-1">
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil1.webp" id="img-1"
            class="img-modal" alt="Museum Tekstil-1">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-1");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil2.webp" id="img-2"
            class="img-modal" alt="Museum Tekstil-2">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-2");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil3.webp" id="img-3"
            class="img-modal" alt="Museum Tekstil-3">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-3");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil4.webp" id="img-4"
            class="img-modal" alt="Museum Tekstil-4">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-4");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil5.webp" id="img-5"
            class="img-modal" alt="Museum Tekstil-5">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-5");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil6.webp" id="img-6"
            class="img-modal" alt="Museum Tekstil-6">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-6");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil7.webp" id="img-7"
            class="img-modal" alt="Museum Tekstil-7">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-7");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil8.webp" id="img-8"
            class="img-modal" alt="Museum Tekstil-8">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-8");
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

      <div class="row" id="page-2" style="display: none">
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil9.webp" id="img-9"
            class="img-modal" alt="Museum Tekstil-9">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-9");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil10.webp"
            id="img-10" class="img-modal" alt="Museum Tekstil-10">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-10");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil11.webp"
            id="img-11" class="img-modal" alt="Museum Tekstil-11">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-11");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil12.webp"
            id="img-12" class="img-modal" alt="Museum Tekstil-12">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-12");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil13.webp"
            id="img-13" class="img-modal" alt="Museum Tekstil-13">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-13");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil14.webp"
            id="img-14" class="img-modal" alt="Museum Tekstil-14">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-14");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil15.webp"
            id="img-15" class="img-modal" alt="Museum Tekstil-15">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-15");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil28.webp"
            id="img-28" class="img-modal" alt="Museum Tekstil-16">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-28");
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

      <div class="row" id="page-3" style="display: none">
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil17.webp"
            id="img-17" class="img-modal" alt="Museum Tekstil-17">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-17");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil18.webp"
            id="img-18" class="img-modal" alt="Museum Tekstil-18">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-18");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil19.webp"
            id="img-19" class="img-modal" alt="Museum Tekstil-19">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-19");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil20.webp"
            id="img-20" class="img-modal" alt="Museum Tekstil-20">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-20");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil21.webp"
            id="img-21" class="img-modal" alt="Museum Tekstil-21">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-21");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil22.webp"
            id="img-22" class="img-modal" alt="Museum Tekstil-22">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-22");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil23.webp"
            id="img-23" class="img-modal" alt="Museum Tekstil-23">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-23");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil24.webp"
            id="img-24" class="img-modal" alt="Museum Tekstil-24">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-24");
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

      <div class="row" id="page-4" style="display: none">
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil25.webp"
            id="img-25" class="img-modal" alt="Museum Tekstil-25">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-25");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil26.webp"
            id="img-26" class="img-modal" alt="Museum Tekstil-26">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-26");
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-tekstil/Tekstil27.webp"
            id="img-27" class="img-modal" alt="Museum Tekstil-27">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-27");
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

      <div class="text-center d-flex justify-content-start mt-4">
        <div class="post-pagination">
          <button onclick="page1()">1</button>
          <button onclick="page2()">2</button>
          <button onclick="page3()">3</button>
          <button onclick="page4()">4</button>

        </div>
        <!-- /.post-pagination -->
      </div>

      <script>
        const element1 = document.getElementById("page-1");
        const element2 = document.getElementById("page-2");
        const element3 = document.getElementById("page-3");
        const element4 = document.getElementById("page-4");

        function page1() {
          element1.style.display = "flex"; // to show the element
          element2.style.display = "none"; // to show the element
          element3.style.display = "none"; // to show the element
          element4.style.display = "none"; // to show the element
        }

        function page2() {
          element2.style.display = "flex"; // to show the element
          element1.style.display = "none"; // to show the element
          element3.style.display = "none"; // to show the element
          element4.style.display = "none"; // to show the element
        }

        function page3() {
          element3.style.display = "flex"; // to show the element
          element1.style.display = "none"; // to show the element
          element2.style.display = "none"; // to show the element
          element4.style.display = "none"; // to show the element
        }

        function page4() {
          element4.style.display = "flex"; // to show the element
          element1.style.display = "none"; // to show the element
          element2.style.display = "none"; // to show the element
          element3.style.display = "none"; // to show the element
        }
      </script>
      <!-- /Gallery -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.collection-two -->

  <section class="venue-one">
    <div class="container">
      <div class="venue-one__top">
        <div class="block-title">
          <p>Situs</p>
          <h3>Bangunan Cagar Budaya di Jakarta</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <!-- /.venue-one__top -->

      <div class="row" style="justify-content: center !important">
        <div class="col-lg-4">
          <div class="venue-one__single">
            <img id="myImg2" class="img-modal" src="assets/img/about-us/sites-1.webp"
              style="border-radius: 15px; width:100%" alt="Gedung Museum Sejarah Jakarta" />

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
            <!-- /.venue-one__image -->
            <div class="venue-one__content">
              <h3>
                <a href="{{ route('situs.museum-sejarah') }}">Museum Sejarah Jakarta</a>
              </h3>
              <p>
                <span class="venue-one__time">JAM BUKA: 09.00 - 15.00 WIB (Hari senin libur)</span>
                <span class="venue-one__address"><i class="fa fa-map-marker"></i>Jakarta Barat, DKI
                  Jakarta, Indonesia</span>
              </p>
              <a href="{{ route('situs.museum-sejarah') }}" class="thm-btn venue-one__btn">Detail
                Lokasi</a><!-- /.thm-btn venue-one__btn -->
            </div>
            <!-- /.venue-one__content -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4 mb-3">
          <div class="venue-one__single">
            <img id="myImg3" class="img-modal" src="assets/img/about-us/sites-2.webp"
              style="border-radius: 15px; width:100%" alt="Gedung Museum Tekstil Jakarta" />

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
            <!-- /.venue-one__image -->
            <div class="venue-one__content">
              <h3>
                <a href="{{ route('situs.museum-tekstil') }}">Museum Tekstil</a>
              </h3>
              <p>
                <span class="venue-one__time">JAM BUKA: 09.00 - 15.00 WIB (Hari senin libur)</span>
                <span class="venue-one__address"><i class="fa fa-map-marker"></i>Jakarta Barat, DKI
                  Jakarta, Indonesia</span>
              </p>
              <a href="{{ route('situs.museum-tekstil') }}" class="thm-btn venue-one__btn">Detail
                Lokasi</a><!-- /.thm-btn venue-one__btn -->
            </div>
            <!-- /.venue-one__content -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4 mb-3">
          <div class="venue-one__single">
            <img id="myImg4" class="img-modal" src="assets/img/about-us/sites-3.webp"
              style="border-radius: 15px; width:100%" alt="Gedung Museum Seni Rupa dan Keramik Jakarta" />

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
            <!-- /.venue-one__image -->
            <div class="venue-one__content">
              <h3>
                <a href="{{ route('situs.museum-seni-rupa-dan-keramik') }}">Museum Seni Rupa dan Keramik</a>
              </h3>
              <p>
                <span class="venue-one__time">JAM BUKA: 09.00 - 15.00 WIB (Hari senin libur)</span>
                <span class="venue-one__address"><i class="fa fa-map-marker"></i>Jakarta Barat, DKI
                  Jakarta, Indonesia</span>
              </p>
              <a href="{{ route('situs.museum-seni-rupa-dan-keramik') }}" class="thm-btn venue-one__btn">Detail
                Lokasi</a><!-- /.thm-btn venue-one__btn -->
            </div>
            <!-- /.venue-one__content -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4 mb-3">
          <div class="venue-one__single">
            <img id="myImg5" class="img-modal" src="assets/img/about-us/sites-4.webp"
              style="border-radius: 15px; width:100%" alt="Gedung Museum Wayang Jakarta" />

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
            <!-- /.venue-one__image -->
            <div class="venue-one__content">
              <h3><a href="{{ route('situs.museum-wayang') }}">Museum Wayang</a></h3>
              <p>
                <span class="venue-one__time">JAM BUKA: 09.00 - 15.00 WIB (Hari senin libur)</span>
                <span class="venue-one__address"><i class="fa fa-map-marker"></i>Jakarta Barat, DKI
                  Jakarta, Indonesia</span>
              </p>
              <a href="{{ route('situs.museum-wayang') }}" class="thm-btn venue-one__btn">Detail
                Lokasi</a><!-- /.thm-btn venue-one__btn -->
            </div>
            <!-- /.venue-one__content -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4 mb-3">
          <div class="venue-one__single">
            <img id="myImg6" class="img-modal" src="assets/img/about-us/sites-5.webp"
              style="border-radius: 15px; width:100%" alt="Gedung Museum Bahari Jakarta" />

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
            <!-- /.venue-one__image -->
            <div class="venue-one__content">
              <h3><a href="{{ route('situs.museum-bahari') }}">Museum Bahari</a></h3>
              <p>
                <span class="venue-one__time">JAM BUKA: 09.00 - 15.00 WIB (Hari senin libur)</span>
                <span class="venue-one__address"><i class="fa fa-map-marker"></i>Jakarta Utara, DKI
                  Jakarta, Indonesia</span>
              </p>
              <a href="{{ route('situs.museum-bahari') }}" class="thm-btn venue-one__btn">Detail
                Lokasi</a><!-- /.thm-btn venue-one__btn -->
            </div>
            <!-- /.venue-one__content -->
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
