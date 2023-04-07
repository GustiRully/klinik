<?php
include '../conf/koneksi.php';

if (isset($_POST['tambah'])) {
	$nama_obat	= $_POST['nama_obat'];
	$harga	= $_POST['harga'];
	$stok	= $_POST['stok'];

	$query = "
		INSERT INTO data_obat (
			nama_obat, 
			harga, 
			stok, 
			tanggal_input, 
			tanggal_perbaharui_stok 
		) VALUES (
			'$nama_obat',
			'$harga',
			'$stok',
			'" . Date("Y-m-d") . "',
			'" . Date("Y-m-d") . "' 
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Tambah');</script>";
		echo "<script>window.location = '../obat.php';</script>";
	} else {
		echo $query;
	}
}

if (isset($_POST['edit'])) {
	$id = $_POST['id'];

	$nama_obat	= $_POST['nama_obat'];
	$harga	= $_POST['harga'];
	$stok	= $_POST['stok'];

	$query = "
		UPDATE data_obat SET 
			nama_obat='$nama_obat',
			harga= '$harga',
			stok= '$stok',
			tanggal_perbaharui_stok= '".Date("Y-m-d")."' 
		WHERE 
			id=" . $_POST['id'];
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Edit');</script>";
		echo "<script>window.location = '../obat.php';</script>";
	} else {
		echo $query;
	}
}



if (isset($_POST['batal'])) {

	header('location: ../obat.php');
}
