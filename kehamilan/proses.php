<?php
include '../conf/koneksi.php';

if (isset($_POST['tambah'])) {
	$id_pasien	= $_POST['id_pasien'];
	$id_bidan	= $_POST['id_bidan'];
	$id_obat	= $_POST['id_obat'];
	$haid_terakhir	= $_POST['haid_terakhir'];
	$perkiraan_persalinan	= $_POST['perkiraan_persalinan'];
	$lingkaran_lengan_atas	= $_POST['lingkaran_lengan_atas'];
	$umur_kehamilan	= $_POST['umur_kehamilan'];
	$tinggi_badan	= $_POST['tinggi_badan'];
	$hasil_pemeriksaan	= $_POST['hasil_pemeriksaan'];
	$denyut_jantung_janin	= $_POST['denyut_jantung_janin'];
	$berat_badan	= $_POST['berat_badan'];
	$tekanan_darah	= $_POST['tekanan_darah'];
	$keluhan	= $_POST['keluhan'];
	$biaya	= $_POST['biaya'];

	$query = "
		INSERT INTO data_kehamilan (
			id_pasien, 
			id_bidan, 
			id_obat, 
			haid_terakhir, 
			perkiraan_persalinan, 
			lingkaran_lengan_atas, 
			umur_kehamilan, 
			tinggi_badan, 
			hasil_pemeriksaan, 
			denyut_jantung_janin, 
			berat_badan, 
			tekanan_darah, 
			keluhan, 
			biaya, 
			tanggal 
		) VALUES (
			'$id_pasien',
			'$id_bidan',
			'$id_obat',
			'$haid_terakhir',
			'$perkiraan_persalinan',
			'$lingkaran_lengan_atas',
			'$umur_kehamilan',
			'$tinggi_badan',
			'$hasil_pemeriksaan',
			'$denyut_jantung_janin',
			'$berat_badan',
			'$tekanan_darah',
			'$keluhan',
			'$biaya',
			'" . Date("Y-m-d") . "'
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Tambah');</script>";
		echo "<script>window.location = '../kehamilan.php';</script>";
	} else {
		echo $query;
	}
}

if (isset($_POST['edit'])) {
	$id = $_POST['id'];

	$id_pasien	= $_POST['id_pasien'];
	$id_bidan	= $_POST['id_bidan'];
	$id_obat	= $_POST['id_obat'];
	$haid_terakhir	= $_POST['haid_terakhir'];
	$perkiraan_persalinan	= $_POST['perkiraan_persalinan'];
	$lingkaran_lengan_atas	= $_POST['lingkaran_lengan_atas'];
	$umur_kehamilan	= $_POST['umur_kehamilan'];
	$tinggi_badan	= $_POST['tinggi_badan'];
	$hasil_pemeriksaan	= $_POST['hasil_pemeriksaan'];
	$denyut_jantung_janin	= $_POST['denyut_jantung_janin'];
	$berat_badan	= $_POST['berat_badan'];
	$tekanan_darah	= $_POST['tekanan_darah'];
	$keluhan	= $_POST['keluhan'];
	$biaya	= $_POST['biaya'];

	$query = "
		UPDATE data_kehamilan SET 
			id_pasien='$id_pasien', 
			id_bidan='$id_bidan', 
			id_obat='$id_obat', 
			haid_terakhir='$haid_terakhir', 
			perkiraan_persalinan='$perkiraan_persalinan', 
			lingkaran_lengan_atas='$lingkaran_lengan_atas', 
			umur_kehamilan='$umur_kehamilan', 
			tinggi_badan='$tinggi_badan', 
			hasil_pemeriksaan='$hasil_pemeriksaan', 
			denyut_jantung_janin='$denyut_jantung_janin', 
			berat_badan='$berat_badan', 
			tekanan_darah='$tekanan_darah', 
			biaya='$biaya', 
			keluhan='$keluhan'
		WHERE 
			id=" . $_POST['id'];
	if (mysqli_query($koneksi, $query) === TRUE) {
		echo "<script>alert('Data Behasil Edit');</script>";
		echo "<script>window.location = '../kehamilan.php';</script>";
	} else {
		echo $query;
	}
}
if (isset($_POST['cetak_filter_kehamilan'])) {
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	header("location: ../laporan/filter_kehamilan.php?bulan=" . $bulan . "&tahun=" . $tahun);
}


if (isset($_POST['batal'])) {

	header('location: ../kehamilan.php');
}
