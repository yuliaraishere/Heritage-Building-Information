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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-seni-rupa/gallery-1.png" id="myImg2"
                alt="Bangunan Museum Seni Rupa dan Keramik Masa Lampau - 1" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-seni-rupa/gallery-2.png" id="myImg3"
                alt="Bangunan Museum Seni Rupa dan Keramik Masa Lampau - 2" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-seni-rupa/gallery-3.png" id="myImg4"
                alt="Bangunan Museum Seni Rupa dan Keramik Masa Lampau - 3" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-seni-rupa/gallery-4.png" id="myImg5"
                alt="Bangunan Museum Seni Rupa dan Keramik Masa Lampau - 4" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-seni-rupa/gallery-5.png" id="myImg6"
                alt="Bangunan Museum Seni Rupa dan Keramik Masa Lampau - 5" class="img-modal" />

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
              <img src="assets/img/archives/history/m-seni-rupa/litografi-1.png" style="border-radius: 15px"
                id="myImg7" class="img-modal"
                alt="Litografi Staadhuisplein Batavia pada tahun 1754_dibuat oleh van Schley_Pe" />

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
              <img src="assets/img/archives/history/m-seni-rupa/litografi-2.png" style="border-radius: 15px"
                id="myImg8" class="img-modal"
                alt="Pemandangan Kanal Harimau di Batavia pada Abad ke-16_17_Dilukis oleh J" />

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
              <img src="assets/img/archives/history/m-seni-rupa/litografi-3.png" style="border-radius: 15px"
                id="myImg9" class="img-modal" alt="" />

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
              <img src="assets/img/archives/history/m-seni-rupa/litografi-4.png" style="border-radius: 15px"
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
              <img src="assets/img/archives/history/m-seni-rupa/litografi-5.png" style="border-radius: 15px"
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
              <img src="assets/img/archives/history/m-seni-rupa/peta-1.png" style="border-radius: 15px" id="myImg12"
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
              <img src="assets/img/archives/history/m-seni-rupa/peta-2.png" style="border-radius: 15px" id="myImg13"
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
