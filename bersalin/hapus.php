<?php 
if (isset($_POST['hapus'])){
	$id	= $_POST['id'];
	$sql 	=mysqli_query($koneksi,"DELETE FROM data_bersalin WHERE id='$id'");
	echo "<script>alert('Data Behasil Edit');</script>";
	echo "<script>window.location = 'bersalin.php';</script>";
	?>
	<meta http-equiv="refresh" content="0; url='bersalin.php'">
	<?php
}

 ?>