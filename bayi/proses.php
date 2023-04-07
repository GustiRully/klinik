<?php
include '../conf/koneksi.php';

if (isset($_POST['tambah'])) {
	$nama_bayi	= $_POST['nama_bayi'];
	$tempat_lahir	= $_POST['tempat_lahir'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$berat_badan	= $_POST['berat_badan'];
	$panjang_badan	= $_POST['panjang_badan'];
	$tempat_persalinan	= $_POST['tempat_persalinan'];
	$nama_ayah	= $_POST['nama_ayah'];
	$nama_ibu	= $_POST['nama_ibu'];
	$alamat	= $_POST['alamat'];
	$nomor_telepon	= $_POST['nomor_telepon'];

	$query = "
		INSERT INTO data_bayi (
			nama_bayi, 
			tempat_lahir, 
			tanggal_lahir, 
			berat_badan, 
			panjang_badan, 
			tempat_persalinan, 
			nama_ayah, 
			nama_ibu, 
			alamat, 
			nomor_telepon 
		) VALUES (
			'$nama_bayi',
			'$tempat_lahir',
			'$tanggal_lahir',
			'$berat_badan',
			'$panjang_badan',
			'$tempat_persalinan',
			'$nama_ayah',
			'$nama_ibu',
			'$alamat',
			'$nomor_telepon' 
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Tambah');</script>";
		echo "<script>window.location = '../bayi.php';</script>";
	} else {
		echo $query;
	}
}

if (isset($_POST['edit'])) {
	$id = $_POST['id'];

	$nama_bayi	= $_POST['nama_bayi'];
	$tempat_lahir	= $_POST['tempat_lahir'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$berat_badan	= $_POST['berat_badan'];
	$panjang_badan	= $_POST['panjang_badan'];
	$tempat_persalinan	= $_POST['tempat_persalinan'];
	$nama_ayah	= $_POST['nama_ayah'];
	$nama_ibu	= $_POST['nama_ibu'];
	$alamat	= $_POST['alamat'];
	$nomor_telepon	= $_POST['nomor_telepon'];

	$query = "
		UPDATE data_bayi SET 
			nama_bayi='$nama_bayi',
			tempat_lahir= '$tempat_lahir',
			tanggal_lahir= '$tanggal_lahir',
			berat_badan= '$berat_badan',
			panjang_badan= '$panjang_badan',
			tempat_persalinan= '$tempat_persalinan',
			nama_ayah= '$nama_ayah',
			nama_ibu= '$nama_ibu',
			alamat= '$alamat',
			nomor_telepon= '$nomor_telepon' 
		WHERE 
			id=" . $_POST['id'];
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Edit');</script>";
		echo "<script>window.location = '../bayi.php';</script>";
	} else {
		echo $query;
	}
}



if (isset($_POST['batal'])) {

	header('location: ../bayi.php');
}
