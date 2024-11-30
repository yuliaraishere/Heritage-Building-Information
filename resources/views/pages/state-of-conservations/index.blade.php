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
          <h3 style="margin-top: -100px !important">Keadaan Bangunan Situs Budaya DKI Jakarta</h3>
        </div>
        <!-- /.block-title -->
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-12 mb-4">
          <iframe src="{{ asset('assets/pdf/state-of-conservations/LAPORAN KONDISI BANGUNAN.pdf') }}" height="800"
            style="width: 100%"></iframe>
        </div>
        <!-- /.col-lg-10 -->
        <!-- /.row -->
      </div>
      <!-- /.container -->
  </section>
  <!-- /.about-four -->
@endsection
