<?php 
if (isset($_POST['hapus'])){
	$id	= $_POST['id'];
	$sql 	=mysqli_query($koneksi,"DELETE FROM users WHERE id='$id'");
	?>
	<meta http-equiv="refresh" content="0; url='user.php'">
	<?php
}

 ?>