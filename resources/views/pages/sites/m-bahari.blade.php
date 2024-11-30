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
          background-image: url(assets/img/sites/m-bahari/paralax.png);
          padding-top: 0 !important;
        ">
    <div class="container" style="padding-top: 200px !important">
      <h2 style="font-size: 70px !important" class="mb-2">MUSEUM BAHARI</h2>
      <p style="color: #fff; font-size: 20px !important">
        Jl. Ps. Ikan No.1 11, RT.11/RW.4, Penjaringan, Kec. Penjaringan, Jkt
        Utara, Daerah Khusus Ibukota Jakarta 14440
      </p>
      <a href="#about" class="thm-btn btn-style-one mt-3">Selengkapnya</a>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.video-one -->

  <section class="about-four" id="about">
    <div class="container">
      <div class="about-four__image wow fadeInRight" data-wow-duration="1500ms">
        <img src="assets/img/sites/m-bahari/header.png" id="myImg1"
          alt="Kompleks Gudang Barat (Westzjidsche Pakhuizen) dari sisi arah Bastion Vierkant (Kanal)_F.D.Haan (1922)"
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
                  Bangunan Museum Bahari merupakan salah satu dari bekas bangunan kompleks pergudangan yang dibangun oleh
                  VOC <i>(Vereningde Indische Compagnie)</i> Belanda. Bangunan yang dijadikan museum Bahari adalah bekas
                  kompleks pergudangan Barat <i>(Westzijde Pakhuizen)</i>.
                </p>
              </div>
              <!-- /.about-four__highlite-text -->
              <p>
                Pada masa kekuasaan Kolonial Belanda tersebut, gudang-gudang di kota Batavia ini dipakai untuk menyimpan
                komoditas perdagangan, khususnya rempah-rempah, dan benda-benda kebutuhan usaha (logistik) VOC, termasuk
                peralatan dan suku cadang kapal. Kompleks Gudang Barat VOC ini mulai dibangun pada tahun 1652. Berdasarkan
                penelitian-penelitian terdahulu, bangunan ini merupakan bagian gudang yang khusus menyimpan pala, lada,
                kopi, tembaga, dan timah. Adapun kompleks bangunan ini dirancang oleh Ir. Jacques de Bollan.
              </p>
              <p>
                Dalam buku Tempat-tempat Bersejarah di Jakarta, Adolf Heuken mengatakan, gudang yang kini jadi Museum
                Bahari dibangun pertama kali pada tahun 1663 – 1669. Semenjak dibangun pada tahun 1652, bangunan ini terus
                mengalami perluasan dan perbaikan. Hal ini dapat dilihat dalam angka tahun yang tertera pada setiap pintu
                bangunan. Antara lain pembangunan dilakukan pada tahun 1718, 1719, 1771, dan terakhir 1759.
              </p>
              <p>
                Kompleks Gudang Barat VOC ini juga tercatat pernah menjadi tempat penyimpanan logistik tentara jepang di
                masa kependudukan jepang. Peruntukkan sebagai tempat penyimpanan logistik tentara jepang terhitung sejak
                1949 – 1952. Di kemudian hari, khususnya pada masa kemerdekaan, fungsi sebagai Gudang tetap dipertahankan,
                bagian Gudang barat ini masih dijadikan Gudang logistik untuk Perusahaan Listrik Negara (PLN) dan Pos
                Telepon dan Telegraf (PTT).
              </p>
              <p>
                Saat bangunan ini diambil alih oleh PLN dan PTT, pemugaran dilakukan pada tahun 1976. Baru pada tahun
                1970-an, ide untuk menjadikan gudang ini sebagai museum dicanangkan. Hingga akhirnya pada 7 Juli 1977,
                dibawah kepemimpinan gubernur Ali Sadikin, kompleks Gudang Barat ini resmi dijadikan sebagai Museum
                Bahari.
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
        <h3>Dokumentasi Museum Bahari Jakarta</h3>
      </div>

      <!-- /Galery -->
      <div class="row" id="page-1">
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari1.webp" id="img-1"
            class="img-modal" alt="Museum Bahari-1">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari2.webp" id="img-2"
            class="img-modal" alt="Museum Bahari-2">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari3.webp" id="img-3"
            class="img-modal" alt="Museum Bahari-3">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari4.webp" id="img-4"
            class="img-modal" alt="Museum Bahari-4">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari5.webp" id="img-5"
            class="img-modal" alt="Museum Bahari-5">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari6.webp" id="img-6"
            class="img-modal" alt="Museum Bahari-6">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari7.webp" id="img-7"
            class="img-modal" alt="Museum Bahari-7">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari34.webp" id="img-34"
            class="img-modal" alt="Museum Bahari-8">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-34");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari9.webp" id="img-9"
            class="img-modal" alt="Museum Bahari-9">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari10.webp" id="img-10"
            class="img-modal" alt="Museum Bahari-10">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari11.webp" id="img-11"
            class="img-modal" alt="Museum Bahari-11">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari12.webp" id="img-12"
            class="img-modal" alt="Museum Bahari-12">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari13.webp" id="img-13"
            class="img-modal" alt="Museum Bahari-13">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari14.webp" id="img-14"
            class="img-modal" alt="Museum Bahari-14">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari15.webp" id="img-15"
            class="img-modal" alt="Museum Bahari-15">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari35.webp" id="img-35"
            class="img-modal" alt="Museum Bahari-16">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-35");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari17.webp" id="img-17"
            class="img-modal" alt="Museum Bahari-17">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari18.webp" id="img-18"
            class="img-modal" alt="Museum Bahari-18">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari19.webp" id="img-19"
            class="img-modal" alt="Museum Bahari-19">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari20.webp" id="img-20"
            class="img-modal" alt="Museum Bahari-20">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari21.webp" id="img-21"
            class="img-modal" alt="Museum Bahari-21">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari22.webp" id="img-22"
            class="img-modal" alt="Museum Bahari-22">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari23.webp" id="img-23"
            class="img-modal" alt="Museum Bahari-23">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari24.webp" id="img-24"
            class="img-modal" alt="Museum Bahari-24">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari25.webp" id="img-25"
            class="img-modal" alt="Museum Bahari-25">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari26.webp" id="img-26"
            class="img-modal" alt="Museum Bahari-26">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari27.webp" id="img-27"
            class="img-modal" alt="Museum Bahari-27">
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari28.webp" id="img-28"
            class="img-modal" alt="Museum Bahari-28">
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari29.webp" id="img-29"
            class="img-modal" alt="Museum Bahari-29">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-29");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari31.webp" id="img-31"
            class="img-modal" alt="Museum Bahari-31">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-31");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari32.webp" id="img-32"
            class="img-modal" alt="Museum Bahari-32">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-32");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari33.webp" id="img-33"
            class="img-modal" alt="Museum Bahari-33">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-33");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-bahari/Bahari16.webp" id="img-16"
            class="img-modal" alt="Museum Bahari-35">
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
