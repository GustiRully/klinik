<?php 
include '../conf/koneksi.php';

if (isset($_POST['tambah'])) {
	$id_organisasi = $_POST['id_organisasi'];
	$nama_kunjungan	= $_POST['nama_kunjungan'];
	$waktu	= $_POST['waktu'];
	$tempat_pelaksanaan	= $_POST['tempat_pelaksanaan'];
	$no_telpon	= $_POST['no_telpon'];
	$keterangan	= $_POST['keterangan'];
	
	$sql = mysqli_query($koneksi,"INSERT INTO data_kunjungan SET id_organisasi='$id_organisasi', nama_kunjungan='$nama_kunjungan', waktu='$waktu',tempat_pelaksanaan='$tempat_pelaksanaan',no_telpon='$no_telpon', keterangan='$keterangan'");
	header('location: ../kunjungan.php');
}

	
	
if (isset($_POST['edit'])) {
	$id = $_POST['id'];

	$id_organisasi = $_POST['id_organisasi'];
	$nama_kunjungan	= $_POST['nama_kunjungan'];
	$waktu	= $_POST['waktu'];
	$tempat_pelaksanaan	= $_POST['tempat_pelaksanaan'];
	$no_telpon	= $_POST['no_telpon'];
	$keterangan	= $_POST['keterangan'];
	
	

	
$sql	=mysqli_query($koneksi,"UPDATE data_kunjungan SET id_organisasi='$id_organisasi',nama_kunjungan='$nama_kunjungan', waktu='$waktu',tempat_pelaksanaan='$tempat_pelaksanaan', no_telpon='$no_telpon', keterangan='$keterangan' WHERE id_kunjungan='$id'");
	header('location: ../kunjungan.php');
}

if (isset($_POST['batal'])){
	
}
	header('location: ../kunjungan.php');

 ?>