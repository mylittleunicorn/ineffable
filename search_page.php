<div class="post-popular ">
    <div class="heading">
      <h5>Hasil Pencarian dari <?php echo $_GET['cari'] ?></h5>
    </div>
    <div class="content row ">
      <?php
      if (isset($_GET['nyari'])) {
      	
      
        $data_cerpen = mysqli_query($koneksi,"SELECT * FROM tb_post WHERE judul LiKE '%$_GET[cari]%' AND status='publis'");
        $count = mysqli_num_rows($data_cerpen);
        if ($count > 0) {
        	while($cerpen = mysqli_fetch_array($data_cerpen)){
      ?>
      	<div class="col-md-2 mx-md-3 datatab">
        <div class="cover">
            <img src="images/<?php echo $cerpen['photo'] ?>" alt="<?php echo $cerpen['judul'];?>" height="300" class="img-hover">
            <div class="middle">
              <a href="tambah_perpustakaan.php?id=<?php echo $cerpen['id'] ?>"><div class="text">+ Ke Daftar Baca</div></a>
              <a href="beranda.php?beranda=detail&id=<?php echo $cerpen['id'] ?>"><div class="text">Baca Sekarang</div></a>
            </div>
        </div>
      </div>
      <?php
        }
      }else{
        	echo "<h6>data yang kamu cari tidak ada</h6>";
        }
      }
      ?>
    </div>
  </div>