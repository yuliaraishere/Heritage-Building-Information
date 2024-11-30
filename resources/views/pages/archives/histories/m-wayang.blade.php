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
        <img src="assets/img/sites/m-wayang/header.png" id="myImg1" alt="Museum Jakarta_Circa 1960_Tropenmuseum"
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
            <div style="text-align: justify; color: #252930">
              <!-- /.block-title -->
              <div class="about-four__highlite-text">
                <p>
                  Bangunan Museum Wayang sekarang adalah bangunan rumah dengan gaya <i>Neo-Rennaissance</i> yang
                  diperkirakan dibangun pada tahun 1939. Sebelum ada bangunan Museum Wayang lahan ini digunakan sebagai
                  lahan dua Gedung gereja.
                </p>
              </div>
              <!-- /.about-four__highlite-text -->
              <p>
                Gereja tersebut adalah Gereja Salib <i>(Kruyskerk)</i> dan Gereja Belanda Baru / Kubah
                <i>(Koppelkerk)</i>. Kedua gereja ini memiliki peranan penting dalam membentuk kelompok Kristen awal di
                Batavia. Berakhirnya kekuasaan VOC menyebabkan gereja Kubah menjadi lebih terlantar, ditambah invasi
                Inggris secara mendadak dibawah pimpinan Daendels. Pada tahun 1808 Daendels memerintahkan untuk melakukan
                pembongkaran bangunan gereja, kemudian dia menjual puing-puing bangunan dan nisan kepada perusahaan <i>Geo
                  Wehry en Co</i>.
              </p>
              <p>
                Pada tahun 1937 reruntuhan gereja tersebut dibeli oleh <i>Het Bataviaasch Genootschap</i>, dan kemudian
                diserahkan kepada <i>Bataviaasch Genootschap van Kunsten en Wetenschappen</i>, yakni sejenis Lembaga
                Kebudayaan yang mengurusi ilmu kesenian dan kebudayaan di Batavia. Tahun 1939, Dinas Purbakala mencoba
                melakukan penggalian untuk mencari makam J.P Coen.
              </p>
              <p>
                Bersamaan dengan itu pula dilakukan pemugaran dengan mengikuti gaya rumah Belanda. Pada tanggal 22
                Desember 1939, Gubernur Jenderal <i>Tjarda van Starkenborgh</i> meresmikan gedung ini sebagai museum
                Batavia Lama. Nama museum Batavia Lama ini juga segera berganti ketika kependudukan Jepang. Pada masa
                tersebut museum ini menjadi Museum Jakarta Lama yang berada dibawah Lembaga Kebudayaan Indonesia. Bangunan
                ini diresmikan menjadi museum Wayang pada tanggal 13 Agustus 1975 oleh Gubernur Jakarta saat itu yakni Ali
                Sadikin.
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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-wayang/gallery-1.png" id="myImg2"
                alt="Bangunan Museum Wayang DKI Jakarta Masa Lampau - 1" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-wayang/gallery-2.png" id="myImg3"
                alt="Bangunan Museum Wayang DKI Jakarta Masa Lampau - 2" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-wayang/gallery-3.png" id="myImg4"
                alt="Bangunan Museum Wayang DKI Jakarta Masa Lampau - 3" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-wayang/gallery-4.png" id="myImg5"
                alt="Bangunan Museum Wayang DKI Jakarta Masa Lampau - 4" class="img-modal" />

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
              <img style="border-radius: 15px" src="assets/img/archives/history/m-wayang/gallery-5.png" id="myImg6"
                alt="Bangunan Museum Wayang DKI Jakarta Masa Lampau - 5" class="img-modal" />

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
              <img src="assets/img/archives/history/m-wayang/litografi-1.png" style="border-radius: 15px" id="myImg7"
                alt="" class="img-modal" />

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
              <img src="assets/img/archives/history/m-wayang/litografi-2.png" style="border-radius: 15px" id="myImg8"
                alt="Gambar irisan Gereja Belanda Baru_Digambar oleh Johann Wolfgang Heydt (1740)_Sumber_ Koninklijke Bibliotheek via Atlas of Mutual Heritage"
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
              <img src="assets/img/archives/history/m-wayang/litografi-3.png" style="border-radius: 15px" id="myImg9"
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
              <img src="assets/img/archives/history/m-wayang/litografi-4.png" style="border-radius: 15px"
                id="myImg10"
                alt="Denah Gereja Belanda Baru_Digambar oleh Johann Wolfgang Heydt (1740)_Sumber_ Koninklijke Bibliotheek via Atlas of Mutual Heritage (Diunduh 2023)"
                class="img-modal" />

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
              <img src="assets/img/archives/history/m-wayang/litografi-5.png" style="border-radius: 15px"
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
              <img src="assets/img/archives/history/m-wayang/peta-1.png" style="border-radius: 15px" id="myImg12"
                alt="" class="img-modal" />

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
              <img src="assets/img/archives/history/m-wayang/peta-2.png" style="border-radius: 15px" id="myImg13"
                alt="" class="img-modal" />

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
