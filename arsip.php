<?php
include "db/koneksi.php";
  $data = mysqli_query($koneksi,"SELECT * FROM tb_post WHERE status = 'arsip' AND user_id='$_SESSION[id]'");
  while($d = mysqli_fetch_array($data)){
?>
<div class="col-md-2">
	<div class="card" >
	  <img src="images/<?php echo $d['photo'] ?>" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title"><?php echo $d['judul'] ?></h5>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <div class="btn-group" role="group">
		    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		      Pilihan
		    </button>
		    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
		      <a class="dropdown-item" href="beranda.php?beranda=edit&id=<?php echo $d['id'] ?>">Edit</a>
		      <a class="dropdown-item" href="beranda.php?beranda=delete&id=<?php echo $d['id'] ?>" onclick="return confirm('Anda yakin mau menghapus cerita ini ?')">Hapus</a>
		    </div>
	  	</div>
	  </div>
	</div>
</div>
<?php
	}
?>
