<?php
include '../conf/koneksi.php';
if (isset($_POST['tambah'])) {
	$nama_bidan	= $_POST['nama_bidan'];
	$no_surat_izin	= $_POST['no_surat_izin'];
	$pendidikan_terakhir	= $_POST['pendidikan_terakhir'];
	$nomor_telepon	= $_POST['nomor_telepon'];
	$tempat_lahir	= $_POST['tempat_lahir'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$tmt	= $_POST['tmt'];
	$alamat	= $_POST['alamat'];

	$target_dir = "../uploads/";

	$upload = false;

	

	// Check file size

	$imageFileType = strtolower(pathinfo(basename($_FILES["lampiran_surat_izin"]["name"]),PATHINFO_EXTENSION));
	if (
		$imageFileType != "pdf" 
	) {
		$upload = true;
		$_SESSION['lampiran_surat_izin'] = "Surat Izin Harus pdf";
	}

	if ($_FILES["lampiran_surat_izin"]["size"] > 5000000) {
		$upload = true;
		$_SESSION['lampiran_surat_izin'] = "Surat Izin Terlalu Besar";
	}
	$imageFileType = strtolower(pathinfo(basename($_FILES["lampiran_ijazah"]["name"]),PATHINFO_EXTENSION));
	if (
		$imageFileType != "pdf" 
	) {
		$upload = true;
		$_SESSION['lampiran_ijazah'] = "Ijazah Harus pdf";
	}
	// Check file size
	if ($_FILES["lampiran_ijazah"]["size"] > 5000000) {
		$upload = true;
		$_SESSION['lampiran_ijazah'] = "Ijazah Terlalu Besar";
	}
	// Check file size
	// Allow certain file formats
	$imageFileType = strtolower(pathinfo(basename($_FILES["sk"]["name"]),PATHINFO_EXTENSION));
	if (
		$imageFileType != "pdf" 
	) {
		$upload = true;
		$_SESSION['sk'] = "SK Harus pdf";
	}
	if ($_FILES["sk"]["size"] > 5000000) {
		$upload = true;
		$_SESSION['sk'] = "SK Terlalu Besar";
	}

	// Allow certain file formats
	$imageFileType = strtolower(pathinfo(basename($_FILES["foto"]["name"]),PATHINFO_EXTENSION));
	if (
		$imageFileType != "jpg" && $imageFileType != "png"
	) {
		$upload = true;
		$_SESSION['foto'] = "Gambar harus jpg atau png";
	}
	// Check file size
	if ($_FILES["foto"]["size"] > 5000000) {
		$upload = true;
		$_SESSION['foto'] = "Foto Terlalu Besar";
	}


	if ($upload) {
		header('location: ../bidan.php');
		exit;
	}

	$lampiran_surat_izin = $target_dir . basename($_FILES["lampiran_surat_izin"]["name"]) . "." . strtolower(pathinfo(basename($_FILES["lampiran_surat_izin"]["name"]), PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["lampiran_surat_izin"]["tmp_name"], $lampiran_surat_izin);


	$lampiran_ijazah = $target_dir . basename($_FILES["lampiran_ijazah"]["name"]) . "." . strtolower(pathinfo(basename($_FILES["lampiran_ijazah"]["name"]), PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["lampiran_ijazah"]["tmp_name"], $lampiran_ijazah);


	$sk = $target_dir . basename($_FILES["sk"]["name"]) . "." . strtolower(pathinfo(basename($_FILES["sk"]["name"]), PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["sk"]["tmp_name"], $sk);


	$foto = $target_dir . basename($_FILES["foto"]["name"]) . "." . strtolower(pathinfo(basename($_FILES["foto"]["name"]), PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);

	$query = "
		INSERT INTO data_bidan (
			nama_bidan, 
			no_surat_izin, 
			lampiran_surat_izin, 
			pendidikan_terakhir, 
			lampiran_ijazah, 
			tempat_lahir, 
			tanggal_lahir, 
			alamat, 
			nomor_telepon, 
			tmt, 
			foto, 
			sk
		) VALUES (
			'$nama_bidan',
			'$no_surat_izin',
			'$lampiran_surat_izin',
			'$pendidikan_terakhir',
			'$lampiran_ijazah',
			'$tempat_lahir',
			'$tanggal_lahir',
			'$alamat',
			'$nomor_telepon',
			'$tmt',
			'$foto',
			'$sk' 
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Tambah');</script>";
		echo "<script>window.location = '../bidan.php';</script>";
	} else {
		echo $query;
	}
}

if (isset($_POST['edit'])) {
	$sql = mysqli_query($koneksi, "SELECT * FROM data_bidan WHERE id='$id'");
	$data = mysqli_fetch_array($sql);

	$id = $_POST['id'];

	$nama_bidan	= $_POST['nama_bidan'];
	$no_surat_izin	= $_POST['no_surat_izin'];
	$pendidikan_terakhir	= $_POST['pendidikan_terakhir'];
	$nomor_telepon	= $_POST['nomor_telepon'];
	$tempat_lahir	= $_POST['tempat_lahir'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$tmt	= $_POST['tmt'];
	$alamat	= $_POST['alamat'];

	$target_dir = "../uploads/";

	if ($_FILES['lampiran_surat_izin']['error'] != 4) {
		$lampiran_surat_izin = $target_dir . basename($_FILES["lampiran_surat_izin"]["name"]) . "." . strtolower(pathinfo(basename($_FILES["lampiran_surat_izin"]["name"]), PATHINFO_EXTENSION));
		move_uploaded_file($_FILES["lampiran_surat_izin"]["tmp_name"], $lampiran_surat_izin);
	} else {
		$lampiran_surat_izin = $data['lampiran_surat_izin'];
	}

	if ($_FILES['lampiran_ijazah']['error'] != 4) {
		$lampiran_ijazah = $target_dir . basename($_FILES["lampiran_ijazah"]["name"]) . "." . strtolower(pathinfo(basename($_FILES["lampiran_ijazah"]["name"]), PATHINFO_EXTENSION));
		move_uploaded_file($_FILES["lampiran_ijazah"]["tmp_name"], $lampiran_ijazah);
	} else {
		$lampiran_ijazah = $data['lampiran_ijazah'];
	}

	if ($_FILES['sk']['error'] != 4) {
		$sk = $target_dir . basename($_FILES["sk"]["name"]) . "." . strtolower(pathinfo(basename($_FILES["sk"]["name"]), PATHINFO_EXTENSION));
		move_uploaded_file($_FILES["sk"]["tmp_name"], $sk);
	} else {
		$sk = $data['sk'];
	}

	if ($_FILES['foto']['error'] != 4) {
		$foto = $target_dir . basename($_FILES["foto"]["name"]) . "." . strtolower(pathinfo(basename($_FILES["foto"]["name"]), PATHINFO_EXTENSION));
		move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);
	} else {
		$foto = $data['foto'];
	}


	$query = "
		UPDATE data_bidan SET 
			nama_bidan='$nama_bidan',
			no_surat_izin= '$no_surat_izin',
			lampiran_surat_izin= '$lampiran_surat_izin',
			pendidikan_terakhir= '$pendidikan_terakhir',
			lampiran_ijazah= 	'$lampiran_ijazah',
			tempat_lahir= 	'$tempat_lahir',
			tanggal_lahir= '$tanggal_lahir',
			alamat= 	'$alamat',
			nomor_telepon= 	'$nomor_telepon',
			tmt= 	'$tmt',
			foto= '$foto',
			sk=	'$sk' 
		WHERE 
			id=" . $_POST['id'];
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Edit');</script>";
		echo "<script>window.location = '../bidan.php';</script>";
	} else {
		echo $query;
	}
}



if (isset($_POST['cetak_filter_bidan'])) {
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	header("location: ../laporan/filter_bidan.php?bulan=" . $bulan . "&tahun=" . $tahun);
}

if (isset($_POST['batal'])) {

	header('location: ../bidan.php');
}
