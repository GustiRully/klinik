<?php
include '../conf/koneksi.php';

if (isset($_POST['tambah'])) {
	$nama	= $_POST['nama'];
	$kadaluarsa	= $_POST['kadaluarsa'];
	$biaya	= $_POST['biaya'];

	$query = "
		INSERT INTO data_jenis_imunisasi (
			nama, 
			biaya, 
			kadaluarsa 
		) VALUES (
			'$nama',
			'$biaya',
			'$kadaluarsa' 
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Tambah');</script>";
		echo "<script>window.location = '../jenis_imunisasi.php';</script>";
	} else {
		echo $query;
	}
}

if (isset($_POST['edit'])) {
	$id = $_POST['id'];

	$nama	= $_POST['nama'];
	$kadaluarsa	= $_POST['kadaluarsa'];
	$biaya	= $_POST['biaya'];

	$query = "
		UPDATE data_jenis_imunisasi SET 
			nama='$nama',
			biaya='$biaya',
			kadaluarsa= '$kadaluarsa' 
		WHERE 
			id=" . $_POST['id'];
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Edit');</script>";
		echo "<script>window.location = '../jenis_imunisasi.php';</script>";
	} else {
		echo $query;
	}
}



if (isset($_POST['batal'])) {

	header('location: ../jenis_imunisasi.php');
}
