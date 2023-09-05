@extends('layouts.main')

@section('footer')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <title>Home</title>
  </head>
  <body>
  <!-- navbar -->
<section class="header-section" id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparant  ">
      <div class="container gap-5 justify-content-around">
        <a class="navbar-brand fs-3 fw-bold " href="/">TASTY FOOD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav  justify-content-around gap-3 ">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">TENTANG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/news">BERITA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/galery">GALERI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">KONTAK</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="/contact">VIDEO</a>
            </li> --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  KATEGORI
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Makanan</a></li>
                  <li><a class="dropdown-item" href="#">Minuman</a></li>
                  <li><a class="dropdown-item" href="#">Resep</a></li>
                </ul>
              </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container">
    <div class="row align-items-center justify-content-between" >
      <div class="col-md-5">
        <div class="header-text"><h1 class="header-title mt-5 mb-0" >HEALTY</h1></div>
        <h1 class="fw-bold">TASTY FOOD</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quasi impedit officiis modi quam? Deserunt consequuntur Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, laudantium.</p>
        {{-- btn login dan register --}}
        <a href="{{ route ('login') }}"><button type="button" class="btn btn-dark mt-3 px-5 ">LOGIN</button></a>
        <a href="{{route ('resgiter')}}"><button type="button" class="btn btn-dark mt-3 px-5 ">REGISTER</button></a>
      </div>
      <div class=" img-home col-md-5  " >
          <img src="{{ asset('imgasset/home.png') }}" width="140%" alt="" >
      </div>
    </div>
  </div>
</section>
<!-- TENTANG KAMI -->
<section class="aboutus-section" id="about-section">
  <div class="container  ">
    <div class="d-flex justify-content-center  text-center">
      <div class="item-aboutus">
      <h3 id="about" class=" fw-bold">TENTANG KAMI</h3>
      <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. br Maxime voluptate dolorem consequuntur <br>nus libero similique iusto obcaecati lorem10,  ipsam numquam quia, veniam officiis laudantium doloribus inventore <br>culpa corporis? Eius dolore obcaecati culpa, explicabo ipsum laborum! <br>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
      <div  class="mx-auto" id="line"> </div>
    </div>
    </div>
  </div>
</section>
<!-- card section -->
<section class="card-section  d-flex align-items-center">
  <div class="container ">
    <div class="row row-cols-2 row-cols-md-4 g-4   ">
      <div class="col">
        <div class="card about-card">
          <img src="{{ asset('imgasset/img-1.png') }}" class="card-img-top " alt="...">
          <div class="card-body ">
            <h5 class="card-title fw-bold">LOREM IPSUM</h5>
            <p class="card-text ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad odit laboriosam neque vitae..</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card about-card">
          <img src="{{ asset('imgasset/img-2.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">LOREM IPSUM</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis soluta ducimus laborum similique..</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card about-card">
          <img src="{{ asset('imgasset/img-3.png') }}" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title fw-bold">LOREM IPSUM</h5>
            <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit eveniet iste a nobis!
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card about-card">
          <img src="{{ asset('imgasset/img-4.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold">LOREM IPSUM</h5>
            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, nesciunt eveniet. At, ab. </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- berita kami -->
<section class="news-section" id="news-section">
  <div class="container">
    <h3 class="fw-bold mb-6 mt-5" style="text-align: center;">BERITA KAMI</h3><br>
  <div class="row justify-content-md-center">
    <div class=" col col-md-5 g-2">
      <!-- Card besar di kiri -->
      <div class="card">
        <img   id="image-news"  src="{{ asset('imgasset/news-1.jpg') }}" alt="Card image cap"  class="card-img-top">
        <div class="card-body">
          <h5 class="card-title fw-bold">GAMBAR 1</h5>
          <p class="card-text mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis doloremque recusandae earum porro eligendi maiores, placeat perspiciatis minima debitis aliquid?.</p><br><br><br><br><br>
          <div class="container-icon">
              <a href="#" class="card-link">Baca Selengkapnya</a>
              <a href="" class="share" style="color: black; margin-left:250px;"><i class="fa-solid fa-ellipsis"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="card-news col-md-5 g-2">
      <div class=" news-parents row row-cols-1 row-cols-md-2 g-1 ">
        <div class="col">
          <div class="card">
            <img src="{{ asset('imgasset/news-2.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">GAMBAR 2</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p><br>
              <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:18px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ asset('imgasset/news-3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">GAMBAR 3</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p><br>
              <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:18px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ asset('imgasset/news-4.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">GAMBAR 4</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
              <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:18px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ asset('imgasset/news-5.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">GAMBAR 5</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This</p>
              <div class="container-icon">
                <a href="#" class="card-link">Baca Selengkapnya</a>
                <a href="" class="share" style="color: black; margin-left:18px;"><i class="fa-solid fa-ellipsis"></i></a>
            </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
</section>
<!-- galeri kami -->
<section class="galery-section">
  <div class="container">
    <h3 class="fw-bold mb-4 mt-5" style="text-align: center;">GALERI KAMI</h3><br>
    <div class="row  row-cols-2 gap-2 justify-content-center">
      <div class="col col-md-3 col-sm-1">
        <img src="{{ asset('imgasset/galeri-1.jpg') }}" class="card-img-top" alt="...">
      </div>
      <div class="col col-md-3">
        <img src="{{ asset('imgasset/galeri-7.jpg') }}" class="card-img-top" alt="...">
      </div>
      <div class="col col-md-3">
        <img src="{{ asset('imgasset/galeri-3.jpg') }}" class="card-img-top" alt="...">
      </div>
      <div class="col col-md-3">
        <img src="{{ asset('imgasset/galeri-4.jpg') }}" class="card-img-top" alt="...">
      </div>
      <div class="col col-md-3">
        <img src="{{ asset('imgasset/galeri-8.jpg') }}" class="card-img-top" alt="..." width="391px">
      </div>
      <div class="col col-md-3">
        <img src="{{ asset('imgasset/galeri-6.jpg') }}" class="card-img-top" alt="...">
      </div>
    </div>
    <div class=" mt-3 d-flex justify-content-center">
      <button type="button" class="btn btn-dark mt-3 px-5 ">LIHAT LEBIH BANYAK</button>
    </div>
</div>
</section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
@endsection
