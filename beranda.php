<?php
  include "db/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">
    h2
    {
      font-family: "Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;
      font-style: normal;
      font-weight: 700;
      font-size: 22px;
      line-height: 28px;
      height: 26px;
    }
    p 
    {
      font-family: "Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 22px;
      color: rgba(18,18,18,.64);
    }
    .greeting-and-content-settings hr 
    {
      margin-top: 18px;
      margin-bottom: 18px;
      border: 1px solid black;
    }
    .greeting-and-content-settings
    {
      margin-top: 50px;
      min-width: 400px;
    }
    .greeting-and-content-settings .module-content .greeting h2{
      margin-top: 0;
      margin-bottom: 0;
      font-size: 32px;
      color: #222;
      font-family: "Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;
      font-weight: 400;
      line-height: 36px;
    }
    h3
    {
      font-size: 32px;
      font-weight: 700;
      line-height: 1.33;
      color: #222;
      text-transform: capitalize;
      margin-top: 0;
    }
    .post-popular .heading
    {
      padding-top: 15px;
      padding-bottom: 15px;
    }
    .greeting-and-content-settings hr
    {
      margin-top: 18px;
      margin-bottom: 18px;
      border-top: 1px solid #eee;
    }

    .post-popular
    {
      padding-top: 24px;
      padding-bottom: 24px;
    }
    .pilihan .artikel .description p
    {
      margin-top: 18px;
      margin-bottom: 18px;
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
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="1500">
        <h2>Semua misteri terungkap!</h2>
        <p>Nonton semua episode-nya sekarang!</p>
        <img src="images/my-silly-wife_hfc_desktop.jpg" class="d-block w-100" alt="..." style="border-radius: 16px; ">
      </div>
      <div class="carousel-item" data-bs-interval="1500">
        <h2>Semua misteri terungkap!</h2>
        <p>Nonton semua episode-nya sekarang!</p>
        <img src="images/denial_hfc_desktop.jpg" class="d-block w-100" alt="..." style="border-radius: 16px;">
      </div>
      <div class="carousel-item" data-bs-interval="1500">
        <h2>Semua misteri terungkap!</h2>
        <p>Nonton semua episode-nya sekarang!</p>
        <img src="images/lwmk_hfc_desktop.png" class="d-block w-100" alt="..." style="border-radius: 16px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="greeting-and-content-settings">
    <div class="module-content">
      <div class="greeting">
        <h2 class="greeting-text">Selamat datang, abd_dahdah!</h2>
      </div>
    </div>
    <hr class="module-divider">
  </div>


  <div class="post-popular ">
    <div class="heading">
      <h3>Cerita Terbaru untuk Kamu</h3>
    </div>
    <div class="content row">
      <?php
        $data = mysqli_query($koneksi,"SELECT * FROM tb_post ORDER BY id DESC limit 6");
        while($d = mysqli_fetch_array($data)){
      ?>
      <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="detail.php?id=<?php echo $d['id'] ?>">
            <img src="images/<?php echo $d['photo'] ?>" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div>
      <?php
        }
      ?>
      <!-- <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="/story/158370598">
            <img src="images/118595048-288-k474404.jpg" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div>
      <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="/story/158370598">
            <img src="images/118595048-288-k474404.jpg" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div>
      <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="/story/158370598">
            <img src="images/118595048-288-k474404.jpg" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div>
      <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="/story/158370598">
            <img src="images/118595048-288-k474404.jpg" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div>
      <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="/story/158370598">
            <img src="images/118595048-288-k474404.jpg" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div> -->
    </div>
  </div>

  <div class="pilihan p-md-5">
    <div class="content row">
      <div class="col-md-4 p-md-2">
        <div class="cover">
          <img src="images/190494164-288-k461028.jpg" alt="Kisah Anak SMK cover" width="80%" style="border-radius:8px; box-shadow: -1px 1px 13px 3px rgba(0,0,0,0.24);-webkit-box-shadow: -1px 1px 13px 3px rgba(0,0,0,0.24);-moz-box-shadow: -1px 1px 13px 3px rgba(0,0,0,0.24);">
        </div>
      </div>
      <div class="artikel col-md-8 p-md-2">
        <div class="description">
          <h2 class="Judul" >Behind The Wall</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
         <span class="material-icons">arrow_forward_ios</span></p>
        </div>
      </div>
    </div>
  </div>

   <div class="post-popular ">
    <div class="heading">
      <h3>Cerita Pilihan untuk Kamu</h3>
    </div>
    <div class="content row">
      <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="/story/158370598">
            <img src="images/118595048-288-k474404.jpg" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div>
      <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="/story/158370598">
            <img src="images/118595048-288-k474404.jpg" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div>
      <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="/story/158370598">
            <img src="images/118595048-288-k474404.jpg" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div>
      <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="/story/158370598">
            <img src="images/118595048-288-k474404.jpg" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div>
      <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="/story/158370598">
            <img src="images/118595048-288-k474404.jpg" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div>
      <div class="col-md-2 p-md-2">
        <div class="cover">
          <a href="/story/158370598">
            <img src="images/118595048-288-k474404.jpg" alt="Kisah Anak SMK cover" height="300">
          </a>
        </div>
      </div>
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