<?php 
if (isset($_POST['hapus'])){
	$id	= $_POST['id'];
	$sql 	=mysqli_query($koneksi,"DELETE FROM data_obat WHERE id='$id'");
	?>
	<meta http-equiv="refresh" content="0; url='obat.php'">
	<?php
}

 ?>