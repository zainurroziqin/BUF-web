<?php 	
session_start();

if(isset($_SESSION["login"])){
	header ("Location: index.php");
}

require 'koneksi.php';

if (isset($_POST["submit"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query ($conn, "SELECT * FROM user WHERE username = '$username'");

// cek username
	if (mysqli_num_rows($result) === 1) {

		// cek password

		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"]) ){
			$_SESSION["login"] = true;

				echo "
		<script>
		alert ('selamat datang!')
		document.location.href ='dashboard.php';
		</script>";
			exit;
		}
	}

	$error = true;

}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
</head>
<body>
<div class="login-box">
	<img src="logo.jpg" class="avatar">
<h1>Halaman Login</h1>
<?php if (isset($error) ) : ?>
	<p>username/password salah</p>
<?php endif; ?>



<form action="" method="post">
	
<input type="text" name="username" placeholder="username">
<br> <br>
<input type="password" name="password" placeholder="password">
<br><br>
<button type="submit" name="submit">Login</button>

</form>

</div>
</body>
</html>