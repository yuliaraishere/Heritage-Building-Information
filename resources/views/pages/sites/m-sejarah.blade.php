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
          background-image: url(assets/img/sites/m-sejarah/paralax.webp);
          padding-top: 0 !important;
        ">
    <div class="container" style="padding-top: 200px !important">
      <h2 style="font-size: 70px !important" class="mb-2">
        MUSEUM SEJARAH JAKARTA
      </h2>
      <p style="color: #fff; font-size: 20px !important">
        Taman Fatahillah No.1, Pinangsia, Kec. Taman Sari, Kota Jakarta
        Barat, Daerah Khusus Ibukota Jakarta 11110
      </p>
      <a href="#about" class="thm-btn btn-style-one mt-3">Selengkapnya</a>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.video-one -->

  <section class="about-four" id="about">
    <div class="container">
      <div class="about-four__image wow fadeInRight" data-wow-duration="1500ms">
        <img src="assets/img/sites/m-sejarah/header.png" id="myImg1"
          alt="Litografi Staadhuisplein Batavia pada tahun 1754_dibuat oleh van Schley_Pe" class="img-modal"
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
                  Gedung Museum Sejarah Jakarta memiliki sejarah panjang yang
                  memiliki perbedaan fungsi dari masa ke masa.
                </p>
              </div>
              <!-- /.about-four__highlite-text -->
              <p>
                Sejarah awal yang diketahui adalah dengan dibangunnya balai
                kota <i>(Stadhuis)</i> pada tahun 1620 di Batavia yang berada di tepi
                timur Kali Besar. Mulanya gedung balai kota ini dibangun
                bertingkat satu dan penambahan tingkat kedua dilakukan pada
                masa-masa selanjutnya. Gedung ini bertahan selama enam tahun,
                kemudian dibongkar ketika Sultan Agung menyerang Batavia pada
                tahun 1626.
              </p>
              <p>
                Setelah itu, <i>Jan Pieterszoon Coen</i> selaku Gubernur Jenderal
                yang menjabat pada masa itu membangun kembali balai kota
                tersebut pada tahun 1627. Coen menjadikan balai kota ini
                sebagai pusat pemerintahan sekaligus kantornya. Gedung utama
                diperlebar pada tahun 1665 dengan penambahan satu ruangan di
                sisi barat dan timur bangunan. Kondisi balai kota semakin lama
                menjadi memburuk yang disebabkan oleh penurunan gedung secara
                perlahan yang diakibatkan oleh faktor berat gedung dan tanah
                yang tidak seimbang di Batavia.
              </p>
              <p>
                Hal tersebut dijadikan alasan untuk pembongkaran gedung untuk
                dibangun ulang pada tahun 1707 dibawah pemerintahan Gubernur
                Jenderal <i>Joan van Hoorn</i>. Pembangunan gedung balaikota yang
                baru selesai pada tahun 1710 dan diresmikan oleh Gubernur
                Jenderal <i>Abraham van Riebeeck</i>. Pembangunan gedung baru ini
                dilakukan dengan menaikkan lantai sekitar 56 cm tanpa mengubah
                pondasi yang sudah ada. Bangunan ini kemudian berfungsi
                sebagai kantor administrasi Batavia selama dua abad. Selain
                itu, bangunan balai kota ini juga berfungsi sebagai gedung
                Dewan Kotapraja <i>(College can Schepenen)</i> dan Dewan Pengadilan
                <i>(Raad van Justitie)</i>.
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
        <h3>Dokumentasi Museum Sejarah Jakarta</h3>
      </div>

      <!-- /Galery -->
      <div class="row" id="page-1">
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ1.webp" id="img-1"
            class="img-modal" alt="Museum Sejarah-1">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ2.webp" id="img-2"
            class="img-modal" alt="Museum Sejarah-2">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ3.webp" id="img-3"
            class="img-modal" alt="Museum Sejarah-3">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ4.webp" id="img-4"
            class="img-modal" alt="Museum Sejarah-4">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ5.webp" id="img-5"
            class="img-modal" alt="Museum Sejarah-5">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ6.webp" id="img-6"
            class="img-modal" alt="Museum Sejarah-6">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ7.webp" id="img-7"
            class="img-modal" alt="Museum Sejarah-7">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ8.webp" id="img-8"
            class="img-modal" alt="Museum Sejarah-8">
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ11.webp" id="img-11"
            class="img-modal" alt="Museum Sejarah-11">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ12.webp" id="img-12"
            class="img-modal" alt="Museum Sejarah-12">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ44.webp" id="img-44"
            class="img-modal" alt="Museum Sejarah-9">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-44");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ46.webp" id="img-46"
            class="img-modal" alt="Museum Sejarah-10">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-46");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ13.webp" id="img-13"
            class="img-modal" alt="Museum Sejarah-13">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ14.webp" id="img-14"
            class="img-modal" alt="Museum Sejarah-14">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ15.webp" id="img-15"
            class="img-modal" alt="Museum Sejarah-15">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ16.webp" id="img-16"
            class="img-modal" alt="Museum Sejarah-16">
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ17.webp" id="img-17"
            class="img-modal" alt="Museum Sejarah-17">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ18.webp" id="img-18"
            class="img-modal" alt="Museum Sejarah-18">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ19.webp" id="img-19"
            class="img-modal" alt="Museum Sejarah-19">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ20.webp" id="img-20"
            class="img-modal" alt="Museum Sejarah-20">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ21.webp" id="img-21"
            class="img-modal" alt="Museum Sejarah-21">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ22.webp" id="img-22"
            class="img-modal" alt="Museum Sejarah-22">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ23.webp" id="img-23"
            class="img-modal" alt="Museum Sejarah-23">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ24.webp" id="img-24"
            class="img-modal" alt="Museum Sejarah-24">
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

      <div class="row" id="page-3" style="display: none">
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ25.webp" id="img-25"
            class="img-modal" alt="Museum Sejarah-25">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ26.webp" id="img-26"
            class="img-modal" alt="Museum Sejarah-26">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ27.webp" id="img-27"
            class="img-modal" alt="Museum Sejarah-27">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ28.webp" id="img-28"
            class="img-modal" alt="Museum Sejarah-28">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ29.webp" id="img-29"
            class="img-modal" alt="Museum Sejarah-29">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ30.webp" id="img-30"
            class="img-modal" alt="Museum Sejarah-30">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-30");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ31.webp" id="img-31"
            class="img-modal" alt="Museum Sejarah-31">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ32.webp" id="img-32"
            class="img-modal" alt="Museum Sejarah-32">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ33.webp" id="img-33"
            class="img-modal" alt="Museum Sejarah-33">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ43.webp" id="img-43"
            class="img-modal" alt="Museum Sejarah-34">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-43");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ35.webp" id="img-35"
            class="img-modal" alt="Museum Sejarah-35">
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
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ36.webp" id="img-36"
            class="img-modal" alt="Museum Sejarah-36">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-36");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ37.webp" id="img-37"
            class="img-modal" alt="Museum Sejarah-37">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-37");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ38.webp" id="img-38"
            class="img-modal" alt="Museum Sejarah-38">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-38");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ39.webp" id="img-39"
            class="img-modal" alt="Museum Sejarah-39">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-39");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ40.webp" id="img-40"
            class="img-modal" alt="Museum Sejarah-40">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-40");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ41.webp" id="img-41"
            class="img-modal" alt="Museum Sejarah-41">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-41");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ42.webp" id="img-42"
            class="img-modal" alt="Museum Sejarah-42">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-42");
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-sejarah/MSJ45.webp" id="img-45"
            class="img-modal" alt="Museum Sejarah-43">
          {{-- Script Modal --}}
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("img-45");
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
