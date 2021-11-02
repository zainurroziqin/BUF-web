<?php 
require "koneksi.php";
$id = $_GET["id"];

if (hapusA($id) > 0){
		echo "
	<script>
	alert ('data berhasil dihapus!')
	document.location.href ='kandangA.php';
	</script>";
} else {
	echo "
	<script>
	alert ('data gagal dihapus!')
	document.location.href ='kandangA.php';
	</script>";
}

 ?>