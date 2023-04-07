<?php 
include '../conf/koneksi.php';

if (isset($_POST['tambah'])) {
	$nama_kegiatan	= $_POST['nama_kegiatan'];
	$alamat_kegiatan	= $_POST['alamat_kegiatan'];
	$pengurus	= $_POST['pengurus'];
	$no_telpon	= $_POST['no_telpon'];
	
	$sql = mysqli_query($koneksi,"INSERT INTO data_kegiatan SET nama_kegiatan='$nama_kegiatan', alamat_kegiatan='$alamat_kegiatan', pengurus='$pengurus', no_telpon='$no_telpon'");
	header('location: ../kegiatan.php');
}
	
if (isset($_POST['edit'])) {
	$id	= $_POST['id'];

	$nama_kegiatan	 = $_POST['nama_kegiatan'];
	$alamat_kegiatan = $_POST['alamat_kegiatan'];
	$pengurus	 = $_POST['pengurus'];
	$no_telpon	 = $_POST['no_telpon'];
	

	$sql	=mysqli_query($koneksi,"UPDATE data_kegiatan SET nama_kegiatan='$nama_kegiatan',alamat_kegiatan='$alamat_kegiatan', pengurus='$pengurus', no_telpon='$no_telpon' WHERE id_kegiatan='$id'");
	header('location: ../kegiatan.php');
}



if (isset($_POST['batal'])){
	
	header('location: ../kegiatan.php');
}

 ?>