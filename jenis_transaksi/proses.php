<?php
include '../conf/koneksi.php';

if (isset($_POST['tambah'])) {
	$id_pasien = $_POST['id_pasien'];
	$id_bidan = $_POST['id_bidan'];
	$id_obat = $_POST['id_obat'];
	$tanggal = $_POST['tanggal'];
	$tanggal_kembali = $_POST['tanggal_kembali'];
	$jenis_kb = $_POST['jenis_kb'];
	$lama_baru = $_POST['lama_baru'];

	$query = "
		INSERT INTO data_kb (
			id_pasien, 
			id_bidan, 
			id_obat, 
			tanggal, 
			lama_baru, 
			jenis_kb, 
			tanggal_kembali 
		) VALUES (
			'$id_pasien',
			'$id_bidan',
			'$id_obat',
			'$tanggal',
			'$lama_baru',
			'$jenis_kb',
			'$tanggal_kemballi' 
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		header('location: ../kb.php');
	} else {
		echo $query;
	}
}

if (isset($_POST['edit'])) {
	$id_pasien = $_POST['id_pasien'];
	$id_bidan = $_POST['id_bidan'];
	$id_obat = $_POST['id_obat'];
	$tanggal = $_POST['tanggal'];
	$tanggal_kembali = $_POST['tanggal_kembali'];
	$jenis_kb = $_POST['jenis_kb'];
	$lama_baru = $_POST['lama_baru'];
	$query = "
		UPDATE data_kb SET 
			id_pasien='$id_pasien',
			id_bidan='$id_bidan',
			id_obat='$id_obat',
			tanggal='$tanggal',
			tanggal_kembali='$tanggal_kembali',
			jenis_kb='$jenis_kb',
			lama_baru='$lama_baru',
		WHERE 
			id=" . $_POST['id'];
	if (mysqli_query($koneksi, $query) === TRUE) {
		header('location: ../kb.php');
	} else {
		echo $query;
	}
}
if (isset($_POST['batal'])) {

	header('location: ../kb.php');
}
