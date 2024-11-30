<footer class="site-footer" style="background-color: #252930;">
  <div class="site-footer__upper">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="footer-widget footer-widget__about">
            <p style="text-align: justify">
              HBIM Jakarta adalah sistem terintegrasi pendokumentasian
              bangunan-bangunan cagar budaya yang ada di wilayah DKI
              Jakarta dengan menggunakan teknologi berbasis digital.
            </p>
          </div>
          <!-- /.footer-widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-2">
          <div class="footer-widget footer-widget__links">
            <h3 class="footer-widget__title">Halaman</h3>
            <!-- /.footer-widget__title -->
            <ul class="footer-widget__links-list list-unstyled">
              <li>
                <a href="{{ route('about') }}">Tentang Kami</a>
              </li>
              <li>
                <a href="{{ route('hbim') }}">Produk</a>
              </li>
              <li>
                <a href="{{ route('situs.museum-sejarah') }}">Situs</a>
              </li>
              <li>
                <a href="{{ route('arsip.sejarah') }}">Arsip</a>
              </li>
              <li>
                <a href="{{ route('keadaan-bangunan.museum-sejarah') }}">Keadaan Bangunan</a>
              </li>
            </ul>
            <!-- /.footer-widget__links-list -->
          </div>
          <!-- /.footer-widget -->
        </div>
        <!-- /.col-lg-2 -->
        <div class="col-lg-3">
          <div class="footer-widget footer-widget__contact">
            <h3 class="footer-widget__title">Kontak</h3>
            <!-- /.footer-widget__title -->
            <p><a href="https://maps.app.goo.gl/5JKPQBWuhtiwtAuK9">
                Dinas Kebudayaan <br />
                DKI Jakarta, Indonesia
              </a></p>
            <p><a href="#">(+62) 81234567891</a></p>
            <p><a href="#">hbimjakarta@gmail.com</a></p>
          </div>
          <!-- /.footer-widget -->
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-3">
          <div class="footer-widget footer-widget__open-hrs">
            <h3 class="footer-widget__title">Ikuti Kami</h3>
            <!-- /.footer-widget__title -->
            <a href="https://www.instagram.com/disbuddki?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
              style="color: #aaa081">
              <i class="fa-brands fa-square-instagram fa-2x" style="margin-right: 5px"></i>
            </a>
            <a href="https://www.facebook.com/disbuddki?mibextid=rS40aB7S9Ucbxw6v" style="color: #aaa081">
              <i class="fa-brands fa-facebook fa-2x" style="margin-right: 5px"></i>
            </a>
            <a href="https://www.linkedin.com/in/dinas-kebudayaan-provinsi-dki-jakarta-47aa9a261/"
              style="color: #aaa081">
              <i class="fa-brands fa-linkedin fa-2x" style="margin-right: 5px"></i>
            </a>
            <a href="https://youtube.com/@disbuddki1800?si=-rd1AQjUjYcXAez5" style="color: #aaa081">
              <i class="fa-brands fa-youtube fa-2x" style="margin-right: 5px"></i>
            </a>
          </div>
          <!-- /.footer-widget -->
        </div>
        <!-- /.col-lg-3 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.site-footer__upper -->
  <div class="site-footer__bottom">
    <div class="container">
      <div class="inner-container">
        <p><i>Copyright</i> © <?php echo date('Y'); ?> Dinas Kebudayaan Provinsi DKI Jakarta.</p>
        <a href="#top" class="site-footer__bottom-logo">
          <img src="{{ asset('assets/img/logo.png') }}" alt="" />
        </a>
        <div class="site-footer__bottom-links">
          <i>Terms & conditions Privacy policy & Terms of use</i>
        </div>
        <!-- /.site-footer__bottom-links -->
      </div>
      <!-- /.inner-container -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.site-footer__bottom -->
</footer>
<!-- /.site-footer -->
