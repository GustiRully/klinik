<?php 
include 'koneksi.php';
$username	= $_POST['username'];
$password	= md5($_POST['password']);
$nama		= $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat		= $_POST['alamat'];
$no_telpon	= $_POST['no_telpon'];
$tmt		= $_POST['tmt'];
$email		= $_POST['email'];
$level 		= 'Petugas';
$is_activate 		= 0;


$register	="INSERT INTO users (username, password, nama, tanggal_lahir, alamat, no_telpon, tmt, email, is_activate, level) VALUES ('$username', '$password', '$nama', '$tanggal_lahir', '$alamat', '$no_telpon', '$tmt', '$email', '$is_activate', '$level')";
if (mysqli_query($koneksi,$register)) {
	echo "<script>alert('Data berhasil diupdate @ $hari_ini.Terima Kasih')</script>";
	header('location: ../login.php?p=berhasil');
} else {
	echo "Pendaftaran Gagal:" . mysqli_error($koneksi);
}
?>