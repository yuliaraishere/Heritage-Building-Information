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
        <img src="{{ asset('assets/img/archives/history/m-sejarah/header.png') }}" id="myImg1"
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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-sejarah/gallery-1.png" id="myImg2"
                class="img-modal" alt="Gedung Museum Sejarah DKI Jakarta Masa Lampau - 1" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-sejarah/gallery-2.png" id="myImg3"
                class="img-modal" alt="Gedung Museum Sejarah DKI Jakarta Masa Lampau - 2" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-sejarah/gallery-3.png" id="myImg4"
                class="img-modal" alt="Gedung Museum Sejarah DKI Jakarta Masa Lampau - 3" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-sejarah/gallery-4.png" id="myImg5"
                class="img-modal" alt="Gedung Museum Sejarah DKI Jakarta Masa Lampau - 4" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-sejarah/gallery-5.png" id="myImg6"
                class="img-modal" alt="Gedung Museum Sejarah DKI Jakarta Masa Lampau - 5" />

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
              <img src="assets/img/archives/history/m-sejarah/litografi-1.png" style="border-radius: 15px" id="myImg7"
                class="img-modal" alt="Litografi Staadhuisplein Batavia pada tahun 1754_dibuat oleh van Schley_Pe" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg7");
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
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image">
              <img src="assets/img/archives/history/m-sejarah/litografi-2.png" style="border-radius: 15px" id="myImg8"
                class="img-modal" alt="Pemandangan Kanal Harimau di Batavia pada Abad ke-16_17_Dilukis oleh J" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg8");
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
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image">
              <img src="assets/img/archives/history/m-sejarah/litografi-3.png" style="border-radius: 15px" id="myImg9"
                class="img-modal" alt="" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg9");
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
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image">
              <img src="assets/img/archives/history/m-sejarah/litografi-4.png" style="border-radius: 15px"
                id="myImg10" class="img-modal" alt="" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg10");
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
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image">
              <img src="assets/img/archives/history/m-sejarah/litografi-5.png" style="border-radius: 15px"
                id="myImg11" class="img-modal" alt="" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg11");
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
            <div class="venue-one__image">
              <img src="assets/img/archives/history/m-sejarah/peta-1.png" style="border-radius: 15px" id="myImg12"
                class="img-modal" alt="Peta Batavia tahun 1897 oleh Bemmelen & Hover_Salah satu peta kuno yang me" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg12");
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
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-6">
          <div class="venue-one__single">
            <div class="venue-one__image">
              <img src="assets/img/archives/history/m-sejarah/peta-2.png" style="border-radius: 15px" id="myImg13"
                class="img-modal" alt="Peta Batavia tahun 1750_Jacques-Nicolas Bellin_Menunjukkan area C (Kanal H" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg13");
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
