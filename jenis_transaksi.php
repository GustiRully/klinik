<?php
include 'conf/head.php';
include 'conf/menu.php';

//UNTUK TAMBAH DATA
if (isset($_POST['tambah'])) {
	include 'jenis_transaksi/tambah.php';
	//UNTUK EDIT DATA
} else if (isset($_POST['edit'])) {
	include 'jenis_transaksi/edit.php';
	//UNTUK HAPUS DATA
} else if (isset($_POST['hapus'])) {
	include 'jenis_transaksi/hapus.php';
	//UNTUK CETAK DATA
} else if (isset($_GET['cetak'])) {
	include 'jenis_transaksi/cetak.php';
	//UNTUK MENAMPILKAN DATA
} else {
	include 'jenis_transaksi/tampil.php';
}
include 'conf/foot.php';
