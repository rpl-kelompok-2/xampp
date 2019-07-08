<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname	= "rapor_sekolah";

$connect = mysqli_connect($server,$user,$pass);
$select_dbname = mysqli_select_db($connect,$dbname);

if ($connect) {
	echo "Berhasil terkoneksi <br />";
	if ($select_dbname) {
		echo "Database ditemukan";
	} else {
		echo "Database tidak ditemukan";
	}
} else {
	echo "gagal terkoneksi<br />";
}
?>
