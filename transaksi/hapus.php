<?php
if (isset($_POST['hapus'])) {
	$id	= $_POST['id'];
	$sql 	= mysqli_query($koneksi, "DELETE FROM transaksi WHERE id='$id'");
?>
	<meta http-equiv="refresh" content="0; url='transaksi.php'">
<?php
}

?>