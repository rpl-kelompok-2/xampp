<?php
// memulai session
session_start();
include 'koneksi.php'; 
if (isset($_POST['login'])) {
	$nis	= $_POST['nis'];
	$pswd	= $_POST['password'];

	$query	= mysqli_query($connect, "SELECT * FROM user WHERE nis = '$nis' AND pswd = '$pswd'");
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
	header("location:index.php");
}
 ?>