<?php
include 'conf/head.php';
include 'conf/menu.php';


if (isset($_GET['cetak'])) {
	include 'keuangan/cetak.php';
	//UNTUK MENAMPILKAN DATA
}
include 'conf/foot.php';
