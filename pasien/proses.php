<?php
include '../conf/koneksi.php';

if (isset($_POST['tambah'])) {
	$nik	= $_POST['nik'];
	$nama_pasien	= $_POST['nama_pasien'];
	$nama_suami	= $_POST['nama_suami'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$tanggal_lahir_suami	= $_POST['tanggal_lahir_suami'];
	$alamat	= $_POST['alamat'];

	$target_dir = "../uploads/";

$upload = false;
	// Check file size

	$imageFileType = strtolower(pathinfo(basename($_FILES["lampiran_ktp"]["name"]),PATHINFO_EXTENSION));
	if (
		$imageFileType != "pdf" 
	) {
		$upload = true;
		$_SESSION['lampiran_ktp'] = "Surat Izin Harus pdf";
	}

	if ($_FILES["lampiran_ktp"]["size"] > 5000000) {
		$upload = true;
		$_SESSION['lampiran_ktp'] = "Surat Izin Terlalu Besar";
	}

	if ($upload) {
		header('location: ../pasien.php');
		exit;
	}


	$lampiran_ktp = $target_dir . basename($_FILES["lampiran_ktp"]["name"]) . "." . strtolower(pathinfo(basename($_FILES["lampiran_ktp"]["name"]), PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["lampiran_ktp"]["tmp_name"], $lampiran_ktp);

	$query = "
		INSERT INTO data_pasien (
			nik, 
			nama_pasien, 
			nama_suami, 
			tanggal_lahir, 
			tanggal_lahir_suami, 
			alamat, 
			lampiran_ktp, 
			tanggal_kunjungan_pertama 
		) VALUES (
			'$nik',
			'$nama_pasien',
			'$nama_suami',
			'$tanggal_lahir',
			'$tanggal_lahir_suami',
			'$alamat',
			'$lampiran_ktp',
			'" . Date("Y-m-d") . "' 
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Tambah');</script>";
		echo "<script>window.location = '../pasien.php';</script>";
	} else {
		echo $query;
	}
}

if (isset($_POST['edit'])) {
	$id = $_POST['id'];

	$nik	= $_POST['nik'];
	$nama_pasien	= $_POST['nama_pasien'];
	$nama_suami	= $_POST['nama_suami'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$tanggal_lahir_suami	= $_POST['tanggal_lahir_suami'];
	$alamat	= $_POST['alamat'];

	$target_dir = "../uploads/";

	if ($_FILES['lampiran_ktp']['error'] != 4) {
		$lampiran_ktp = $target_dir . basename($_FILES["lampiran_ktp"]["name"]) . "." . strtolower(pathinfo(basename($_FILES["lampiran_ktp"]["name"]), PATHINFO_EXTENSION));
		move_uploaded_file($_FILES["lampiran_ktp"]["tmp_name"], $lampiran_ktp);
	} else {
		$lampiran_ktp = $data['lampiran_ktp'];
	}

	$query = "
		UPDATE data_pasien SET 
			nik='$nik',
			nama_pasien='$nama_pasien',
			nama_suami= '$nama_suami',
			tanggal_lahir= '$tanggal_lahir',
			tanggal_lahir_suami= '$tanggal_lahir_suami',
			lampiran_ktp= '$lampiran_ktp',
			alamat= '$alamat' 
		WHERE 
			id=" . $_POST['id'];
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Edit');</script>";
		echo "<script>window.location = '../pasien.php';</script>";
	} else {
		echo $query;
	}
}

if (isset($_POST['cetak_filter_pasien'])) {
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	header("location: ../laporan/filter_pasien.php?bulan=" . $bulan . "&tahun=" . $tahun);
}


if (isset($_POST['batal'])) {

	header('location: ../pasien.php');
}
