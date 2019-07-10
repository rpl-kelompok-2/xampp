<?php 
session_start();
if (isset($_SESSION['login'])) { ?>


<?php require_once("../templates/head.php");?>
         
    <main class="main--container"> 
    <section class="page--header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page--title h4"> SISTEM INFORMASI NILAI DAN ABSENSI SEKOLAH </h3>
            </div>
        </div>
        <div class="col-lg-3"> </div>
    </div>
    <section class="main--content">
        <h2 class="page--title h5">BIODATA</h2>
        <section class="main-content">
            </p>
            <div class="profile--img"> 
                <a href="javascript:;"> <img src="../uploads/logo.png" alt="" class=""></a> 
            </div>
            <h2 class="page--title h6">NIS</h2>
            <h2 class="page--title h6">KELAS</h2>
            <h2 class="page--title h6">NAMA SISWA</h2>
            <h2 class="page--title h6">JENIS KELAMIN</h2>
            <h2 class="page--title h6">TANGGAL LAHIR</h2>
            <h2 class="page--title h6">AGAMA</h2>
            <h2 class="page--title h6">ALAMAT</h2>
            <h2 class="page--title h6">TAHUN MASUK</h2>

    


    <?php require_once ("../templates/footerjs.php");?>

            


<?php
} else {
	header("location:login.php");
}
?>