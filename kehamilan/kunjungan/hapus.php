<?php 
if (isset($_POST['hapus'])){
	$id	= $_POST['id'];
	$sql 	=mysqli_query($koneksi,"DELETE FROM data_kunjungan WHERE id_kunjungan='$id'");
	?>
	<meta http-equiv="refresh" content="0; url='kunjungan.php'">
	<?php
}

 ?>