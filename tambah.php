<?php 
session_start();
if ( !isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'koneksi.php';
// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){

// cek apakah data berhasil ditambahkan atau tidak
if (tambah ($_POST) > 0 ) {
	// menggunakan javascript
	echo "
	<script>
	alert ('data berhasil ditambahkan!')
	document.location.href ='index.php';
	</script>";
} else {
	echo "
	<script>
	alert ('data gagal ditambahkan!')
	document.location.href ='index.php';
	</script>";
}

 
}
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data User</title>
</head>
<body>
<h1>Buat Akun</h1>


<form action="" method="POST">

			<input type="text" name="nama"  required placeholder="Masukkan Nama" required>
			<br><br>
			<input type="text" name="alamat" required placeholder="Masukkan Alamat" required>
			<br><br>
			<input type="text" name="telp"placeholder= "Masukkan No.Telepon/Hp" required >	
			<br><br>
			<select name="role">
				<option>Administrator</option>
				<option>Anak Kandang</option>
			</select>
			<br><br>
			<input type="text" name="username" placeholder="Masukkan Username" required>
			<br><br>
			<input type="password" name="password" placeholder="Masukkan Password" required>
			<br><br>
			<input type="date" name="tanggal_dibuat" required>
			<br><br>
			<button type="submit" name="submit"> Buat Akun</button>	
</form>



</body>
</html>