<?php
include '../conf/koneksi.php';

if (isset($_POST['tambah'])) {
	$id_bayi	= $_POST['id_bayi'];
	$id_bidan	= $_POST['id_bidan'];
	$id_jenis_imunisasi	= $_POST['id_jenis_imunisasi'];
	$waktu_pemberian	= $_POST['waktu_pemberian'];
	
	$query = "
		INSERT INTO data_imunisasi (
			id_bayi, 
			id_bidan, 
			id_jenis_imunisasi, 
			waktu_pemberian ,
			biaya
		) VALUES (
			'$id_bayi',
			'$id_bidan',
			'$id_jenis_imunisasi',
			'$waktu_pemberian'
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Tambah');</script>";
		echo "<script>window.location = '../imunisasi.php';</script>";
	} else {
		echo $query;
	}
}

if (isset($_POST['edit'])) {
	$id = $_POST['id'];

	$id_bayi	= $_POST['id_bayi'];
	$id_bidan	= $_POST['id_bidan'];
	$id_jenis_imunisasi	= $_POST['id_jenis_imunisasi'];
	$waktu_pemberian	= $_POST['waktu_pemberian'];

	$query = "
		UPDATE data_imunisasi SET 
			id_bayi='$id_bayi', 
			id_bidan='$id_bidan', 
			id_jenis_imunisasi='$id_jenis_imunisasi', 
			waktu_pemberian='$waktu_pemberian'
		WHERE 
			id=" . $_POST['id'];
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Edit');</script>";
		echo "<script>window.location = '../imunisasi.php';</script>";
	} else {
		echo $query;
	}
}
if (isset($_POST['cetak_filter_imunisasi'])) {
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	header("location: ../laporan/filter_imunisasi.php?bulan=" . $bulan . "&tahun=" . $tahun);
}


if (isset($_POST['batal'])) {

	header('location: ../imunisasi.php');
}
