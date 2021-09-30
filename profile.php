      <div class="sampul">
        <div class="container">
          <div class=" pt-md-5 d-flex justify-content-center">
            <img src="images/yamato.jpg" class="profile-image profile-image-content rounded-circle" >
          </div>
          <div class="pt-md-2 d-flex justify-content-center">
            <b>Resa Amanda Rahayu</b>
          </div>
          <div class="pt-md-2 pb-md-5 d-flex justify-content-center">
            @deeee_ku
          </div>
         
        </div>
      </div>

    <nav class="navbar navbar-light">
      <div class="container">
        <ul class="nav justify-content-start">
          <li class="nav-item nav-item-black">
            <a  class="nav-link" aria-current="page" href="beranda.php?beranda=profile&profile=cerita">Cerita ku</a>
          </li>
          <li class="nav-item nav-item-black">
            <a class="nav-link" href="beranda.php?beranda=profile&profile=arsip">Arsip</a>
          </li>
          <li class="nav-item nav-item-black">
            <a class="nav-link" aria-current="page" href="beranda.php?beranda=profile&profile=perpustakaan">Perpustakaan</a>
          </li>
        </ul>
      </div>
    </nav>

      <div class="container p-md-4">
        <div class="row">
          <?php
            if(!empty($_GET['beranda'])){ //kondisi apakan ada parameter p didalam url
              if ($_GET['profile'] == "cerita") {
                include "cerita.php";
              } elseif ($_GET['profile'] == "arsip") {
                include "arsip.php";
              } else {
                include "perpustakaan.php";
              }
            } else {
              include('cerita.php');
            }
        ?>
          
        </div>
      </div>
    
   

 <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html> -->