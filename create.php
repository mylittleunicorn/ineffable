<?php
include "db/koneksi.php";
  if (isset($_POST['add'])) {
    $judul          = $_POST['judul'];
    $kategori       = $_POST['kategori'];
    $isi            = $_POST['isi'];
    $namaFile       = $_FILES['sampul']['name'];
    $namaSementara  = $_FILES['sampul']['tmp_name'];
    move_uploaded_file($namaSementara, 'images/'.$namaFile);
    $add = mysqli_query($koneksi, "INSERT INTO tb_post VALUES ('', '$judul', '$kategori', '$namaFile','$isi', '', '')");
    if ($add) {
      echo "berhasil";
    }else{
      echo "gagal";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Cerita</title>
    <style>
      body
      {
        background: url(images/bg-1.jpeg);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .dropdown-menu 
      {
        left: 50% !important;
        transform: translateX(-50%) !important;
        top: 100% !important;
      }
      .image-upload > input 
      {
        display: none;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>

<body>

  <nav class="navbar navbar-light navbar-expand-md bg-light ">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/ine-logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
          <font size="5" font="center">Ineffable</font>  
        </a>
        <ul class="nav justify-content-end user-dropdown">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.html">Search</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="images/yamato.jpg" class="profile-image rounded-circle" style="object-fit: cover 50% 50% no-repeat; width:30px; height:30px;"><span class="caret" style="margin-left: 10px;">Resa</span></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li class="dropdown-item"><a href="#"><i class="fa fa-cog"></i>Profil saya</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="dropdown-item"><a href="#"><i class="fa fa-cog"></i>Kotak masuk</a></li>
                  <li class="dropdown-item"><a href="#"><i class="fa fa-cog"></i>Perpustakaan</a></li>
                  <li class="dropdown-item"><a href="#"><i class="fa fa-cog"></i>Notifikasi</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="dropdown-item"><a href="login.html"><i class="fa fa-sign-out"></i>Keluar</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </nav>

  

    <div class="container">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-8 pt-md-5">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Judul</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="judul">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Kategori</label>
              <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                <option>Puisi</option>
                <option>Qoutes</option>
                <option>Cerpen</option>
                <option>Novel</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Tulis Ceritamu</label>
              <textarea class="form-control" id="mytextarea" placeholder="Tulis disini..." rows="25" name="isi"></textarea>
            </div>
          </div>
          <div class="col-md-4 d-flex  justify-content-center pt-md-5">
            <div class="card p-md-5 " style="width:225px; height: 300px;">
              <div class="input-group text-center">
                <div class="image-upload">
                  <img src="images/add_a_photo_black_48dp.svg" style="width:90%; opacity: 0.4;" onClick="triggerClick()" id="profileDisplay">
                  <label for="file-input" style="font-size: 12px;">Silahkan pilih cover</label>
                  <input type="file" name="sampul" onChange="displayImage(this)" id="profileImage"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 pt-md-5">
              <div class="d-grid gap-5 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="submit" name="add">Posting</button>
                <button class="btn btn-primary" type="button">Arsipkan</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

  <!-- BOOSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
  crossorigin="anonymous"></script>
  <!-- BOOTSTRAP -->

  <!-- tinimce -->
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#mytextarea'
    });

    function triggerClick(e) {
      document.querySelector('#profileImage').click();
    }
    function displayImage(e) {
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
          document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>
  <!-- tinimce -->

</body>

</html>