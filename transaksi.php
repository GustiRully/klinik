<?php
include 'conf/head.php';
include 'conf/menu.php';

//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'transaksi/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])) {
	include 'transaksi/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['hapus'])) {
	include 'transaksi/hapus.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])) {
	include 'transaksi/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else {
	include 'transaksi/tampil.php';
}
include 'conf/foot.php';
