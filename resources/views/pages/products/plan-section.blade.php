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
        <img src="assets/img/products/plan-section/plan-section.png" alt="" style="border-radius: 15px" />
      </div>
      <!-- /.about-four__image -->
      <div class="row">
        <div class="col-lg-6">
          <div class="about-four__content">
            <div class="block-title">
              <p>Plan & Section</p>
              <h3>Heritage Building Plan and Section</h3>
            </div>
            <!-- /.block-title -->
            <div style="text-align: justify; color: #252930">
              <div class="about-four__highlite-text">
                <p>
                  Dalam konteks gedung museum, Plan dan Section membantu
                  mengkomunikasikan desain ruang, tata letak eksibisi, dan
                  elemen struktural.
                </p>
              </div>
              <!-- /.about-four__highlite-text -->
              <p>
                Penting untuk dicatat bahwa dalam konteks museum, elemen
                khusus seperti tata letak galeri, lokasi pameran, dan cara
                pencahayaan akan diperhatikan dengan seksama dalam <i>Plan and
                  Section</i> untuk memastikan bahwa desain mendukung tujuan dan
                kebutuhan museum.
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

  <section class="venue-one">
    <div class="container mb-5 pb-5">
      <div class="venue-one__top">
        <div class="block-title">
          <p>Plan & Section</p>
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
          <p>Plan & Section</p>
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
          <p>Plan & Section</p>
          <h3>Museum Seni Rupa dan Keramik</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <!-- /.venue-one__top -->

      <div class="row high-gutter">
        <div class="col-md-12">
          <img src="assets/img/products/plan-section/seni_rupa_keramik.png"
            alt="Plan & Section Gedung Museum Seni Rupa dan Keramik DKI Jakarta" id="myImg1" alt=""
            class="img-modal img-fluid" />

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
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container mb-5 pb-5">
      <div class="venue-one__top">
        <div class="block-title">
          <p>Plan & Section</p>
          <h3>Museum Wayang</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <!-- /.venue-one__top -->

      <div class="row high-gutter">
        <div class="col-md-12">
          <img src="assets/img/products/plan-section/wayang.png" alt="Plan & Section Gedung Museum Wayang DKI Jakarta"
            id="myImg2" class="img-modal img-fluid" />

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
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container mb-5 pb-5">
      <div class="venue-one__top">
        <div class="block-title">
          <p>Plan & Section</p>
          <h3>Museum Bahari</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <!-- /.venue-one__top -->

      <div class="row high-gutter">
        <div class="col-md-12">
          <img src="assets/img/products/plan-section/bahari.png" alt="Plan & Section Gedung Museum Wayang DKI Jakarta"
            id="myImg3" class="img-modal img-fluid" />

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
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.venue-one -->
@endsection
