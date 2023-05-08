<?php 
include("../config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$status_nikah = $_POST['status_nikah'];
	$no_wa = $_POST['no_wa'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];

	// buat query
	$sql = "INSERT INTO data_member (nama, tanggal_lahir, jenis_kelamin, status_nikah, no_wa, email, alamat) VALUE ('$nama', '$tanggal_lahir', '$jenis_kelamin', '$status_nikah', '$no_wa', '$email', '$alamat')";
	$query = mysqli_query($db, $sql);

	// apakah query simpan berhasil?
	if( $query ) {
		header('Location: ../halaman_member/member.php?status=sukses');
	}else {
		header('Location: ../halaman_member/member.php?status=gagal');
	}
	
}else {
	die("Akses dilarang...")
}

 ?>