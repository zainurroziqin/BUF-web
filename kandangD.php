<?php
require'koneksi.php';
$kandang_d= query("SELECT * FROM kandang_d")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Kandang D</title>
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
<h1>Daftar Kandang D</h1>
<a href="tambahdatakandangD.php">Tambah Data Baru</a>
<br><br>
<table border="1" cellpadding="10" cellspacing="1">
	
	<tr>
		<th>Nomor</th>
		<th>Tanggal</th>
		<th>Nama</th>
		<th>Keterangan</th>
		<th>Aksi</th>
	</tr>

	<?php $i =1; ?>
<?php foreach ($kandang_d as $row ): ?>
	<td><?=$i; ?></td>
	<td><?= $row["tanggal"]; ?></td>
	<td><?= $row["nama"]; ?></td>
	<td><?= $row["keterangan"]; ?></td>
	<td>
		<a href="editkandangD.php?id=<?=$row["id"]; ?> ">ubah</a>| 
		<a href="hapuskandangD.php?id=<?=$row["id"]; ?> ">Hapus</a>
	</td>
	</tr>
	<?php $i ++; ?>
<?php endforeach; ?>
</table>

</body>
</html>