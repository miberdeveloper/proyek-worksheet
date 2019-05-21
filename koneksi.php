<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "proyek1"; // nama database

$mysqli = new mysqli ($server, $username, $password, $database);
if (mysqli_connect_errno()) {
echo 'Koneksi gagal dilakukan dengan alasan : '.mysqli_connect_error();
exit();
mysqli_close($mysqli);
}

function query($query) {
    global $mysqli;
    $rows = [];
    $result=mysqli_query($mysqli, $query);
    while($hasil = mysqli_fetch_assoc($result)) {
        $rows[] = $hasil;
    }

    return $rows;
}

?>