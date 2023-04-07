<?php 
include 'conf/head.php';
include 'conf/menu.php';
$data_jenis_imunisasi="Data jenis_imunisasi";

 	//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'jenis_imunisasi/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])){
	include 'jenis_imunisasi/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['hapus'])){
	include 'jenis_imunisasi/hapus.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])){
include 'jenis_imunisasi/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else{
include 'jenis_imunisasi/tampil.php';
}
include 'conf/foot.php';
 ?>
