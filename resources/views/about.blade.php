 @extends('layouts.main')

 @section('footer')
 <!-- navbar -->
 <header>
    {{-- <section class="navbar-section">
    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://getbootstrap.com/">
                TASTY FOOD
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">TENTANG</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">BERITA</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">GALERY</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
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
                    </section> --}}
      <section class="navigation">
        <div class="container">
          <div class="box-navigation">
            <div class="box">
              <h1 class="T">TASTY FOOD</h1><br><br><br>
                <h1 style="font-size:60px;"><strong>TENTANG KAMI</strong></h1>
            </div>
            <div class="box">
              <ul>
                <li><a href="{{ route('home') }}">HOME</a></li>
                <li><a href="#">TENTANG</a></li>
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
            <h1><strong>Tasty Food</strong></h1>
            <p><b>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut libero corporis repellat. Quia aliquid, est sit laborum vel nulla cum dicta quo repudiandae, recusandae harum error incidunt repellat dolores dolore.</b></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum repellat dignissimos odio inven illum, illo reprehenderit iusto doloribus temporibus explicabo quod expedita quia voluptatum tempora consequatur nobis numquam nesciunt necessitatibus.</p>
          </div>
          <!-- card 1 -->
          <div class="box">
            <img src="/imgasset/galeri-1.jpg" alt="" width="250px">
          </div>
          <div class="box">
            <img src="/imgasset/news-3.jpg" alt="" width="250px" style="object-fit: cover">
          </div>
        </div>
      </div>
    </section>
    <!-- card about 2 -->
    <section class="about">
      <div class="container">
        <div class="card-about">
          <div class="box">
            <h3> <strong>VISI</strong></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste minus aspernatur excepturi blanditiis. Laboriosam tempore quos, debitis dolorum fugit similique aspernatur impedit aut maiores ab iusto nobis, quisquam sequi adipisci. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur veritatis porro natus, ipsa libero cum, inventore itaque fugit alias aliquam ullam error. Harum, illo dolores? Minima ipsa reprehenderit temporibus est!</p>
          </div>
          <div class="box">
            <img src="/imgasset/news-1.jpg" alt="" width="150px">
          </div>
          <div class="box">
            <img src="/imgasset/card-about2.jpg" alt="" width="150px">
          </div>
        </div>
      </div>
        </div>
      </div>
    </section>
    <!-- misi -->
    <section class="misi">
      <div class="container">
        <div class="box-card">
          <div class="box col-md-6">
            <h3><strong>MISI</strong></h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita mollitia totam numquam delectus libero obcaecati quam vitae ut nostrum vel quasi doloribus accusamus debitis earum magnam aspernatur eaque consectetur distinctio necessitatibus maiores, illo quibusdam quisquam! Hic eligendi et recusandae incidunt consectetur nemo, nisi obcaecati, vitae repudiandae similique blanditiis modi tenetur?</p>
          </div>
          <div class="box">
            <img src="/imgasset/news-5.jpg" alt="" width="350px">
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </section>
    @endsection
