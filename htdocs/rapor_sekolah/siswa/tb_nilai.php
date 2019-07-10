<html>
<head>
<?php 
session_start();
if (isset($_SESSION['login'])) { ?>


   <title>Penggunaan Tag Tabel</title>
</head>
<body>
<h1>NILAI SISWA KELAS 10</h1>
<table border="1">
        <style type="text/css">
        table {
            font-size: 17px;
        }
        thead {
            font-weight: bold;
            background-color: blue;
            color: white;
        }
        td {
            padding: 10px;
        }
        hr {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    
    </style>

    <tr>
        <th colspan="1">No</th>
        <th colspan="1">Mata Pelajaran</th>
        <th colspan="1">Nilai</th>
    </tr>
    <tr>
        <td>1</td>
        <td>MATEMATIKA</td>
        <th>85</th>
    </tr>
        <tr>
        <td>2</td>
        <td>IPS</td>
        <th>85</th>
    </tr>
        <tr>
        <td>3</td>
        <td>IPA</td>
        <th>85</th>
    </tr>
        <tr>
        <td>4</td>
        <td>SENI BUDAYA</td>
        <th>90</th>
    </tr>
    
</table>
</body>
</html>
    <?php require_once ("../templates/footerjs.php");?>

<?php
} else {
  header("location:../siswa/tb_nilai.php");
}
?>