<?php 
session_start();
if (isset($_SESSION['login'])) { ?>

<?php require_once("../templates/head.php");?>
         
    <main class="main--container"> 
    <section class="page--header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page--title h4"> SISTEM INFORMASI NILAI DAN ABSENSI SEKOLAH </h3>
            </div>
        </div>
        
    </div>
    <section class="main--content">
        <!-- Untuk Biodata -->
        <h2 class="page--title h5">BIODATA</h2>
        <section class="main-content">
            </p>
            <div class="profile--img"> 
                <a href="javascript:;"> <img src="../uploads/logo.png" alt="" class=""></a> 
            </div>
            <div class="row">
                <div class="col-md-2"><h2 class="page--title h6">NIS</h2></div>
                <div class="col-md-1"><h2 class="page--title h6">:</h2></div>
                <div class="col-md-2"><h2 class="page--title h6">12345</h2></div>
            </div>
            <div class="row">
                <div class="col-md-2"><h2 class="page--title h6">KELAS</h2></div>
                <div class="col-md-1"><h2 class="page--title h6">:</h2></div>
                <div class="col-md-2"><h2 class="page--title h6">Fisika</h2></div>
            </div>
            <div class="row">
                <div class="col-md-2"><h2 class="page--title h6">NAMA SISWA</h2></div>
                <div class="col-md-1"><h2 class="page--title h6">:</h2></div>
                <div class="col-md-2"><h2 class="page--title h6">Eko Pudjianto</h2></div>
            </div>
            <div class="row">
                <div class="col-md-2"><h2 class="page--title h6">JENIS KELAMIN</h2></div>
                <div class="col-md-1"><h2 class="page--title h6">:</h2></div>
                <div class="col-md-2"><h2 class="page--title h6">Laki-laki</h2></div>
            </div>
            <div class="row">
                <div class="col-md-2"><h2 class="page--title h6">TANGGAL LAHIR</h2></div>
                <div class="col-md-1"><h2 class="page--title h6">:</h2></div>
                <div class="col-md-2"><h2 class="page--title h6">01-01-2015</h2></div>
            </div>
            <div class="row">
                <div class="col-md-2"><h2 class="page--title h6">AGAMA</h2></div>
                <div class="col-md-1"><h2 class="page--title h6">:</h2></div>
                <div class="col-md-2"><h2 class="page--title h6">Islam</h2></div>
            </div>
            <div class="row">
                <div class="col-md-2"><h2 class="page--title h6">ALAMAT</h2></div>
                <div class="col-md-1"><h2 class="page--title h6">:</h2></div>
                <div class="col-md-2"><h2 class="page--title h6">Babatan</h2></div>
            </div>
            <div class="row">
                <div class="col-md-2"><h2 class="page--title h6">TAHUN MASUK</h2></div>
                <div class="col-md-1"><h2 class="page--title h6">:</h2></div>
                <div class="col-md-2"><h2 class="page--title h6">2017</h2></div>
            </div>
        </section>
        <!-- Untuk Biodata -->
    </section>
            



    <?php require_once ("../templates/footerjs.php");?>

<?php
} else {
	header("location:../login.php");
}
?>