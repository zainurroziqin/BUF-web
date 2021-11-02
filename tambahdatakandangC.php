<?php 
require 'koneksi.php';
$conn= mysqli_connect("localhost", "root", "", "farm");
// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){

// cek apakah data berhasil ditambahkan atau tidak
if (tambahdatakandangC ($_POST) > 0 ) {
	// menggunakan javascript
	echo "
	<script>
	alert ('data berhasil ditambahkan!')
	document.location.href ='kandangC.php';
	</script>";
} else {
	echo "
	<script>
	alert ('data gagal ditambahkan!')
	document.location.href ='kandangC.php';
	</script>";
}



}
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data Kandang C</title>
</head>
<body>
<h1>Tambah Data Kandang C</h1>


<form action="" method="POST">
		<h3>Tanggal</h3>
			<input type="date" name="tanggal"required>
		<br>
		<h3>Data Pakan</h3>
			<input type="text" name="pakan_total" placeholder="Total Pakan">
			<p><input type="text" name="sisa_1" placeholder="Sisa 1"></p>
			<p><input type="text" name="sisa_2" placeholder="Sisa 2"></p>
			<p><input type="text" name="sisa_3" placeholder="Sisa 3"></p>
			<p><input type="text" name="sisa_4" placeholder="Sisa 4"></p>
			<p><input type="text" name="sisa_5" placeholder="Sisa 5"></p>
			<p><input type="text" name="sisa_6" placeholder="Sisa 6"></p>	
		<br>
		<h3>Data Telur</h3>
			<input type="text" name="jumlah_telur" placeholder="Jumlah Telur">
			<p><input type="text" name="berat_telur" placeholder="Berat_telur"></p>
		<br>
		<h3>Data Ayam</h3>
			<input type="text" name="mati" placeholder="Ayam Mati">
			<p><input type="text" name="afkir" placeholder="Ayam Afkir"></p>
		<h3>Suhu</h3>
			<input type="text" name="suhu_pagi" placeholder="Suhu Pagi">
			<p><input type="text" name="suhu_siang" placeholder="Suhu Siang"></p>
			<p><input type="text" name="suhu_sore" placeholder="Suhu Sore"></p>
		<br>
		<p><input type="text" name="nama" placeholder="nama"></p>
		<button type="submit" name="submit">Tambah Data</button>

</form>



</body>
</html>