<?php
session_start();
if ( !isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require'koneksi.php';
$kandang_c= query("SELECT * FROM kandang_c")
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Kandang C</title>
</head>
<body>
	<h3>Barokah Utama Farm</h3>
<br>
<a href="dashboard.php">Dashboard</a>
<br><br><br>
<a href="index.php">Pengguna</a>
<br><br>
<a href="kandangA.php">Kandang A</a>
<br><br>
<a href="kandangB.php">Kandang B</a>
<br><br>
<a href="kandangC.php">Kandang C</a>
<br><br>
<a href="kandangD.php">Kandang D</a>
<br><br>
<a href="logout.php">logout</a>	
<h1>Daftar Kandang C</h1>
<a href="tambahdatakandangC.php">Tambah Data Baru</a>
<br><br>
<table border="1" cellpadding="10" cellspacing="1">
	
	<tr>
		<th>Nomor</th>
		<th>Tanggal</th>
		<th>Diisi Oleh</th>
		<th>Keterangan</th>
		<th>Aksi</th>
	</tr>

	<?php $i =1; ?>
<?php foreach ($kandang_c as $row ): ?>
	<td><?=$i; ?></td>
	<td><?= $row["tanggal"]; ?></td>
	<td><?= $row["nama"]; ?></td>
	<td><?= $row["keterangan"]; ?></td>
	<td>
		<a href="editkandangC.php?id=<?=$row["id"]; ?> ">ubah</a>| 
		<a href="hapuskandangC.php?id=<?=$row["id"]; ?> ">Hapus</a>
	</td>
	</tr>
	<?php $i ++; ?>
<?php endforeach; ?>
</table>

</body>
</html>