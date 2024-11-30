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
          <h3 style="margin-top: -100px !important">Sumber Referensi</h3>
        </div>
        <!-- /.block-title -->
      </div>

      <div class="row">
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-1.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/A Built Heritage Information System based on Point Clouds Data.pdf') }}">A
                  Built Heritage Information System based on Point Clouds Data</a></h3>
              <p>
                Oleh: Florent Poux, dkk </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/A Built Heritage Information System based on Point Clouds Data.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-2.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Archaeology and Heritage Consevation.pdf') }}">Archaeology
                  and Heritage Consevation</a></h3>
              <p>
                Oleh: Jhon Carman </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Archaeology and Heritage Consevation.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-3.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Architectural Information Modelling for Virtual Heritage Application.pdf') }}">Architectural
                  Information Modelling for Virtual Heritage Application</a></h3>
              <p>
                Oleh: P. Pauwls, dkk </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Architectural Information Modelling for Virtual Heritage Application.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-4.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a href="{{ asset('assets/pdf/sumber-referensi/Assessing Site Significance.pdf') }}">Assessing Site
                  Significance</a></h3>
              <p>
                Oleh: Donald L. Hardesty </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Assessing Site Significance.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-5.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a href="{{ asset('assets/pdf/sumber-referensi/BIM for Heritage Science.pdf') }}">BIM for Heritage
                  Science</a></h3>
              <p>
                Oleh: Danae Phaedra Pocobelli, dkk </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/BIM for Heritage Science.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-6.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Building Information Modelling and Heritage Documentation.pdf') }}">Building
                  Information Modelling and Heritage Documentation</a></h3>
              <p>
                Oleh: Stephen Fai, dkk </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Building Information Modelling and Heritage Documentation.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-7.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Building_Information_Modelling_for_Cultural_Herita.pdf') }}">Building
                  Information Modelling for Cultural Herita</a>
              </h3>
              <p>
                Oleh: S. Logotheis, dkk </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Building_Information_Modelling_for_Cultural_Herita.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-8.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Conservation Principles _ Policies and Guidances.pdf') }}">Conservation
                  Principles _ Policies and Guidances</a></h3>
              <p>
                Oleh: Lord Bounce Lockhart </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Conservation Principles _ Policies and Guidances.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-9.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Current State of the Art Historic Building Information Modelling.pdf') }}">Current
                  State of the Art Historic Building Information Modelling</a></h3>
              <p>
                Oleh: C. Done & M. Murphy </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Current State of the Art Historic Building Information Modelling.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-10.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Digital Transformation of the Design, Construction, and Management Processes of the Built Environment.pdf') }}">Digital
                  Transformation of the Design, Construction, and Management Processes of the Built Environment</a></h3>
              <p>
                Oleh: Bruno Daniotti, dkk </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Digital Transformation of the Design, Construction, and Management Processes of the Built Environment.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-11.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/From Point Cloud Data to Building Information Modelling (An Automatic Parametric Workflow for Heritage).pdf') }}">From
                  Point Cloud Data to Building Information Modelling (An Automatic Parametric Workflow for Heritage)</a>
              </h3>
              <p>
                Oleh: Mersop Andriasyan, dll </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/From Point Cloud Data to Building Information Modelling (An Automatic Parametric Workflow for Heritage).pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-12.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/HBIM of the Wang Stave Church in Karpacz - Case Study.pdf') }}">HBIM
                  of the Wang Stave Church in Karpacz - Case Study</a></h3>
              <p>
                Oleh: Dominika Sztwiertnia, dkk </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/HBIM of the Wang Stave Church in Karpacz - Case Study.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-13.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Heritage Building Information Modelling (Towards a New Era of Interoperability).pdf') }}">Heritage
                  Building Information Modelling (Towards a New Era of Interoperability)</a></h3>
              <p>
                Oleh: Elbaz, dkk </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Heritage Building Information Modelling (Towards a New Era of Interoperability).pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-14.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Holistic Heritage Building Inforation Modelling (From Nodes to Hub Networking, Vocabularies, and Repositories).pdf') }}">Holistic
                  Heritage Building Inforation Modelling (From Nodes to Hub Networking, Vocabularies, and
                  Repositories)</a></h3>
              <p>
                Oleh: M. Previtali, dkk </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Holistic Heritage Building Inforation Modelling (From Nodes to Hub Networking, Vocabularies, and Repositories).pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-15.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a href="{{ asset('assets/pdf/sumber-referensi/Identyfying Historic Places.pdf') }}">Identyfying
                  Historic Places</a></h3>
              <p>
                Oleh: Alberta </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Identyfying Historic Places.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-16.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Integrating HBIM Tools in the Application of Sustainable Retrofitting of Heritage Buildings in Egypt.pdf') }}">Integrating
                  HBIM Tools in the Application of Sustainable Retrofitting of Heritage Buildings in Egypt</a></h3>
              <p>
                Oleh: Laila M. Khoedir </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Integrating HBIM Tools in the Application of Sustainable Retrofitting of Heritage Buildings in Egypt.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-17.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Integration of Historic Building Information Modeling (HBIM).pdf') }}">Integration
                  of Historic Building Information Modeling (HBIM)</a></h3>
              <p>
                Oleh: Conor Dore & M. Murphy </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Integration of Historic Building Information Modeling (HBIM).pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-18.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Literatur Review_ TEKNOLOGI dalam DOKUMENTASI BANGUNAN PUSAKA.pdf') }}">Literatur
                  Review TEKNOLOGI dalam DOKUMENTASI BANGUNAN PUSAKA</a></h3>
              <p>
                Oleh: Istiana Adianti </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Literatur Review_ TEKNOLOGI dalam DOKUMENTASI BANGUNAN PUSAKA.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-19.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Mechatronics for Cultural Heritage.pdf') }}">Mechatronics
                  for Cultural Heritage</a></h3>
              <p>
                Oleh: Erika Ottaviano, dkk </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Mechatronics for Cultural Heritage.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-20.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/PEMODELAN_TIGA_DIMENSI_3D_BANGUNAN_CAGAR_BUDAYA_ME.pdf') }}">PEMODELAN
                  TIGA DIMENSI 3D BANGUNAN CAGAR BUDAYA ME</a></h3>
              <p>
                Oleh: Wijiyanto & Mi Putu Praja Chintya </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/PEMODELAN_TIGA_DIMENSI_3D_BANGUNAN_CAGAR_BUDAYA_ME.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber-referensi/pdf-21.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a
                  href="{{ asset('assets/pdf/sumber-referensi/Scan to Building Information Modelling VS HBIM in Parametric Heritage Building Information.pdf') }}">Scan
                  to Building Information Modelling VS HBIM in Parametric Heritage Building Information</a></h3>
              <p>
                Oleh: Mohamed E. Elsaid </p>
              <a href="{{ asset('assets/pdf/sumber-referensi/Scan to Building Information Modelling VS HBIM in Parametric Heritage Building Information.pdf') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div>
        </div>
      </div><!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.about-four -->
@endsection
