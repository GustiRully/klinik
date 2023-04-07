<?php
include '../conf/koneksi.php';

if (isset($_POST['tambah'])) {
	$id_pasien	= $_POST['id_pasien'];
	$id_bidan	= $_POST['id_bidan'];
	$id_obat	= $_POST['id_obat'];
	$tgl_lahir	= $_POST['tgl_lahir'];
	$berat_badan	= $_POST['berat_badan'];
	$panjang_badan	= $_POST['panjang_badan'];
	$lingkar_kepala	= $_POST['lingkar_kepala'];
	$lingkar_dada	= $_POST['lingkar_dada'];
	$jenis_kelamin	= $_POST['jenis_kelamin'];
	$anak_ke	= $_POST['anak_ke'];
	$vit_k	= $_POST['vit_k'];
	$HB_0	= $_POST['HB_0'];
	$salep_mata	= $_POST['salep_mata'];
	$keterangan	= $_POST['keterangan'];
	$biaya	= $_POST['biaya'];

	$query = "
		INSERT INTO data_bersalin (
			id_pasien, 
			id_bidan, 
			id_obat, 
			tgl_lahir, 
			berat_badan, 
			panjang_badan, 
			lingkar_kepala, 
			lingkar_dada, 
			jenis_kelamin, 
			anak_ke, 
			vit_k, 
			HB_0, 
			salep_mata, 
			biaya, 
			keterangan
		) VALUES (
			'$id_pasien',
			'$id_bidan',
			'$id_obat',
			'$tgl_lahir',
			'$berat_badan',
			'$panjang_badan',
			'$lingkar_kepala',
			'$lingkar_dada',
			'$jenis_kelamin',
			'$anak_ke',
			'$vit_k',
			'$HB_0',
			'$salep_mata',
			'$biaya',
			'$keterangan'
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Tambah');</script>";
		echo "<script>window.location = '../bersalin.php';</script>";
	} else {
		echo $query;
	}
}

if (isset($_POST['edit'])) {
	$id = $_POST['id'];

	$id_pasien	= $_POST['id_pasien'];
	$id_bidan	= $_POST['id_bidan'];
	$id_obat	= $_POST['id_obat'];
	$tgl_lahir	= $_POST['tgl_lahir'];
	$berat_badan	= $_POST['berat_badan'];
	$panjang_badan	= $_POST['panjang_badan'];
	$lingkar_kepala	= $_POST['lingkar_kepala'];
	$lingkar_dada	= $_POST['lingkar_dada'];
	$jenis_kelamin	= $_POST['jenis_kelamin'];
	$anak_ke	= $_POST['anak_ke'];
	$vit_k	= $_POST['vit_k'];
	$HB_0	= $_POST['HB_0'];
	$salep_mata	= $_POST['salep_mata'];
	$keterangan	= $_POST['keterangan'];
	$biaya	= $_POST['biaya'];

	$query = "
		UPDATE data_bersalin SET 
			id_pasien='$id_pasien', 
			id_bidan='$id_bidan', 
			id_obat='$id_obat', 
			tgl_lahir='$tgl_lahir', 
			berat_badan='$berat_badan', 
			panjang_badan='$panjang_badan', 
			lingkar_kepala='$lingkar_kepala', 
			lingkar_dada='$lingkar_dada', 
			jenis_kelamin='$jenis_kelamin', 
			anak_ke='$anak_ke', 
			vit_k='$vit_k', 
			HB_0='$HB_0', 
			salep_mata='$salep_mata', 
			biaya='$biaya', 
			keterangan='$keterangan'
		WHERE 
			id=" . $_POST['id'];
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Edit');</script>";
		echo "<script>window.location = '../bersalin.php';</script>";
	
	} else {
		echo $query;
	}
}

if (isset($_POST['cetak_filter_bersalin'])) {
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	header("location: ../laporan/filter_bersalin.php?bulan=" . $bulan . "&tahun=" . $tahun);
}


if (isset($_POST['batal'])) {

	header('location: ../bersalin.php');
}
