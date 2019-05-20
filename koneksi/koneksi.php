<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "miberdev"; // nama database

$mysqli = new mysqli ($server, $username, $password, $database);
if (mysqli_connect_errno()) {
echo 'Koneksi gagal dilakukan dengan alasan : '.mysqli_connect_error();
exit();
mysqli_close($mysqli);
}
?>