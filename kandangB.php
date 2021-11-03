<?php
session_start();
if ( !isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require'koneksi.php';
$kandang_b= query("SELECT * FROM kandang_b")
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Kandang B</title>
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
<h1>Daftar Kandang B</h1>
<a href="tambahdatakandangB.php">Tambah Data Baru</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
		<th>Nomor</th>
		<th>Tanggal</th>
		<th>Diisi Oleh</th>
		<th>Keterangan</th>
		<th>Opsi</th>
	</tr>

	<?php $i =1; ?>
<?php foreach ($kandang_b as $row ): ?>
	<td><?=$i; ?></td>
	<td><?= $row["tanggal"]; ?></td>
	<td><?= $row["nama"]; ?></td>
	<td><?= $row["keterangan"]; ?></td>
	<td>
		<a href="editkandangB.php?id=<?=$row["id"]; ?> ">ubah</a>| 
		<a href="hapuskandangB.php?id=<?=$row["id"]; ?> ">Hapus</a>
	</td>
	</tr>
	<?php $i ++; ?>
<?php endforeach; ?>
</table>

</body>
</html>