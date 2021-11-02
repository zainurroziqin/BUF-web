<?php
session_start();
if ( !isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

require'koneksi.php';
$user = query("SELECT * FROM user")

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
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
<h1>Daftar Pengguna</h1>
<a href="tambah.php">Tambah Data Baru</a>
<br><br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Role</th>
		<th>Tanggal Dibuat</th>
		<th>Opsi</th>

	</tr>

<?php $i =1; ?>
<?php foreach ($user as $usr ): ?>
	<tr>
	<td><?=$i; ?></td>
	<td><?= $usr["nama"]; ?></td>
	<td><?= $usr["role"]; ?></td>
	<td><?= $usr["tanggal_dibuat"]; ?></td>
	<td>
		<a href="Ubah.php?id=<?=$usr["id"]; ?> ">Detail</a>
		<a href="hapus.php?id=<?=$usr["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
	</td>
	</tr>
	<?php $i ++; ?>
<?php endforeach; ?>
</table>

</body>
</html>