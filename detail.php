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
    <!-- KONTEN KANAN -->
    <div class="right-detail-content col-md-4">
      
        <div class="right-title">
          <h4>Postingan Terbaru</h4>
          <hr width="60%">
        </div>
        <?php
          $query = mysqli_query($koneksi, "SELECT * FROM tb_post ORDER BY id DESC LIMIT 3");
          while ($a = mysqli_fetch_array($query)){
        ?>
        <div class="right-content">
          <div class="row mb-md-2">
          <div class="col-md-4 right-content-img d-flex justify-content-center">
            <img src="images/<?php echo $a['photo'] ?>" width="100%">
          </div>
          <div class="col-md-8 pr-md-2 right-content-description">
            <b style="margin-bottom: 22px;"><?php echo $a['judul'] ?></b>
            <?php echo substr($a['isi'], 0, 150)." ... " ?>

          </div>
          </div>
        </div>
        <?php
          }
        ?>

    </div>
    <!-- KONTEN KANAN -->

    <!-- KONTEN KIRI -->
    <div class="col-md-6 paragraf">
      <?php
        $id = $_GET['id'];
        $view = mysqli_query($koneksi, "UPDATE tb_post SET view= view+1 WHERE id='$id'");
        $data = mysqli_query($koneksi,"SELECT * FROM tb_post where id='$id'");
        while($detail = mysqli_fetch_array($data)){
      ?>
      <h2><?php echo $detail['judul'] ?></h2>
      <center><img src="images/<?php echo $detail['photo'] ?>"></center>
      <?php echo $detail['isi'] ?>
      <?php
        }
      ?>
    </div>

    <!-- KONTEN KIRI -->

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