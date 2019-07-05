<?php 
session_start();
$login	= $_SESSION['login'];
echo "<h1> Selamat datang $login</h1>";
 ?>