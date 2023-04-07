<?php 
include 'conf/head.php';
include 'conf/menu.php';
$data_bidan="Data Bidan";

 	//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'bidan/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])){
	include 'bidan/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['detail'])){
	include 'bidan/detail.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['hapus'])){
	include 'bidan/hapus.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])){
include 'bidan/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else{
include 'bidan/tampil.php';
}
include 'conf/foot.php';
