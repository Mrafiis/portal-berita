@extends('layouts.main')

@section('footer')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link font poppins -->
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;0,900;1,700&display=swap"
    rel="stylesheet"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <title>News | Landing Page</title>
  </head>
  <body>
    <!-- navbar -->
    <header>
      <section class="navigation">
        <div class="container">
          <div class="box-navigation">
            <div class="box">
              <h1 class="T">TASTY FOOD</h1><br><br><br>
                <h1 style="font-size:60px;"><strong>BERITA KAMI</strong></h1>
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
    <!-- card Tasty Food 1-->
    <section class="card-section">
      <div class="container">
        <div class="box-about">
          <div class="box">
            <h1><strong>APA SAJA MAKANAN KHAS NUSANTARA?</strong></h1><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut libero corporis repellat. Quia aliquid, est sit laborum vel nulla cum dicta quo repudiandae, recusandae harum error incidunt repellat dolores dolore.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum repellat dignissimos odio inven illum, illo reprehenderit iusto doloribus temporibus explicabo quod expedita quia voluptatum tempora consequatur nobis numquam nesciunt necessitatibus.</p>
            <div class="btn-group-vertical">
            <a href="#about"><button type="button" class="btn btn-dark mt-3 px-5 ">BACA SELENGKAPNYA</button></a>
            </div>
          </div>
          <!-- card 1 -->
          <div class="box" style="flex-direction: row-reverse;">
            <img src="/imgasset/galeri-9.jpg" alt="" width="450px">
          </div>
        </div>
      </div>
    </section>
    <!-- berita lainnya -->
    <section class="news-section">

      <div class="container">
      <h3 class="news" style="margin-top: 50px;"><b>BERITA LAINNYA</b> </h3>
        <div class="card-group" style="margin-top: 50px;">
      <div class="card gp-5" style="border-style: none;">
        <img src="{{ asset('imgasset/news-10.jpg') }}" class="card-img-top" height="229px" alt="..." style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 1</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:40px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-3.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 2</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing</p>
          <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:40px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-11.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 3</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to lorem lorem</p>
          <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:40px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-5.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 4</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to lorem lorem</p>
            <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:40px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
        </div>
      </div>
      </div>
  </div>
  <!-- baris 2 news -->
  <section class="news2">
      <div class="container" style="margin-top: 30px">
        <div class="card-group" style="margin-top: 50px;">
      <div class="card gp-5" style="border-style: none;">
        <img src="{{ asset('imgasset/news-10.jpg') }}" height="229px" class="card-img-top" alt="..." style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 5</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Lorem ipsum dolor sit amet</p>
          <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:40px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-3.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 6</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, labore!</p>
          <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:40px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-11.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 7</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to</p>
          <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:40px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
        </div>
      </div>
      <div class="card" style="border-style: none;">
        <img src="{{ asset('imgasset/news-5.jpg') }}" class="card-img-top" alt="..." height="229px" style="border-radius: 7% 7% 0 0;">
        <div class="card-body">
          <h5 class="card-title">News 8</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to</p>
          <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:40px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
        </div>
      </div>
      </div>
  </div>
    </section>
    </body>
</html>
@endsection
