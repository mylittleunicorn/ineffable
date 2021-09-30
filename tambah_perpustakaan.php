<?php
	include "db/koneksi.php";
  	$post_id = $_GET['id'];
  	$user_id = 1 ;

  	$data = mysqli_query($koneksi,"INSERT INTO perpustakaan VALUES ('', '$post_id', '')");
  	if ($data) {
  		echo ("<script LANGUAGE='JavaScript'>
	    window.alert('Berhasil Ditambahkan Ke Daftar Bacaan');
	    window.location.href='beranda.php?beranda=profile&profile=perpustakaan';
	    </script>");
  	}
    
?>