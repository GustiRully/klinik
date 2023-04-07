<?php 
include 'conf/head.php';
include 'conf/menu.php';
$data_obat="Data Obat";

 	//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'obat/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])){
	include 'obat/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['hapus'])){
	include 'obat/hapus.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])){
include 'obat/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else{
include 'obat/tampil.php';
}
include 'conf/foot.php';
 ?>
