<?php
include '../conf/koneksi.php';

if (isset($_POST['tambah'])) {
	$id_pasien = $_POST['id_pasien'];
	$id_obat = $_POST['id_obat'];
	$jenis_layanan = $_POST['jenis_layanan'];
	$tanggal = $_POST['tanggal'];
	$keterangan = $_POST['keterangan'];
	$total_biaya = $_POST['total_biaya'];

	$query = "
		INSERT INTO  (
			id_pasien, 
			id_obat, 
			jenis_layanan, 
			tanggal,
			keterangan, 
			total_biaya 
		) VALUES (
			'$id_pasien',
			'$id_obat',
			'$jenis_layanan',
			'$tanggal',
			'$keterangan',
			'$total_biaya' 
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		header('location: ../transaksi.php');
	} else {
		echo $query;
	}
}

if (isset($_POST['update'])) {
	$id_pasien = $_POST['id_pasien'];
	$id_obat = $_POST['id_obat'];
	$jenis_layanan = $_POST['jenis_layanan'];
	$tanggal = $_POST['tanggal'];
	$keterangan = $_POST['keterangan'];
	$total_biaya = $_POST['total_biaya'];
	$query = "
		UPDATE transaksi SET 
		id_pasien ='$id_pasien',
		id_obat ='$id_obat',
		jenis_layanan ='$jenis_layanan',
		tanggal ='$tanggal',
		keterangan ='$keterangan',
		total_biaya='$total_biaya' 
		WHERE 
			id=" . $_POST['id'];
	if (mysqli_query($koneksi, $query) === TRUE) {
		header('location: ../transaksi.php');
	} else {
		echo $query;
	}
}
if (isset($_POST['batal'])) {

	header('location: ../transaksi.php');
}
