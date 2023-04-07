<?php 
include 'conf/head.php';
include 'conf/menu.php';
$data_bersalin="Data bersalin";

 	//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'bersalin/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])){
	include 'bersalin/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['hapus'])){
	include 'bersalin/hapus.php';
	//UNTUK CETAK DATA
}  else if (isset($_POST['detail'])){
	include 'bersalin/detail.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])){
include 'bersalin/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else{
include 'bersalin/tampil.php';
}
include 'conf/foot.php';
 ?>
