<nav class="main-nav-one stricky main-nav-one__home-three">
  <div class="container">
    <div class="inner-container">
      <div class="logo-box">
        <a href="index.html">
          <img src="{{ asset('assets/img/logo-fix.png') }}" alt="" width="170" />
        </a>
        <a href="#" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
      </div>
      <!-- /.logo-box -->
      <div class="main-nav__main-navigation">
        <ul class="main-nav__navigation-box">
          <li><a href="{{ route('home') }}">Beranda</a></li>
          <li><a href="{{ route('about') }}">Tentang Kami</a></li>
          <li class="dropdown">
            <a href="#">Produk</a>
            <ul>
              <li><a href="{{ route('hbim') }}">HBIM</a></li>
              <li><a href="{{ route('point-clouds') }}">Point Cloud</a></li>
              <li><a href="{{ route('plan-section') }}">Plan & Section</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#">Situs</a>
            <ul style="width: 300px !important">
              <li>
                <a href="{{ route('situs.museum-sejarah') }}">Museum Sejarah Jakarta</a>
              </li>
              <li>
                <a href="{{ route('situs.museum-tekstil') }}">Museum Tekstil</a>
              </li>
              <li>
                <a href="{{ route('situs.museum-seni-rupa-dan-keramik') }}">Museum Seni Rupa dan Keramik</a>
              </li>
              <li>
                <a href="{{ route('situs.museum-wayang') }}">Museum Wayang</a>
              </li>
              <li>
                <a href="{{ route('situs.museum-bahari') }}">Museum Bahari</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#">Arsip</a>
            <ul>
              <li><a href="{{ route('arsip.sejarah') }}">Sejarah</a></li>
              <li><a href="{{ route('arsip.referensi') }}">Referensi</a></li>
              <li><a href="{{ route('arsip.glosarium') }}">Glosarium</a></li>
            </ul>
          </li>
          <li><a href="{{ route('keadaan-bangunan.index') }}">Kondisi Keterawatan Bangunan</a></li>
        </ul>
        <!-- /.main-nav__navigation-box -->
      </div>
      <!-- /.main-nav__main-navigation -->
    </div>
    <!-- /.inner-container -->
  </div>
  <!-- /.container -->
</nav>
<!-- /.main-nav-one -->

<div class="side-menu__block">

  <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
    <!-- /.fa fa-close --></a>

  <div class="side-menu__block-overlay custom-cursor__overlay">
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
  </div><!-- /.side-menu__block-overlay -->
  <div class="side-menu__block-inner ">

    <a href="{{ route('home') }}" class="side-menu__logo">
      <img src="{{ asset('assets/img/logo-fix.png') }}" alt="" width="170" />
    </a>
    <nav class="mobile-nav__container">
      <!-- content is loading via js -->
    </nav>
    <div class="side-menu__social">
      <a href="https://www.instagram.com/disbuddki?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
          class="fab fa-instagram"></i></a>
      <a href="https://www.facebook.com/disbuddki?mibextid=rS40aB7S9Ucbxw6v"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.linkedin.com/in/dinas-kebudayaan-provinsi-dki-jakarta-47aa9a261/"><i
          class="fab fa-linkedin"></i></a>
      <a href="https://youtube.com/@disbuddki1800?si=-rd1AQjUjYcXAez5"><i class="fab fa-youtube"></i></a>
    </div>
    <p class="side-menu__block__copy mt-4">@disbuddki</p>
  </div><!-- /.side-menu__block-inner -->
</div><!-- /.side-menu__block -->
