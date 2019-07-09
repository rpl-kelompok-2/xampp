<?php
// memulai session
session_start();
include 'koneksi.php'; 
if (!isset($_SESSION['login'])) {
	$nis	= $_POST['nis'];
	$pswd	= $_POST['password'];

	$query	= mysqli_query($connect, "SELECT * FROM user WHERE NIS = '$nis' AND pwd_user = '$pswd'");
	if (mysqli_num_rows($query) !== 0 ) {
		$_SESSION['login'] = "siswa";
		header("location:siswa/index.php");
	} else {
		header("location:login.php");
	}
} else {
	header("location:index.php");
}
 ?>