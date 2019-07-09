<?php 
session_start();
if (isset($_SESSION['login'])) { ?>


<?php require_once("../templates/head.php");?>
    
    <body class=""> 
        <div class="wrapper">
            <header class="navbar navbar-fixed"> 
		<div class="navbar--header"> 
			<a href=".." class="logo">
                <span style="font-size: 22px; font-weight: bold;"> S.I.N.A.S </span></a>
			<a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i class="fa fa-bars"></i> </a>
		</div>
		<a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i class="fa fa-bars"></i> </a>
		<div class="navbar--search"> 
			<form action="http://themelooks.net/demo/dadmin/html/search-results.html"> 
			</form>
		</div>
		<div class="navbar--nav ml-auto"> 
			<ul class="nav"> </ul>
		</div>
	</header>
<aside class="sidebar" data-trigger="scrollbar">
		 
		<div class="sidebar--profile"> 
			<div class="profile--img"> <a href="javascript:;"> <img src="../uploads/logo.png" alt="" class=""> </a> </div>
			 <div class="profile--name"> <a href="javascript:;" class="btn-link"> SISWA </a> </div>
			        <div class="profile--nav">
                      <div class="pull-right">
                           <a href="#" class="btn btn-default btn-flat">Sign out</a>
                      </div>
			    </div>
		    </div>
		<div class="sidebar--nav"> 
			<ul> 
				<li> 
					<ul> 
						<li class=""> <a href="../dashboard"> <i class="fa fa-home"></i> <span>Dashboard</span> </a> </li>
							<li class=""> <a href="#"> <i class="fa fa-files-o"></i> <span>NILAI RAPOR</span> </a> 
						<ul> 
					<li class="active" ><a href="../tabel nilai/">RAPOR KELAS 10</a></li>
				<li> <a href="../rekapLaporan/">RAPOR KELAS 11</a></li>
			<li> <a href="../rekapLaporan/" target="blank">RAPOR KELAS 12</a></li>
		</ul> 
	</li>
<li class=""> <a href="#"> <i class="fa fa-files-o"></i> <span>ABSENSI</span> </a> 
    <ul>
      <li> <a href="../kamus_barang"> SAKIT </a></li>
        <li> <a href="../kamus_barang"> IZIN </a></li>
          <li> <a href="../kamus_barang"> TANPA KETERANGAN </a></li>
            </ul> 
                </li>
					<li class=""> <a href="#"> <i class="fa fa-book"></i> <span>DATA MASTER</span> </a> 
						<ul>
						  <li> <a href="../kamus_barang">Data Siswa</a></li>
							 </ul> 
						  </li>
						<li class=""> <a href="../pengaturan"> <i class="fa fa-cog"></i> <span>Pengaturan</span> </a></li>
					</ul> 
				</li>
				
			</ul>
		</div>
</aside>            
    <main class="main--container"> 
<section class="page--header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page--title h5"> SISTEM INFORMASI SISWA </h2>
            </div>
        </div>
    <div class="col-lg-6"> </div>
</div>
    <section class="main--content">
            <div class="col-lg-3"  style="margin-bottom: 20px;"> 
                <div class="weather--panel text-white bg-dark">
                    <div class="weather--title">
                        <span> BIODATA </span>
                    </div>
            <p><button href="#add" class="btn btn-sm btn-warning" data-toggle="modal"><i class="fa fa-eye"></i> Detail</button></p>
                </div>
            </div>
        </div>
<div id="add" class="modal fade" aria-hidden="true" style="display: none;"> 
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title"> Biodata </h5> 
                <button type="button" class="close" data-dismiss="modal">X</button>
                <table class="table" width="100%">
                            </div>
            <div class="modal-body">
          </div>
        </div>
    </div>
</div> 
  <tr>
    <td colspan="4" class="bg-1"><strong>BIODATA SISWA </strong></td>
      </tr>
        <tr>
          <th align="right" style="width:220px;">Nama <span style="padding:0 0 0 2px;color:#f00">*</span></th>
            <td style="width:300px;"><input type="text" name="nama" id="nama" value="IDRIS" required /></td>
             </tr>
              <tr>
               <th align="right">Kelamin <span style="padding:0 0 0 2px;color:#f00">*</span></th>
                <td>
                 <select name="kelamin" id="kelamin" required>
                            <option value="">- Pilih -</option>
                            <option value="L" selected>Laki-laki</option>
                            <option value="P" >Perempuan</option>
                        </select>
                    </td>
                        </tr>
                            <tr>                         
                                <th align="right">Agama <span style="padding:0 0 0 2px;color:#f00">*</span></th>
                                <td><select name="agama" id="agama" required>
                            <option value="">- Pilih -</option>
                                    <option value="1" selected>Islam</option>
                                    <option value="2" >Kristen Protestan</option>
                                    <option value="3" >Katholik</option>
                                    <option value="4" >Hindu</option>
                                    <option value="5" >Budha</option>
                                    <option value="6" >Kong Hu Cu</option>
                                    <option value="7" >Lainnya</option>
                                </select>
                            </td>
                  </tr>
                <tr>
            <th align="right">Alamat <input type="checkbox" name="luar_kota" id="luar_kota" onClick="luarkota(this.checked);" style="vertical-align:-3px;" /th>
        <td>
    <input type="text" name="alamat" id="alamat" value="KRUKAH TENGAH 36" required  readonly  /><br/>
    <p align="center">
        <!--<input type="hidden" name="npsn" value="20532539"/>                                 
        <input type="hidden" name="act" value="ubah"/>
        <input type="hidden" name="id" value="145891"/>-->
        <input type="button" name="submit" id="submit" class="button" value="Simpan" onclick="return submitform(this.form)"/>&nbsp;
        <input type="button" name="batal" class="button" value="Batal" onClick="window.location.replace('guru.php')"/>
    </p>

</td> 

        <?php require_once ("../templates/footerjs.php");?>

            <script type="text/javascript">
    </script>
        
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });    

            
            function kosong(){
                swal('Barang Tidak Ditemukan','Silahkan Pindahkan Barang terlebih dahulu di Menu Aset Pemkot','error');
            }
            function zonk(){
                swal('Maaf !!!','Fitur Dalam Proses Pengembangan','error');
            }
        </script>
    </body>
</html>

<?php
} else {
	header("location:login.php");
}
?>