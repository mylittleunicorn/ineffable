<?php
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass  = $_POST['pass']
		$query = 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section>	
		<div class="img-box">
			<img src="images/read-ebook.jpg">
		</div>
		<div class="content-box">
			<div class="form-box">
				<div class="logo">
					<center>
						<img src="images/ine-logo.png"><br>
						<h2>Masuk</h2>
					</center>
				</div>
				<form action="index.html">
					<div class="input-box">
						<span>Email</span>
						<input type="text" name="">
					</div>

					<div class="input-box">
						<span>Kata sandi</span>
						<input type="password" name="">
					</div>

					<div class="remember">
						<label><input type="checkbox" name="">Ingatkan saya</label>
					</div>

					<div class="input-box">
						<input type="submit" value="Masuk" name="">
					</div>

					<div class="input-box">
						<p>Belum punya akun? <a href="daftar.php">Daftar</a></p>
					</div>

				</form>
			</div>	
		</div>
	</section>
</body>
</html>