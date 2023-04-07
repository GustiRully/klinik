<?php 
include 'conf/head.php';
include 'conf/menu.php';
$data_bayi="Data Bayi";

 	//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'bayi/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])){
	include 'bayi/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['detail'])){
	include 'bayi/detail.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['hapus'])){
	include 'bayi/hapus.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])){
include 'bayi/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else{
include 'bayi/tampil.php';
}
include 'conf/foot.php';
