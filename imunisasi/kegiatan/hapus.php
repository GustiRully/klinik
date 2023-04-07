<?php 
if (isset($_POST['hapus'])){
	$id_kegiatan	= $_POST['id'];
	$sql 	=mysqli_query($koneksi,"DELETE FROM data_kegiatan WHERE id_kegiatan='$id_kegiatan'");
	?>
	<meta http-equiv="refresh" content="0; url='kegiatan.php'">
	<?php
}

 ?>