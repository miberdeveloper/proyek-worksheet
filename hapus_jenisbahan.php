<?php 
include "koneksi.php";// memanggil file koneksi.php untuk menghubungkan ke database
 
 //peritah untuk menghapus data sesuai id yang dipilih
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        echo "<b>Data yang dihapus tidak ada</b>";
    }
    else {
        $delete = mysqli_query($mysqli,"DELETE FROM jenis_bahan WHERE id='$_GET[id]'") or die ("Mysql Error : ".mysqli_error($mysqli)); // query sql hapus data
        if($delete){
            //menampilkan halaman berhasilupdate.php
            include "jenisbahan.php";
        }
    }
}
?>
