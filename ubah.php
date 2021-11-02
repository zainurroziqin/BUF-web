<?php 
require 'koneksi.php';


// ambil data di url
$id = $_GET["id"];
// query data user berdasarkan id
$user = query("SELECT * FROM user WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){


// cek apakah data berhasil diubah atau tidak
if (ubah ($_POST) > 0 ) {
	// menggunakan javascript
	echo "
	<script>
	alert ('data berhasil diubah!')
	document.location.href ='index.php';
	</script>";
} else {
	echo "
	<script>
	alert ('data gagal diubah!')
	document.location.href ='index.php';
	</script>";
}



}
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail Informasi Pengguna</title>
</head>
<body>
<h1>Detail Informasi Pengguna</h1>


<form action="" method="POST">
	<input type="hidden" name="id" value="<?=$user ["id"];?>" >
	<label for="nama">Nama</label>
			<input type="text" 
			name="nama" 
			id="nama"
			placeholder="Masukkan Nama" 
			value="<?=$user ["nama"];?>"required >
			<br><br>
	<label for="alamat">Alamat</label>
			<input type="text" 
			name="alamat"
			id="alamat" 
			placeholder="Masukkan Alamat"
			value="<?=$user ["alamat"];?>"required>
			<br><br>
	<label for="role">Role</label>
			<select name="role" id="role" value="<?=$user ["role"];?>">
			<option>Administrator</option>
			<option>Anak Kandang</option>
			</select>
			<br><br>
	<label for="telp">No.Telepon/Hp</label>
			<input type="text" 
			name="telp"
			id="telp"
			placeholder= "Masukkan No.Telepon/Hp"
			value="<?=$user ["telp"];?>"required >	
			<br><br>
	<label for="username">Username</label>
			<input type="text" 
			name="username"
			id="username" 
			placeholder="Masukkan Username" 
			value="<?=$user ["username"];?>"required>
			<br><br>

			<button type="submit" name="submit"> Edit</button>	
</form>



</body>
</html>