<?php 
include 'conf/head.php';
include 'conf/menu.php';
$data_pasien="Data Pasien";

 	//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'pasien/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])){
	include 'pasien/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['detail'])){
	include 'pasien/detail.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['hapus'])){
	include 'pasien/hapus.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])){
include 'pasien/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else{
include 'pasien/tampil.php';
}
include 'conf/foot.php';
