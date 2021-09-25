<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">
    .paragraf p
    { 
      font-family: "Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;
      line-height: 32px;
      letter-spacing: -0.003em;
      font-size: 21px;
      font-weight: 400;
      display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    }
  </style>
 
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <img src="images/ine-logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
      <font size="5" font="center">Ineffable</font>
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="collapseNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Jelajahi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""><i class="fas fa-search"></i></a>
          </li>
          <li>
            <input type="text" class="form-control" placeholder="Cari ..." aria-label="Username" aria-describedby="basic-addon1" style="border: none;">
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menulis
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li class="dropdown-item" href="#">Buat Cerita Baru</li>
              <li class="dropdown-item" href="#">Cerita Saya</li>
            </ul>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="images/yamato.jpg" class="profile-image rounded-circle" style="object-fit: cover 50% 50% no-repeat; width:30px; height:30px; border: 1px solid #000; margin-left: 10px;"><span class="caret" style="margin-left: 10px;">Resa Amanda</span></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li class="dropdown-item"><a href="#"></i>Profil saya</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="dropdown-item"><a href="#">Kotak masuk</a></li>
                  <li class="dropdown-item"><a href="#">Perpustakaan</a></li>
                  <li class="dropdown-item"><a href="#">Notifikasi</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="dropdown-item"><a href="login.html"><i class="fa fa-sign-out"></i>Keluar</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container p-md-4">
  <div class="row">
    <div class="col-md-3">
      
    </div>
    <div class="col-md-6 paragraf">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

  </div>
   
  </div>


   
  <script type="text/javascript">
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel)
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>