<?php
// memulai session
session_start();
if (isset($_SESSION['login'])) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <center><h2>Sukses Login</h2></center>
</body>
</html>

<?php
} else {
	header("location:login.php");
}
?>