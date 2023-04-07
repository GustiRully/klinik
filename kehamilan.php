<?php 
include 'conf/head.php';
include 'conf/menu.php';
$data_kehamilan="Data kehamilan";

 	//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'kehamilan/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])){
	include 'kehamilan/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['detail'])){
	include 'kehamilan/detail.php';
	//UNTUK HAPUS DATA
}else if (isset($_POST['hapus'])){
	include 'kehamilan/hapus.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])){
include 'kehamilan/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else{
include 'kehamilan/tampil.php';
}
include 'conf/foot.php';
