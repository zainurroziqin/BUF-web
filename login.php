<?php
session_start();
?>

<?php


if(isset($_SESSION["login"])){
	header ("Location: dashboard.php");
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
	<link rel="stylesheet" href="style.css">
</head>
</head>
<body>
<div class="login-box">
	<img src="logo.jpg" class="avatar">
<h1>Halaman Login</h1>
<?php if (isset($error) ) : ?>
	<p>username/password salah</p>
<?php endif; ?>
	<div class="flash-data1" data-flashdata1=""></div>
		<form action="#" method="POST">

			<div class="textbox">
				<i class="fas fa-user"></i>
				<input type="text" placeholder="Username" name="username" required autocomplete="off">
			</div>

			<div class="textbox">
				<i class="fas fa-lock"></i>
				<input type="password" placeholder="Password" name="password" required>

			</div>

			<button type="submit" name="submit" class="btn">
				Login
			</button>

		</form>
	</div>

</div>
</body>
</html>

