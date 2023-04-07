<?php 
include 'koneksi.php';
$username	= $_POST['username'];
$password	= md5($_POST['password']);

$login		=mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password' AND is_activate=1");
$jumlah		=mysqli_num_rows($login);
if ($jumlah	== 1){
	$_SESSION['level'] = $login->fetch_assoc()['level'];
	header('location: ../beranda.php?p=berhasil');
}else{
	header('location: ../login.php?p=error');
	}
?>