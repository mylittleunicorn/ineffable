


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
    <div class="content row ">
      <?php
        $data = mysqli_query($koneksi,"SELECT * FROM tb_post ORDER BY id DESC limit 6");
        while($d = mysqli_fetch_array($data)){
      ?>
      <div class="col-md-2 mx-md-3 datatab">
        <div class="cover">
            <img src="images/<?php echo $d['photo'] ?>" alt="<?php echo $d['judul'];?>" height="300" class="img-hover">
            <div class="middle">
              <a href="tambah_perpustakaan.php?id=<?php echo $d['id'] ?>"><div class="text">+ Ke Daftar Baca</div></a>
              <a href="beranda.php?beranda=detail&id=<?php echo $d['id'] ?>"><div class="text">Baca Sekarang</div></a>
            </div>

        </div>
      </div>
      <?php
        }
      ?>
    </div>
  </div>

  <div class="pilihan p-md-5">
    <?php
      $pupular = mysqli_query($koneksi,"SELECT * FROM tb_post ORDER BY view DESC limit 1");
        while($p = mysqli_fetch_array($pupular)){
    ?>
    <div class="content row">
      <div class="col-md-4 p-md-2">
        <div class="cover">
          <img src="images/<?php echo $p['photo'] ?>" alt="Kisah Anak SMK cover" width="80%" style="border-radius:8px; box-shadow: -1px 1px 13px 3px rgba(0,0,0,0.24);-webkit-box-shadow: -1px 1px 13px 3px rgba(0,0,0,0.24);-moz-box-shadow: -1px 1px 13px 3px rgba(0,0,0,0.24);">
        </div>
      </div>
      <div class="artikel col-md-8 p-md-2">
        <div class="description">
          <h2 class="Judul" ><?php echo $p['judul'] ?></h2>
          <p>
            <?php echo $p['isi'] ?>
          </p>
         <span class="material-icons">arrow_forward_ios</span></p>
        </div>
      </div>
    </div>

    <?php
      }
    ?>
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

  <!-- MODAL -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <span id="detail-post-id"></span>
      </div>
    </div>
  </div>
</div>
  <!-- MODAL -->

<script type="text/javascript">
  $(document).ready(function() {
    $(document).on('click', '#show-post', function(){
      var id = 2;
      var judul = 'a';
      $('#detail-post-id').text(id);
      $('#detail-post-judul').text(judul);

    })
  });
 
</script>
