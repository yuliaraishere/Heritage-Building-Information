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
          <h3 style="margin-top: -100px !important">Referensi</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/sumber.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a href="{{ route('sumber.referensi') }}">Sumber Referensi</a></h3>
              <p>
                Sumber referensi adalah informasi yang memberikan pengunjung website informasi tentang
                asal-usul atau keandalan informasi yang disajikan pada website hbim. </p>
              <a href="{{ route('sumber.referensi') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div><!-- /.blog-one__single -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
          <div class="blog-one__single">
            <div class="blog-one__image">
              <img src="{{ asset('assets/img/archives/references/literatur-kesejarahan.png') }}" alt="">
            </div><!-- /.blog-one__image -->
            <div class="blog-one__content">
              <h3><a href="{{ route('literatur.sejarah') }}">Literatur Kesejarahan</a></h3>
              <p>
                Literatur Kesejarahan merujuk pada kumpulan teks, artikel, buku, dan sumber-sumber lain yang berfokus pada
                topik sejarah yang dapat diakses secara daring melalui website hbim. </p>
              <a href="{{ route('literatur.sejarah') }}"
                class="blog-one__link mt-3">Selengkapnya..</a><!-- /.blog-one__link -->
            </div><!-- /.blog-one__content -->
          </div><!-- /.blog-one__single -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.about-four -->
@endsection
