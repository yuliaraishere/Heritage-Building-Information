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
          background-image: url(assets/img/sites/m-seni-rupa/paralax.png);
          padding-top: 0 !important;
        ">
    <div class="container" style="padding-top: 200px !important">
      <h2 style="font-size: 70px !important" class="mb-2">
        MUSEUM SENI RUPA DAN KERAMIK
      </h2>
      <p style="color: #fff; font-size: 20px !important">
        Jl. Pos Kota No.2 9, RT.9/RW.7, Pinangsia, Kec. Taman Sari, Kota
        Jakarta Barat, Daerah Khusus Ibukota Jakarta 11110
      </p>
      <a href="#about" class="thm-btn btn-style-one mt-3">Selengkapnya</a>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.video-one -->

  <section class="about-four" id="about">
    <div class="container">
      <div class="about-four__image wow fadeInRight" data-wow-duration="1500ms">
        <img src="assets/img/sites/m-seni-rupa/header.png" id="myImg1"
          alt="Bangunan Raad van Justite tahun 1917_difoto oleh Tio Tek Hong_KITLV (diunduh 2023)" class="img-modal"
          style="border-radius: 15px" />

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
                  Museum Seni Rupa dan Keramik menempati sebuah bangunan yang dulunya adalah sebuah gedung lembaga
                  peradilan di <i>Oud Batavia</i>. Bangunan ini dikenal dengan nama <i>Raad van Justitie</i>.
                </p>
              </div>
              <!-- /.about-four__highlite-text -->
              <p>
                Berdasarkan peta kuno <i>Raad van Justitie</i> memiliki batas barat berupa kanal Harimau (Tijgersgracht).
                <i>Tijgersgracht</i> sendiri merupakan salah satu dari 15 kanal yang ada di dalam Kasteel Batavia dan
                merupakan
                wilayah tempat tinggal orang-orang kaya / petinggi Batavia. Salah satu pemilik rumah di wilayah
                <i>Tijgersgracht</i> adalah Meester Cornelis Senen.
              </p>
              <p>
                Pembangunan <i>Raad van Justitie</i> sendiri tidak terlepas dari pengaruh dan keadaan di Eropa. Di Eropa
                sebelum
                abad ke-18, Lembaga Peradilan tidak memiliki bangunan tersendiri melainkan berada dalam Gedung Parlemen
                atau Balai kota. Baru pada abad ke-18 Lembaga Peradilan memisahkan diri dan memiliki bangunan sendiri.
                Baru setelah 1848, gedung Mahkamah Agung diresmikan dan Lembaga tersebut menempati bangunan sendiri.
                Sementara <i>Raad van Justitie</i> menempati bangunan yang terletak di sebelah barat Balai Kota Batavia.
                Gedung
                ini sendiri memiliki gaya bangunan Neo-Klasik, yang dicirikan dengan adanya taman luas di depan fasadnya
                dan penggunaan pilar-pilar dengan gaya Dorik dari Yunani. Ciri ordo Dorik Yunani pada banguan <i>Raad van
                  Justitie</i> salah satunya tidak memiliki dasar/lapik sehingga kaki tiang langsung tertanam. Penggunaan
                gaya
                Neo-Klasik pada bangunan ini amat populer di Abad ke-18 di wilayah Weltvreden dan luar <i>Weltevreden</i>.
              </p>
              <p>
                Saat masa kependudukan Jepang pada tahun 1942-1945, bangunan ini digunakan sebagai pusat markas besar
                tentara Jepang. Masa kemerdekaan sekitar tahun 1967 – 1973, bangunan ini digunakan sebagai kantor gubernur
                Jawa Barat dan juga Walikota Jakarta Barat. Pada tahun berikutnya, 1974, bangunan ini digunakan sebagai
                kantor pusat urusan museum dan sejarah Jakarta. Pada tahun 1977 bangunan ini ditetapkan sebagai bangunan
                bersejarah yang dilindungi Undang-Undang Monumen <i>(Monumenten Ordonantie STBL.1931 No.238)</i>. Bangunan
                ini
                diresmikan sebagai Balai Seni Rupa pada tanggal 20 Agustus 1976. Baru pada tahun 1990 namanya berganti
                dari Balai Seni Rupa menjadi Museum Seni Rupa dan Keramik.
              </p>
              <p>

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
        <h3>Dokumentasi Museum Seni Rupa & Keramik Jakarta</h3>
      </div>

      <!-- /Galery -->
      <div class="row" id="page-1">
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK1.webp" id="img-1"
            class="img-modal" alt="Museum Seni Rupa & Keramik-1">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK2.webp" id="img-2"
            class="img-modal" alt="Museum Seni Rupa & Keramik-2">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK3.webp" id="img-3"
            class="img-modal" alt="Museum Seni Rupa & Keramik-3">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK4.webp" id="img-4"
            class="img-modal" alt="Museum Seni Rupa & Keramik-4">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK5.webp" id="img-5"
            class="img-modal" alt="Museum Seni Rupa & Keramik-5">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK6.webp" id="img-6"
            class="img-modal" alt="Museum Seni Rupa & Keramik-6">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK7.webp" id="img-7"
            class="img-modal" alt="Museum Seni Rupa & Keramik-7">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK8.webp" id="img-8"
            class="img-modal" alt="Museum Seni Rupa & Keramik-8">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK9.webp" id="img-9"
            class="img-modal" alt="Museum Seni Rupa & Keramik-9">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK10.webp"
            id="img-10" class="img-modal" alt="Museum Seni Rupa & Keramik-10">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK11.webp"
            id="img-11" class="img-modal" alt="Museum Seni Rupa & Keramik-11">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK12.webp"
            id="img-12" class="img-modal" alt="Museum Seni Rupa & Keramik-12">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK13.webp"
            id="img-13" class="img-modal" alt="Museum Seni Rupa & Keramik-13">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK14.webp"
            id="img-14" class="img-modal" alt="Museum Seni Rupa & Keramik-14">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK15.webp"
            id="img-15" class="img-modal" alt="Museum Seni Rupa & Keramik-15">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK16.webp"
            id="img-16" class="img-modal" alt="Museum Seni Rupa & Keramik-16">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-16");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK17.webp"
            id="img-17" class="img-modal" alt="Museum Seni Rupa & Keramik-17">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK18.webp"
            id="img-18" class="img-modal" alt="Museum Seni Rupa & Keramik-18">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK19.webp"
            id="img-19" class="img-modal" alt="Museum Seni Rupa & Keramik-19">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK20.webp"
            id="img-20" class="img-modal" alt="Museum Seni Rupa & Keramik-20">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK21.webp"
            id="img-21" class="img-modal" alt="Museum Seni Rupa & Keramik-21">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK22.webp"
            id="img-22" class="img-modal" alt="Museum Seni Rupa & Keramik-22">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK23.webp"
            id="img-23" class="img-modal" alt="Museum Seni Rupa & Keramik-23">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-seni-rupa/MSRK24.webp"
            id="img-24" class="img-modal" alt="Museum Seni Rupa & Keramik-24">
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

      <div class="text-center d-flex justify-content-start mt-4">
        <div class="post-pagination">
          <button onclick="page1()">1</button>
          <button onclick="page2()">2</button>
          <button onclick="page3()">3</button>

        </div>
        <!-- /.post-pagination -->
      </div>

      <script>
        const element1 = document.getElementById("page-1");
        const element2 = document.getElementById("page-2");
        const element3 = document.getElementById("page-3");

        function page1() {
          element1.style.display = "flex"; // to show the element
          element2.style.display = "none"; // to show the element
          element3.style.display = "none"; // to show the element
        }

        function page2() {
          element2.style.display = "flex"; // to show the element
          element1.style.display = "none"; // to show the element
          element3.style.display = "none"; // to show the element
        }

        function page3() {
          element3.style.display = "flex"; // to show the element
          element1.style.display = "none"; // to show the element
          element2.style.display = "none"; // to show the element
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
