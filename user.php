<?php 
include 'conf/head.php';
include 'conf/menu.php';
$data_user="Data User";

 	//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'user/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])){
	include 'user/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['hapus'])){
	include 'user/hapus.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])){
include 'user/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else{
include 'user/tampil.php';
}
include 'conf/foot.php';
 ?>
