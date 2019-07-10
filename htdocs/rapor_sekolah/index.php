<?php
// memulai session
session_start();
if (isset($_SESSION['login'])) {
    header("location:siswa");
} else {
	header("location:login.php");
}
?>