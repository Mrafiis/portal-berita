@extends('layouts.main')

@section('footer')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/galery.css') }}">
    <!-- script js -->
    <!-- <script src="{{ asset('js/galery.js') }}" defer></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- link font poppins -->
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;0,900;1,700&display=swap"
    rel="stylesheet"
    />
    <!-- link remix icon  -->
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <title>Galery | Landing Page</title>
  </head>
  <body>
    <!-- navbar -->
    <header>
      <section class="navigation">
        <div class="container">
          <div class="box-navigation">
            <div class="box">
              <h1 class="T">TASTY FOOD</h1><br><br><br>
                <h1 style="font-size:60px;"><strong>GALERI KAMI</strong></h1>
            </div>
            <div class="box">
              <ul>
                <li><a href="{{ route('home') }}">HOME</a></li>
                <li><a href="/about">TENTANG</a></li>
                <li><a href="/news">BERITA</a></li>
                <li><a href="/galery">GALERI</a></li>
                <li><a href="/contact">KONTAK</a></li>
              </ul>
            </div>
          </div>
        </div>
    </header>
    </section>
    <!-- slide image -->
    <section class="wraper">
      <div class="image-container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="border-radius: 10px;">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('imgasset/galeri-10.jpg') }}" class="card-img-top" alt="...">
            </div>
              <div class="carousel-item">
                <img src="{{ asset('imgasset/card-about.jpg') }}" class="card-img-top" alt="...">
            </div>
              <div class="carousel-item">
                <img src="{{ asset('imgasset/news-5.jpg') }}" class="card-img-top" alt="...">
            </div>
            </div>
        </div>
        <button class="" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <i class="ri-arrow-left-s-line button" id="prev" ></i>
            <span class="" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <i class="ri-arrow-right-s-line button" id="next"></i>
          <span class="" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
{{-- <div class="carousel">
  <img src="imgasset/galeri-10.jpg" alt="" />
  <img src="imgasset/news-5.jpg" alt="" />
  <img src="imgasset/galeri-11.jpg" alt="" />
  <img src="imgasset/news-10.jpg" alt="" />
</div>
<i class="ri-arrow-left-s-line button" id="prev" ></i>
<i class="ri-arrow-right-s-line button" id="next"></i> --}}
  <!-- galery section -->
  <section class="galery-section">
  <div class="container">
    <div class="row  row-cols-2 gap-3 justify-content-center">
      <div class="col col-md-2 col-sm-2">
        <img src="{{ asset('imgasset/card-about2.jpg') }}" class="card-img-top" alt="...">
        <img src="{{ asset('imgasset/galeri-1.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
        <img src="{{ asset('imgasset/news-5.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
      </div>
      <div class="col col-md-2">
        <img src="{{ asset('imgasset/galeri-11.jpg') }}" class="card-img-top" alt="...">
        <img src="{{ asset('imgasset/galeri-9.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
        <img src="{{ asset('imgasset/news-3.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
      </div>
      <div class="col col-md-2">
        <img src="{{ asset('imgasset/galeri-14.jpg') }}" class="card-img-top" alt="...">
        <img src="{{ asset('imgasset/news-10.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
        <img src="{{ asset('imgasset/galeri-1.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
      </div>
      <div class="col col-md-2">
        <img src="{{ asset('imgasset/galeri-7.jpg') }}" class="card-img-top" alt="...">
        <img src="{{ asset('imgasset/news-4.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
        <img src="{{ asset('imgasset/galeri-6.jpg') }}" class="card-img-top" alt="..." style="margin-top: 30px;">
      </div>
    </div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </body>
</html>
@endsection
