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
	$biaya = $_POST['biaya'];

	$query = "
		INSERT INTO data_kb (
			id_pasien, 
			id_bidan, 
			id_obat, 
			tanggal, 
			lama_baru, 
			jenis_kb, 
			biaya, 
			tanggal_kembali 
		) VALUES (
			'$id_pasien',
			'$id_bidan',
			'$id_obat',
			'$tanggal',
			'$lama_baru',
			'$jenis_kb',
			'$biaya',
			'$tanggal_kembali' 
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Tambah');</script>";
		echo "<script>window.location = '../kb.php';</script>";
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
	$biaya = $_POST['biaya'];
	$query = "UPDATE data_kb SET id_pasien='$id_pasien', id_bidan='$id_bidan', id_obat='$id_obat', tanggal='$tanggal', tanggal_kembali = '$tanggal_kembali', jenis_kb='$jenis_kb', lama_baru='$lama_baru', biaya='$biaya' WHERE id= " . $_POST['id'];
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Edit');</script>";
		echo "<script>window.location = '../kb.php';</script>";
	} else {
		echo $query;
	}
}

if (isset($_POST['cetak_filter_kb'])) {
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	header("location: ../laporan/filter_kb.php?bulan=" . $bulan . "&tahun=" . $tahun);
}


if (isset($_POST['batal'])) {

	header('location: ../kb.php');
}
