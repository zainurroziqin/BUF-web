<?php 
$conn= mysqli_connect("localhost", "root", "", "farm");


function query ($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;

}
// ambil data dari tiap elemen dalam form index.php
function tambah($data){
global $conn;
$nama = $data["nama"];
$alamat = $data["alamat"];
$username = stripslashes($data["username"]);
$password = mysqli_real_escape_string($conn, $data["password"]);
$role = $data["role"];
$telp = $data["telp"];
$tanggal_dibuat = $data["tanggal_dibuat"];

// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

// query insert data
$query = "INSERT INTO user
			VALUES 
			('','$nama','$alamat','$username','$password','$role','$telp','$tanggal_dibuat')
			";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);

}

// hapus data User
function hapus ($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM user WHERE id =$id");
	return mysqli_affected_rows($conn);
}

// function ubah
function ubah($data){
global $conn;
$id = $data ["id"];
$nama = $data["nama"];
$alamat = $data["alamat"];
$username = $data["username"];
$role = $data["role"];
$telp = $data["telp"];

// query insert data
$query = "UPDATE user SET
			nama = '$nama',
			alamat = '$alamat',
			username = '$username',
			role = '$role',
			telp = '$telp'
			WHERE id = $id
			";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// ambil data dari tiap elemen dalam form Kandang A
function tambahdatakandangA($kandang_a){
global $conn;
$tanggal = $kandang_a["tanggal"];
$pakan_total = $kandang_a["pakan_total"];
$sisa_1 = $kandang_a["sisa_1"];
$sisa_2 = $kandang_a["sisa_2"];
$sisa_3 = $kandang_a["sisa_3"];
$sisa_4 = $kandang_a["sisa_4"];
$sisa_5 = $kandang_a["sisa_5"];
$sisa_6 = $kandang_a["sisa_6"];
$jumlah_telur = $kandang_a["jumlah_telur"];
$berat_telur = $kandang_a["berat_telur"];
$mati = $kandang_a["mati"];
$afkir = $kandang_a["afkir"];
$suhu_pagi = $kandang_a["suhu_pagi"];
$suhu_siang = $kandang_a["suhu_siang"];
$suhu_sore = $kandang_a["suhu_sore"];
$nama = $kandang_a["nama"];
$keterangan = $kandang_a["keterangan"];

// query insert data
$query = "INSERT INTO kandang_a
			VALUES 
			('','$tanggal','$pakan_total','$sisa_1','$sisa_2','$sisa_3','$sisa_4','$sisa_5','$sisa_6','$jumlah_telur','$berat_telur','$mati','$afkir','$suhu_pagi','$suhu_siang','$suhu_sore','$nama','keterangan')
			";

mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}

// function hapus kandang A
function hapusA ($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM kandang_a WHERE id =$id");
	return mysqli_affected_rows($conn);
}

function ubahA($kandang_a){
	global $conn;
$id = $kandang_a["id"];
$tanggal = $kandang_a["tanggal"];
$pakan_total = $kandang_a["pakan_total"];
$sisa_1 = $kandang_a["sisa_1"];
$sisa_2 = $kandang_a["sisa_2"];
$sisa_3 = $kandang_a["sisa_3"];
$sisa_4 = $kandang_a["sisa_4"];
$sisa_5 = $kandang_a["sisa_5"];
$sisa_6 = $kandang_a["sisa_6"];
$jumlah_telur = $kandang_a["jumlah_telur"];
$berat_telur = $kandang_a["berat_telur"];
$mati = $kandang_a["mati"];
$afkir = $kandang_a["afkir"];
$suhu_pagi = $kandang_a["suhu_pagi"];
$suhu_siang = $kandang_a["suhu_siang"];
$suhu_sore = $kandang_a["suhu_sore"];
$keterangan = $kandang_a["keterangan"];

// query insert data
$query = "UPDATE kandang_a SET 
			tanggal = '$tanggal',
			pakan_total = '$pakan_total',
			sisa_1 = '$sisa_1',
			sisa_2 = '$sisa_2',
			sisa_3 = '$sisa_3',
			sisa_4 = '$sisa_4',
			sisa_5 = '$sisa_5',
			sisa_6 = '$sisa_6',
			jumlah_telur = '$jumlah_telur',
			berat_telur = '$berat_telur',
			mati = '$mati',
			afkir = '$afkir',
			suhu_pagi = '$suhu_pagi',
			suhu_siang = '$suhu_siang',
			suhu_sore = '$suhu_sore',
			keterangan ='$keterangan'	
			WHERE id = $id
			";

mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// ambil data dari tiap elemen dalam form Kandang B
function tambahdatakandangB($kandang_b){
global $conn;
$tanggal = $kandang_b["tanggal"];
$pakan_total = $kandang_b["pakan_total"];
$sisa_1 = $kandang_b["sisa_1"];
$sisa_2 = $kandang_b["sisa_2"];
$sisa_3 = $kandang_b["sisa_3"];
$sisa_4 = $kandang_b["sisa_4"];
$sisa_5 = $kandang_b["sisa_5"];
$sisa_6 = $kandang_b["sisa_6"];
$jumlah_telur = $kandang_b["jumlah_telur"];
$berat_telur = $kandang_b["berat_telur"];
$mati = $kandang_b["mati"];
$afkir = $kandang_b["afkir"];
$suhu_pagi = $kandang_b["suhu_pagi"];
$suhu_siang = $kandang_b["suhu_siang"];
$suhu_sore = $kandang_b["suhu_sore"];
$nama = $kandang_b["nama"];
$keterangan = $kandang_b["keterangan"];

// query insert data
$query = "INSERT INTO kandang_b
			VALUES 
			('','$tanggal','$pakan_total','$sisa_1','$sisa_2','$sisa_3','$sisa_4','$sisa_5','$sisa_6','$jumlah_telur','$berat_telur','$mati','$afkir','$suhu_pagi','$suhu_siang','$suhu_sore','$nama','keterangan')
			";

mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}

function ubahB($kandang_b){
	global $conn;
$id = $kandang_b["id"];
$tanggal = $kandang_b["tanggal"];
$pakan_total = $kandang_b["pakan_total"];
$sisa_1 = $kandang_b["sisa_1"];
$sisa_2 = $kandang_b["sisa_2"];
$sisa_3 = $kandang_b["sisa_3"];
$sisa_4 = $kandang_b["sisa_4"];
$sisa_5 = $kandang_b["sisa_5"];
$sisa_6 = $kandang_b["sisa_6"];
$jumlah_telur = $kandang_b["jumlah_telur"];
$berat_telur = $kandang_b["berat_telur"];
$mati = $kandang_b["mati"];
$afkir = $kandang_b["afkir"];
$suhu_pagi = $kandang_b["suhu_pagi"];
$suhu_siang = $kandang_b["suhu_siang"];
$suhu_sore = $kandang_b["suhu_sore"];
$keterangan = $kandang_b["keterangan"];

// query insert data
$query = "UPDATE kandang_b SET 
			tanggal = '$tanggal',
			pakan_total = '$pakan_total',
			sisa_1 = '$sisa_1',
			sisa_2 = '$sisa_2',
			sisa_3 = '$sisa_3',
			sisa_4 = '$sisa_4',
			sisa_5 = '$sisa_5',
			sisa_6 = '$sisa_6',
			jumlah_telur = '$jumlah_telur',
			berat_telur = '$berat_telur',
			mati = '$mati',
			afkir = '$afkir',
			suhu_pagi = '$suhu_pagi',
			suhu_siang = '$suhu_siang',
			suhu_sore = '$suhu_sore',
			keterangan ='$keterangan'	
			WHERE id = $id
			";

mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}

// function hapus kandang B
function hapusB ($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM kandang_b WHERE id =$id");
	return mysqli_affected_rows($conn);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// ambil data dari tiap elemen dalam form Kandang C
function tambahdatakandangC($kandang_c){
global $conn;
$tanggal = $kandang_c["tanggal"];
$pakan_total = $kandang_c["pakan_total"];
$sisa_1 = $kandang_c["sisa_1"];
$sisa_2 = $kandang_c["sisa_2"];
$sisa_3 = $kandang_c["sisa_3"];
$sisa_4 = $kandang_c["sisa_4"];
$sisa_5 = $kandang_c["sisa_5"];
$sisa_6 = $kandang_c["sisa_6"];
$jumlah_telur = $kandang_c["jumlah_telur"];
$berat_telur = $kandang_c["berat_telur"];
$mati = $kandang_c["mati"];
$afkir = $kandang_c["afkir"];
$suhu_pagi = $kandang_c["suhu_pagi"];
$suhu_siang = $kandang_c["suhu_siang"];
$suhu_sore = $kandang_c["suhu_sore"];
$nama = $kandang_c["nama"];
$keterangan = $kandang_c["keterangan"];

// query insert data
$query = "INSERT INTO kandang_c
			VALUES 
			('','$tanggal','$pakan_total','$sisa_1','$sisa_2','$sisa_3','$sisa_4','$sisa_5','$sisa_6','$jumlah_telur','$berat_telur','$mati','$afkir','$suhu_pagi','$suhu_siang','$suhu_sore','$nama','keterangan')
			";

mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}


// Ubah kandang C
function ubahC($kandang_c){
	global $conn;
$id = $kandang_c["id"];
$tanggal = $kandang_c["tanggal"];
$pakan_total = $kandang_c["pakan_total"];
$sisa_1 = $kandang_c["sisa_1"];
$sisa_2 = $kandang_c["sisa_2"];
$sisa_3 = $kandang_c["sisa_3"];
$sisa_4 = $kandang_c["sisa_4"];
$sisa_5 = $kandang_c["sisa_5"];
$sisa_6 = $kandang_c["sisa_6"];
$jumlah_telur = $kandang_c["jumlah_telur"];
$berat_telur = $kandang_c["berat_telur"];
$mati = $kandang_c["mati"];
$afkir = $kandang_c["afkir"];
$suhu_pagi = $kandang_c["suhu_pagi"];
$suhu_siang = $kandang_c["suhu_siang"];
$suhu_sore = $kandang_c["suhu_sore"];
$keterangan = $kandang_c["keterangan"];

// query insert data
$query = "UPDATE kandang_c SET 
			tanggal = '$tanggal',
			pakan_total = '$pakan_total',
			sisa_1 = '$sisa_1',
			sisa_2 = '$sisa_2',
			sisa_3 = '$sisa_3',
			sisa_4 = '$sisa_4',
			sisa_5 = '$sisa_5',
			sisa_6 = '$sisa_6',
			jumlah_telur = '$jumlah_telur',
			berat_telur = '$berat_telur',
			mati = '$mati',
			afkir = '$afkir',
			suhu_pagi = '$suhu_pagi',
			suhu_siang = '$suhu_siang',
			suhu_sore = '$suhu_sore',
			keterangan ='$keterangan'	
			WHERE id = $id
			";

mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}

// function hapus kandang B
function hapusC ($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM kandang_c WHERE id =$id");
	return mysqli_affected_rows($conn);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// ambil data dari tiap elemen dalam form Kandang C
function tambahdatakandangD($kandang_d){
global $conn;
$tanggal = $kandang_d["tanggal"];
$pakan_total = $kandang_d["pakan_total"];
$sisa_1 = $kandang_d["sisa_1"];
$sisa_2 = $kandang_d["sisa_2"];
$sisa_3 = $kandang_d["sisa_3"];
$sisa_4 = $kandang_d["sisa_4"];
$sisa_5 = $kandang_d["sisa_5"];
$sisa_6 = $kandang_d["sisa_6"];
$jumlah_telur = $kandang_d["jumlah_telur"];
$berat_telur = $kandang_d["berat_telur"];
$mati = $kandang_d["mati"];
$afkir = $kandang_d["afkir"];
$suhu_pagi = $kandang_d["suhu_pagi"];
$suhu_siang = $kandang_d["suhu_siang"];
$suhu_sore = $kandang_d["suhu_sore"];
$nama = $kandang_d["nama"];
$keterangan = $kandang_d["keterangan"];

// query insert data
$query = "INSERT INTO kandang_d
			VALUES 
			('','$tanggal','$pakan_total','$sisa_1','$sisa_2','$sisa_3','$sisa_4','$sisa_5','$sisa_6','$jumlah_telur','$berat_telur','$mati','$afkir','$suhu_pagi','$suhu_siang','$suhu_sore','$nama','keterangan')
			";

mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}


// Ubah kandang C
function ubahD($kandang_d){
	global $conn;
$id = $kandang_d["id"];
$tanggal = $kandang_d["tanggal"];
$pakan_total = $kandang_d["pakan_total"];
$sisa_1 = $kandang_d["sisa_1"];
$sisa_2 = $kandang_d["sisa_2"];
$sisa_3 = $kandang_d["sisa_3"];
$sisa_4 = $kandang_d["sisa_4"];
$sisa_5 = $kandang_d["sisa_5"];
$sisa_6 = $kandang_d["sisa_6"];
$jumlah_telur = $kandang_d["jumlah_telur"];
$berat_telur = $kandang_d["berat_telur"];
$mati = $kandang_d["mati"];
$afkir = $kandang_d["afkir"];
$suhu_pagi = $kandang_d["suhu_pagi"];
$suhu_siang = $kandang_d["suhu_siang"];
$suhu_sore = $kandang_d["suhu_sore"];
$keterangan = $kandang_d["keterangan"];

// query insert data
$query = "UPDATE kandang_d SET 
			tanggal = '$tanggal',
			pakan_total = '$pakan_total',
			sisa_1 = '$sisa_1',
			sisa_2 = '$sisa_2',
			sisa_3 = '$sisa_3',
			sisa_4 = '$sisa_4',
			sisa_5 = '$sisa_5',
			sisa_6 = '$sisa_6',
			jumlah_telur = '$jumlah_telur',
			berat_telur = '$berat_telur',
			mati = '$mati',
			afkir = '$afkir',
			suhu_pagi = '$suhu_pagi',
			suhu_siang = '$suhu_siang',
			suhu_sore = '$suhu_sore',
			keterangan ='$keterangan'	
			WHERE id = $id
			";

mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}


// function hapus kandang B
function hapusD ($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM kandang_d WHERE id =$id");
	return mysqli_affected_rows($conn);
}

 ?>
