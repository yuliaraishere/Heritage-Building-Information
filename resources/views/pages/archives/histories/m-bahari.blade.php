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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-bahari/gallery-1.png" id="myImg2"
                alt="Bangunan Museum Bahari DKI Jakarta Masa Lampau - 1" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-bahari/gallery-2.png" id="myImg3"
                alt="Bangunan Museum Bahari DKI Jakarta Masa Lampau - 2" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-bahari/gallery-3.png" id="myImg4"
                alt="Bangunan Museum Bahari DKI Jakarta Masa Lampau - 3" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-bahari/gallery-4.png" id="myImg5"
                alt="Bangunan Museum Bahari DKI Jakarta Masa Lampau - 4" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-bahari/gallery-5.png" id="myImg6"
                alt="Bangunan Museum Bahari DKI Jakarta Masa Lampau - 5" class="img-modal" />

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
              <img src="assets/img/archives/history/m-bahari/litografi-1.png" style="border-radius: 15px" id="myImg7"
                alt="Litografi Kastil Batavia_Sisi Kanan Tampak Vierkant Poort dan Atap Gudang_F.D.Haan (1922)"
                class="img-modal" />

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
              <img src="assets/img/archives/history/m-bahari/litografi-2.png" style="border-radius: 15px" id="myImg8"
                alt="Lukisan Gudang Barat VOC dan Vierkant Port_Dilukis oleh Johaness Rach_F.D.Haan (1922) "
                class="img-modal" />

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
              <img src="assets/img/archives/history/m-bahari/litografi-3.png" style="border-radius: 15px" id="myImg9"
                alt="" class="img-modal" />

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
              <img src="assets/img/archives/history/m-bahari/litografi-4.png" style="border-radius: 15px"
                id="myImg10" alt="" class="img-modal" />

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
              <img src="assets/img/archives/history/m-bahari/litografi-5.png" style="border-radius: 15px"
                id="myImg11" alt="" class="img-modal" />

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
              <img src="assets/img/archives/history/m-bahari/peta-1.png" style="border-radius: 15px" id="myImg12"
                alt="Plan dari Bastion Zeeburg di Batavia_Wikipedia (diunduh 2023)" class="img-modal" />

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
              <img src="assets/img/archives/history/m-bahari/peta-2.png" style="border-radius: 15px" id="myImg13"
                alt="Peta Batavia tahun 1730an oleh J.Van Schley_Salah satu peta yang memuat keterangan Westzijde Pakhuizen_Atlas von Stolk (diunduh 2023)"
                class="img-modal" />

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
