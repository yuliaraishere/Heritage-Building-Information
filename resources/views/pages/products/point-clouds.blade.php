@extends('layouts.master')
@section('content')
  <!-- The Modal -->
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>

  <section class="about-four">
    <div class="container">
      <div class="about-four__image wow fadeInRight" data-wow-duration="1500ms">
        <img src="assets/img/products/point-clouds/point-clouds.png" alt="" style="border-radius: 15px" />
      </div>
      <!-- /.about-four__image -->
      <div class="row">
        <div class="col-lg-6">
          <div class="about-four__content">
            <div class="block-title">
              <p>Point Cloud</p>
              <h3>Point Cloud Heritage 3D</h3>
            </div>
            <!-- /.block-title -->
            <div style="text-align: justify; color: #252930">
              <div class="about-four__highlite-text">
                <p>
                  <i>Point Cloud</i> adalah sebuah representasi data 3D yang terdiri
                  dari sejumlah besar titik (atau poin) dalam ruang tiga
                  dimensi. Setiap titik dalam <i>point cloud</i> menyimpan informasi
                  tentang posisi koordinat 3Dnya (x, y, dan z) serta mungkin
                  atribut tambahan seperti warna, intensitas, atau nilai lain
                  yang terkait dengan titik tersebut.
                </p>
              </div>
              <!-- /.about-four__highlite-text -->
            </div>
            <p>
              <i>Point Cloud</i> digunakan dalam berbagai aplikasi, termasuk
              pemindaian laser 3D, pemodelan bangunan, pemetaan lingkungan,
              rekayasa, pembuatan film, dan banyak lagi.
            </p>
            <p>
              Pengumpulan data <i>point cloud</i> biasanya dilakukan menggunakan
              teknologi seperti pemindai laser 3D <i>(lidar)</i>, kamera <i>stereo</i>,
              atau pemindai struktural berbasis cahaya.
            </p>
            <p>
              <i>Point Cloud</i> merupakan format data yang penting dalam dunia
              pemetaan 3D dan analisis spasial. Mereka menyediakan data
              dasar untuk banyak aplikasi yang melibatkan pemodelan dan
              analisis objek atau lingkungan 3D.
            </p>
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

  <section class="venue-one">
    <div class="container mb-5 pb-5">
      <div class="venue-one__top">
        <div class="block-title">
          <p>POINT CLOUD</p>
          <h3>Museum Sejarah Jakarta</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <!-- /.venue-one__top -->

      <div class="row high-gutter">
        <div class="col-md-12"></div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container mb-5 pb-5">
      <div class="venue-one__top">
        <div class="block-title">
          <p>POINT CLOUD</p>
          <h3>Museum Tekstil</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <!-- /.venue-one__top -->

      <div class="row high-gutter">
        <div class="col-md-12"></div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container mb-5 pb-5">
      <div class="venue-one__top">
        <div class="block-title">
          <p>POINT CLOUD</p>
          <h3>Museum Seni Rupa dan Keramik</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <!-- /.venue-one__top -->

      <div class="row high-gutter">
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-keramik-1.png"
                alt="Point Cloud Gedung Museum Seni Rupa dan Keramik DKI Jakarta - 1" id="myImg1" class="img-modal"
                height="300" style="border-radius: 15px" />

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
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-keramik-2.png"
                alt="Point Cloud Gedung Museum Seni Rupa dan Keramik DKI Jakarta - 2" id="myImg2" class="img-modal"
                height="300" style="border-radius: 15px" />

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
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-keramik-3.png"
                alt="Point Cloud Gedung Museum Seni Rupa dan Keramik DKI Jakarta - 3" id="myImg3" class="img-modal"
                height="300" style="border-radius: 15px" />

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
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-keramik-4.png"
                alt="Point Cloud Gedung Museum Seni Rupa dan Keramik DKI Jakarta - 4" id="myImg4" class="img-modal"
                height="300" style="border-radius: 15px" />

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
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-keramik-5.png"
                alt="Point Cloud Gedung Museum Seni Rupa dan Keramik DKI Jakarta - 5" id="myImg5" class="img-modal"
                height="300" style="border-radius: 15px" />

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
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-keramik-6.png"
                alt="Point Cloud Gedung Museum Seni Rupa dan Keramik DKI Jakarta - 6" id="myImg6" class="img-modal"
                height="300" style="border-radius: 15px" />

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
            <!-- /.venue-one__image -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-keramik-7.png"
                alt="Point Cloud Gedung Museum Seni Rupa dan Keramik DKI Jakarta - 7" id="myImg7" class="img-modal"
                height="300" style="border-radius: 15px" />

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
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-keramik-8.png"
                alt="Point Cloud Gedung Museum Seni Rupa dan Keramik DKI Jakarta - 8" id="myImg8" class="img-modal"
                height="300" style="border-radius: 15px" />

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
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container mb-5 pb-5">
      <div class="venue-one__top">
        <div class="block-title">
          <p>POINT CLOUD</p>
          <h3>Museum Wayang</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <!-- /.venue-one__top -->

      <div class="row high-gutter">
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-wayang-1.png"
                alt="Point Cloud Gedung Museum Wayang DKI Jakarta - 1" id="myImg9" class="img-modal" height="300"
                style="border-radius: 15px" />

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
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-wayang-2.png"
                alt="Point Cloud Gedung Museum Wayang DKI Jakarta - 2" id="myImg10" class="img-modal" height="300"
                style="border-radius: 15px" />

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
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-wayang-3.png"
                alt="Point Cloud Gedung Museum Wayang DKI Jakarta - 3" id="myImg11" class="img-modal" height="300"
                style="border-radius: 15px" />

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
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-wayang-4.png"
                alt="Point Cloud Gedung Museum Wayang DKI Jakarta - 4" id="myImg12" class="img-modal" height="300"
                style="border-radius: 15px" />

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
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-wayang-5.png"
                alt="Point Cloud Gedung Museum Wayang DKI Jakarta - 5" id="myImg13" class="img-modal" height="300"
                style="border-radius: 15px" />

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

    <div class="container mb-5 pb-5">
      <div class="venue-one__top">
        <div class="block-title">
          <p>POINT CLOUD</p>
          <h3>Museum Bahari</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <!-- /.venue-one__top -->

      <div class="row high-gutter">
        <div class="col-lg-4">
          <div class="venue-one__single">
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-bahari-1.png"
                alt="Point Cloud Gedung Museum Bahari DKI Jakarta - 1" id="myImg14" class="img-modal" height="300"
                style="border-radius: 15px" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg14");
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
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-bahari-2.png"
                alt="Point Cloud Gedung Museum Bahari DKI Jakarta - 2" id="myImg15" class="img-modal" height="300"
                style="border-radius: 15px" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg15");
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
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-bahari-3.png"
                alt="Point Cloud Gedung Museum Bahari DKI Jakarta - 3" id="myImg16" class="img-modal" height="300"
                style="border-radius: 15px" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg16");
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
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-bahari-4.png"
                alt="Point Cloud Gedung Museum Bahari DKI Jakarta - 4" id="myImg17" class="img-modal" height="300"
                style="border-radius: 15px" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg17");
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
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-bahari-5.png"
                alt="Point Cloud Gedung Museum Bahari DKI Jakarta - 5" id="myImg18" class="img-modal" height="300"
                style="border-radius: 15px" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg18");
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
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-bahari-6.png"
                alt="Point Cloud Gedung Museum Bahari DKI Jakarta - 6" id="myImg19" class="img-modal" height="300"
                style="border-radius: 15px" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg19");
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
            <div class="venue-one__image mb-2">
              <img src="assets/img/products/point-clouds/point-clouds-bahari-7.png"
                alt="Point Cloud Gedung Museum Bahari DKI Jakarta - 7" id="myImg20" class="img-modal" height="300"
                style="border-radius: 15px" />

              {{-- Script Modal --}}
              <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg20");
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
