@extends('layouts.main')

@section('footer')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
    <title>Kontak | Landing Page</title>
  </head>
  <body>
    <!-- navbar -->
    <header>
      <section class="navigation">
        <div class="container">
          <div class="box-navigation">
            <div class="box">
              <h1 class="T">TASTY FOOD</h1><br><br><br>
                <h1 style="font-size:60px;"><strong>KONTAK KAMI</strong></h1>
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
    <!-- kontak -->
  <section class="contact">
    <div class="container-fluid pt-5 pb-5 kontak">
      <div class="container">
        <h3 id="kontak" style="margin-top: 90px; font-weight:600;">KONTAK KAMI</h3>
        <div class="row pb-5 mt-5">
          <div class="col-md-6">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="Subject">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="Name">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="Email">
          </div>
          <div class="col-md-6">
            <textarea class="form-control ofrm-control-lg" name="" placeholder="Message" id="" cols="30" rows="6"></textarea>
          </div>
        </div>
        <div class="d-grid gap-2">
          <button class="btn btn-dark" type="button">KIRIM</button>
        </div>
    </div>
    <div class="conta-fluid pt-5 pb-5">
      <div class="container text-cener">
        <div class="row pt-5 gx-4 gy-4">
          <div class="col-md-4 text-center tim">
          <img src="imgasset/email.png" alt=""  width="100px"/>
          <h5 class="fw-bold pt-3">EMAIL</h5>
          <li><a href="#" style="text-decoration: none; color:black;">tastyfood@gmail.com</a></li>
        </div>
        <div class="col-md-4 text-center tim">
          <img src="imgasset/phone.png" alt=""  width="100px"/>
          <h5 class="fw-bold pt-3">PHONE</h5>
          <li><a href="#" style="text-decoration: none; color:black;">+62 812 3456 789</a></li>
        </div>
        <div class="col-md-4 text-center tim">
          <img src="imgasset/lokasi.png" alt=""  width="100px"/>
          <h5 class="fw-bold pt-3">LOCATION</h5>
          <li><a href="#" style="text-decoration: none; color:black;">Kota Bandung, Jawa Barat</a></li>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="map-section">
    <div class="container">
      <div class="row pt-5">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5588516666717!2d107.66141237419323!3d-6.943206067968358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCYBERLABS%20-%20Jasa%20Digital%20Marketing%20%7C%20Jasa%20Pembuatan%20Website%20%7C%20Jasa%20Pembuatan%20Aplikasi!5e0!3m2!1sid!2sid!4v1692631881146!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  </body>
</html>
@endsection
