<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
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
    <title>About | Landing Page</title>
  </head>
  <body>
   @yield('footer')
    <!-- footer -->
<section class="footer">
  </div>
      <div class="footer-content  col-md-10">
        <a href="#" class="logo" style="text-decoration: none;">Tasty Food</a>
        <p>
          Lorem ipsum dolor sit amet  consectetur adipisicing elit. Provident
          unde similique quia eum cumque totam facere, voluptas ratione. Libero,
          sed?
        </p>
        <div class="icon">
            <a href="https://www.facebook.com/cyberlabsofficial?mibextid=ZbWKwL"><img src="{{ asset ('imgasset/fb.png') }}" alt="" width="40px"></a>
            <a href="#"><img src="{{ asset ('imgasset/tweet.png') }}" alt="" width="40px"></a>
          <!-- <a href="https://www.instagram.com/cyberlabsofficial/"><i class="fa-brands fa-instagram" style="color: #c13584;"></i></i></a> -->
        </div>
      </div>
    </div>

    <div class="footer-content">
      <h4>Useful Links</h4>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Hewan</a></li>
      <li><a href="#">Galeri</a></li>
      <li><a href="#">Testimonial</a></li>
    </div>

    <div class="footer-content">
        <h4>Privacy</h4>
        <li><a href="#">Karir</a></li>
        <li><a href="/about">Tentang Kami</a></li>
        <li><a href="#">Kontak Kami</a></li>
        <li><a href="#">Servis</a></li>
      </div>

      <div class="footer-content">
        <h4>Contact Info</h4>
        <li><a href="#"><i class="ri-mail-fill"></i>
            tastyfood@gmail.com</a></li>
        <li><a href="#"><i class="fa-solid fa-phone" style="color: #ffffff;"></i>
            +62 812 3456 7890</a></li>
        <li><a href="#"><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>
            Kota Bandung, Jawa Barat</a></li>
      <!-- </div>
      <div class="row">
        <div class="text-center" style="text-align: center;">
        <div class="container">
          <p style="text-align: center; color:white;">&copy; 2023 Your Website. All rights reserved.</p>
        </div>
      </div>
      </div> -->
    </section>
  </body>
</html>
