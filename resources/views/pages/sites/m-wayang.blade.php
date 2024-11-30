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
          background-image: url(assets/img/sites/m-wayang/paralax.png);
          padding-top: 0 !important;
        ">
    <div class="container" style="padding-top: 200px !important">
      <h2 style="font-size: 70px !important" class="mb-2">MUSEUM WAYANG</h2>
      <p style="color: #fff; font-size: 20px !important">
        Jl. Pintu Besar Utara No.27 Pinangsia, RT.3/RW.6, Kota Tua, Kec.
        Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11110
      </p>
      <a href="#about" class="thm-btn btn-style-one mt-3">Selengkapnya</a>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.video-one -->

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

  <section class="collection-two collection-two__home-three" style="background-color: #f6f8fa">
    <div class="container">
      <div class="block-title-two text-center">
        <div class="block-title-two__line"></div>
        <!-- /.block-title-two__line -->
        <p>Gallery</p>
        <h3>Dokumentasi Museum Wayang Jakarta</h3>
      </div>

      <!-- /Galery -->
      <div class="row" id="page-1">
        <div class="col-md-3 mb-3">
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang17.webp"
            id="img-17" class="img-modal" alt="Museum Wayang-17">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang2.webp"
            id="img-2" class="img-modal" alt="Museum Wayang-2">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang3.webp"
            id="img-3" class="img-modal" alt="Museum Wayang-3">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang4.webp"
            id="img-4" class="img-modal" alt="Museum Wayang-4">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang5.webp"
            id="img-5" class="img-modal" alt="Museum Wayang-5">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang6.webp"
            id="img-6" class="img-modal" alt="Museum Wayang-6">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang7.webp"
            id="img-7" class="img-modal" alt="Museum Wayang-7">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang8.webp"
            id="img-8" class="img-modal" alt="Museum Wayang-8">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang9.webp"
            id="img-9" class="img-modal" alt="Museum Wayang-9">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang10.webp"
            id="img-10" class="img-modal" alt="Museum Wayang-10">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang11.webp"
            id="img-11" class="img-modal" alt="Museum Wayang-11">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang12.webp"
            id="img-12" class="img-modal" alt="Museum Wayang-12">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang13.webp"
            id="img-13" class="img-modal" alt="Museum Wayang-13">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang14.webp"
            id="img-14" class="img-modal" alt="Museum Wayang-14">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang15.webp"
            id="img-15" class="img-modal" alt="Museum Wayang-15">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang16.webp"
            id="img-16" class="img-modal" alt="Museum Wayang-16">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang1.webp"
            id="img-1" class="img-modal" alt="Museum Wayang-1">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang18.webp"
            id="img-18" class="img-modal" alt="Museum Wayang-18">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang19.webp"
            id="img-19" class="img-modal" alt="Museum Wayang-19">
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
          <img width="100%" style="border-radius: 15px" src="assets/img/sites/m-wayang/Museum Wayang20.webp"
            id="img-20" class="img-modal" alt="Museum Wayang-20">
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
