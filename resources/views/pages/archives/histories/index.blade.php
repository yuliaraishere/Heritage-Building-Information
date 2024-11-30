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
      <!-- /.about-four__image -->
      <div class="venue-one__top text-center">
        <div class="block-title">
          <h3 style="margin-top: -100px !important">Arsip Sejarah</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <div class="row high-gutter" style="justify-content: center">
        <div class="col-lg-4 mb-3">
          <div class="venue-one__single">
            <img src="assets/img/archives/history/a-sejarah.png" style="border-radius: 15px" id="myImg1"
              class="img-modal" alt="Gedung Museum Sejarah DKI Jakarta Masa Lampau" />

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

            <!-- /.venue-one__image -->
            <div class="venue-one__content">
              <a href="{{ route('arsip.museum-sejarah') }}" class="thm-btn venue-one__btn">
                Museum Sejarah Jakarta</a><!-- /.thm-btn venue-one__btn -->
            </div>
            <!-- /.venue-one__content -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4 mb-3">
          <div class="venue-one__single">
            <img src="assets/img/archives/history/a-tekstil.png" style="border-radius: 15px" id="myImg2"
              class="img-modal" alt="Gedung Museum Tekstil DKI Jakarta Masa Lampau" />

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
              <a href="{{ route('arsip.museum-tekstil') }}" class="thm-btn venue-one__btn">
                Museum Tekstil</a><!-- /.thm-btn venue-one__btn -->
            </div>
            <!-- /.venue-one__content -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4 mb-3">
          <div class="venue-one__single">
            <img src="assets/img/archives/history/a-seni-rupa.png" style="border-radius: 15px" id="myImg3"
              class="img-modal"
              alt="Bangunan Raad van Justite tahun 1917_difoto oleh Tio Tek Hong_KITLV (diunduh 2023)" />

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
              <a href="{{ route('arsip.museum-seni-rupa-dan-keramik') }}" class="thm-btn venue-one__btn">Museum Seni Rupa
                dan
                Keramik</a><!-- /.thm-btn venue-one__btn -->
            </div>
            <!-- /.venue-one__content -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4 mb-3">
          <div class="venue-one__single">
            <img src="assets/img/archives/history/a-wayang.png" style="border-radius: 15px" id="myImg4"
              class="img-modal" alt="Museum Jakarta_Circa 1960_Tropenmuseum" />

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
              <a href="{{ route('arsip.museum-wayang') }}" class="thm-btn venue-one__btn">Museum
                Wayang</a><!-- /.thm-btn venue-one__btn -->
            </div>
            <!-- /.venue-one__content -->
          </div>
          <!-- /.venue-one__single -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4 mb-3">
          <div class="venue-one__single">
            <img src="assets/img/archives/history/a-bahari.png" style="border-radius: 15px" id="myImg5"
              class="img-modal"
              alt="Kompleks Gudang Barat (Westzjidsche Pakhuizen) dari sisi arah Bastion Vierkant (Kanal)_F.D.Haan (1922)" />

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
              <a href="{{ route('arsip.museum-bahari') }}" class="thm-btn venue-one__btn">Museum
                Bahari</a><!-- /.thm-btn venue-one__btn -->
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
  <!-- /.about-four -->
@endsection
