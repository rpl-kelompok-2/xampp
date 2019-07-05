<?php
// memulai session
session_start();
include 'koneksi.php'; 
if (isset($_POST['login'])) {
	$email_user	= $_POST['email'];
	$pwd_user	= $_POST['pwd'];

	$query	= mysqli_query("SELECT * FROM user WHERE email_user = '$email' AND pwd_user = '$pwd'");
	if (mysqli_num_rows($query) !==0) {
		
		$get	= mysqli_fetch_array($query);
		$level	= $get['level_user'];
		if ($level=="admin") {
			$_SESSION['login'] = "admin";
			header("location:halaman/admin.php");
		} elseif ($level=='user_b') {
			$_SESSION['login'] = "siswa";
			header("location:halaman/siswa.php");
		}
	} else {
		echo "Login gagal";
	}
} else {
	header("location:login.php");
}
 ?>