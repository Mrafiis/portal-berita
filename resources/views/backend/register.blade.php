<!DOCTYPE html>
<html>
  <head>
    <title>Regsiter</title>
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/backend/register.css') }}" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <!-- <img class="wave" src="img/wave.png" /> -->
    <div class="container">
      <div class="img">
        <img src="{{ asset ('imgasset/bg2.svg') }}" />
      </div>
      <div class="login-content">
        <form action="index.html">
          <img src="{{ asset ('imgasset/user.svg') }}" />
          <h2 class="title">Registrasi</h2>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5>Nama Lengkap</h5>
              <input type="text" class="input" />
            </div>
          </div>
          <div class="input-div one">
            <div class="i">
                <i class="fa-solid fa-envelope"></i>            </div>
            <div class="div">
              <h5>Email</h5>
              <input type="email" class="input" />
            </div>
          </div>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Password</h5>
              <input type="password" class="input" />
            </div>
          </div>
          <!-- <a href="#">Forgot Password?</a> -->
          <input type="submit" class="btn" value="Registrasi" />
        </form>
      </div>
    </div>
    <script type="text/javascript" src="{{ asset ('js/register.js') }}"></script>
  </body>
</html>
