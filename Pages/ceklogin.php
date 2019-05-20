<?php
session_start();
include "koneksi.php";
$email = $_POST['email'];
$pass = $_POST['pass'];

$q = "SELECT * FROM anggota WHERE email = '$email' " ;
$result = mysqli_query($mysqli,$q);
$data = mysqli_fetch_array($result);

if ($pass == $data['password']){
    $_SESSION['status'] = $data['status'];
    $_SESSION['email'] = $data['email'];
    echo 'Status : ';
    echo $_SESSION['status'];
    echo '   ,';
    echo 'Email : ';
    echo $_SESSION['email'];
    include "homepenjual.html";
}
//if ($pass == $data['password']) 
//	{
		//menyimpan tipe user dan username dalam session
//		$_SESSION['status'] = $data['status'];
//		$_SESSION['email'] = $data['email'];
//		include "homepenjual.html";
//	}
//jika password tidak sesuai
//else 
//	{
//        include "login.html";
//    }

?>
