<?php 
include 'conf/head.php';
include 'conf/menu.php';
$data_kb="Data kb";

 	//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'kb/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])){
	include 'kb/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['hapus'])){
	include 'kb/hapus.php';
	//UNTUK CETAK DATA
} else if (isset($_POST['detail'])){
	include 'kb/detail.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])){
include 'kb/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else{
include 'kb/tampil.php';
}
include 'conf/foot.php';
 ?>
