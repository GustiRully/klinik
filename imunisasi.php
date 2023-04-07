<?php 
include 'conf/head.php';
include 'conf/menu.php';
$data_imunisasi="Data Imunisasi";

 	//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'imunisasi/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])){
	include 'imunisasi/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['detail'])){
	include 'imunisasi/detail.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['hapus'])){
	include 'imunisasi/hapus.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])){
include 'imunisasi/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else{
include 'imunisasi/tampil.php';
}
include 'conf/foot.php';
