<?php
session_start();
if(isset($_GET["logout"])){
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Sistem Informari Rapor Online</title>
</head>
<body>
    <div class="center">
        <center>
        <h2>Login Wali Murid</h2>
        <hr />
        <form method="post" action="proses.php">
            <table style="padding-top:25px">
            <tr>
                <td> Username </td>
                <td> </td>
                <td><input type="text" class="textForm" name="nis" /></td>
            </tr>
            <tr>
                <td> Password </td>
                <td> </td>
                <td><input type="password" class="textForm" name="password" /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="button" value="Hapus" class="tombolForm" />
                    <input type="submit" value="Login" name="login" class="tombolForm" />
                </td>
            </tr>
            </table>
        </form>
        </center>
    </div>
</body>
</html>