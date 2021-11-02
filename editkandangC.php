<?php 
require 'koneksi.php';

// ambil data di URL
$id = $_GET["id"];

// query data kandang B berdasarkan id
$kdc = query("SELECT * FROM kandang_c WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){

// cek apakah data berhasil ditambahkan atau tidak
if (ubahC ($_POST) > 0 ) {
	// menggunakan javascript
	echo "
	<script>
	alert ('data berhasil diubah!')
	document.location.href ='kandangC.php';
	</script>";
} else {
	echo "
	<script>
	alert ('data gagal diubah!')
	document.location.href ='kandangC.php';
	</script>";
}



}
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail Data Kandang C</title>
</head>
<body>
<h1>Detail Data Kandang C</h1>


<form action="" method="POST">
	<input type="hidden" name="id" value="<?= $kdc["id"];?>">
		<h3>Tanggal</h3>
			<input type="date" name="tanggal" value="<?= $kdc["tanggal"]; ?>">
		<br>
		<h3>Data Pakan</h3>
			<label for="pakan_total">Total Pakan</label>
			<br>
			<input type="text" 
			name="pakan_total" 
			id="pakan_total"
			placeholder="pakan_total" 
			value="<?=$kdc ["pakan_total"];?>"required >
			<br><br>
			<label for="sisa_1">Sisa 1</label>
			<br>
			<input type="text" 
			name="sisa_1" 
			id="sisa_1"
			placeholder="sisa_1" 
			value="<?=$kdc ["sisa_1"];?>"required >
			<br><br>
			<label for="sisa_2">Sisa 2</label>
			<br>
			<input type="text" 
			name="sisa_2" 
			id="sisa_2"
			placeholder="sisa_2" 
			value="<?=$kdc ["sisa_2"];?>"required >
			<br><br>
			<label for="sisa_3">Sisa 3</label>
			<br>
			<input type="text" 
			name="sisa_3" 
			id="sisa_3"
			placeholder="sisa_3" 
			value="<?=$kdc ["sisa_3"];?>"required >
			<br><br>
			<label for="sisa_4">Sisa 4</label>
			<br>
			<input type="text" 
			name="sisa_4" 
			id="sisa_4"
			placeholder="sisa_4" 
			value="<?=$kdc ["sisa_4"];?>"required >
			<br><br>
			<label for="sisa_5">Sisa 5</label> 
			<br>
			<input type="text" 
			name="sisa_5" 
			id="sisa_5"
			placeholder="sisa_5" 
			value="<?=$kdc ["sisa_5"];?>"required >
			<br><br>
			<label for="sisa_6">Sisa 6</label>
			<br>
			<input type="text" 
			name="sisa_6" 
			id="sisa_6"
			placeholder="sisa_6" 
			value="<?=$kdc ["sisa_6"];?>"required >
		<br>
		<h3>Data Telur</h3>
			<input type="text" name="jumlah_telur" placeholder="Jumlah Telur"value="<?= $kdc["jumlah_telur"]; ?>">
			<p><input type="text" name="berat_telur" placeholder="Berat_telur"value="<?= $kdc["berat_telur"]; ?>"></p>
		<br>
		<h3>Data Ayam</h3>
			<input type="text" name="mati" placeholder="Ayam Mati"value="<?= $kdc["mati"]; ?>">
			<p><input type="text" name="afkir" placeholder="Ayam Afkir"value="<?= $kdc["afkir"]; ?>"></p>
		<h3>Suhu</h3>
			<input type="text" name="suhu_pagi" placeholder="Suhu Pagi"value="<?= $kdc["suhu_pagi"]; ?>">
			<p><input type="text" name="suhu_siang" placeholder="Suhu Siang"value="<?= $kdc["suhu_siang"]; ?>"></p>
			<p><input type="text" name="suhu_sore" placeholder="Suhu Sore"value="<?= $kdc["suhu_sore"]; ?>"></p>
		<br>
		<input type="checkbox" name="keterangan" value="<?= $kdc["keterangan"]; ?>"> Keterangan
		<br>
		<button type="submit" name="submit">Edit</button>

</form>



</body>
</html>