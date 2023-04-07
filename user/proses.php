<?php
include '../conf/koneksi.php';
require('../assets/phpmailer/src/PHPMailer.php');
require('../assets/phpmailer/src/SMTP.php');
require('../assets/phpmailer/src/Exception.php');
require('../assets/phpmailer/src/OAuthTokenProvider.php');
require('../assets/phpmailer/src/OAuth.php');
require('../assets/phpmailer/src/POP3.php');

use PHPMailer\PHPMailer\PHPMailer;


if (isset($_POST['tambah'])) {
	$nama	= $_POST['nama'];
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$level	= $_POST['level'];

	$query = "
		INSERT INTO users (
			nama, 
			username, 
			password, 
			level 
		) VALUES (
			'$nama',
			'$username',
			'$password',
			'$level' 
		)";
	if (mysqli_query($koneksi, $query) === TRUE) {
		header('location: ../user.php');
	} else {
		echo $query;
	}
}

if (isset($_POST['edit'])) {
	$nama	= $_POST['nama'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$alamat	= $_POST['alamat'];
	$no_telpon	= $_POST['no_telpon'];
	$tmt	= $_POST['tmt'];
	$email	= $_POST['email'];
	$username	= $_POST['username'];
	$level	= $_POST['level'];
	$is_activate	= $_POST['is_activate'];

	$query = "UPDATE users SET nama='$nama', tanggal_lahir='$tanggal_lahir', alamat='$alamat', no_telpon='$no_telpon', tmt='$tmt', email='$email', username= '$username', level= '$level', is_activate= '$is_activate' WHERE id= " . $_POST['id'];
	if ($is_activate == 1) {
		if (mysqli_query($koneksi, $query) === TRUE) {
			$email_pengirim = 'gustyrully30@gmail.com';
			$nama_pengirim = 'gusti';
			$subjek = 'Klinik Bidan Leni Triyana';
			$pesan .=  'Kami dari KLINIK BIDAN LENI TRIYANA ';
			$pesan .=  '<br>';
			$pesan .=  '<br>';
			$pesan .=  'Terimakasih telah menggunakan layanan kami, <br>';
			$pesan .=  'Kami ingin menginfokan bahwa akun anda berhasil diverivikasi oleh admin <br>';
			$pesan .=  '<br>';
			$pesan .=  'Jika anda memiliki pertanyaan yang perlu disampaikan, silahkan kunjungi klinik kami';
			$pesan .=  '<br>';
			$pesan .=  '<br>';
			$pesan .=  'Terima Kasih';

			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Username = $email_pengirim;
			$mail->Password = 'becjmwxbeuxotvwl';
			$mail->Port = 465;
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'ssl';
			$mail->SMTPDebug = 2;

			$mail->isHTML(true);
			$mail->Subject = $subjek;
			$mail->Body = $pesan;
			$mail->setFrom($email_pengirim, $nama_pengirim);
			$mail->addAddress($_POST['email']);
			$mail->send();
			header('location: ../user.php');
		} else {
			echo $query;
		}
	} else {
		if (mysqli_query($koneksi, $query) === TRUE) {
			header('location: ../user.php');
		} else {
			echo $query;
		}
	}
}





if (isset($_POST['batal'])) {

	header('location: ../user.php');
}
