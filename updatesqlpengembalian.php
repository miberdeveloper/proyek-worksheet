<?php
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $id_angsuran = $_POST['id_angsuran'];
    $total_angsuran = $_POST['total_angsuran'];
    $tgl_angsuran = $_POST['tgl_angsuran'];


 //menambahkan query sql update data untuk memasukkan data ke database
$data = mysqli_query($mysqli, "UPDATE transaksi_angsuran SET id='$id', id_angsuran='$id_angsuran', total_angsuran='$total_angsuran', tgl_angsuran='$tgl_angsuran'
     WHERE id='$id'") 
or die ("data salah : ".mysqli_error($mysqli));

//  untuk mengetahui apakah data berhasil diedit atau belum
if ($data) {
    include "berhasilupdate.php"; //  berfungsi untuk ngelink ke halaman berhasilupdate.php
} else {
echo "Gagal Input Data!!! <br>";
echo "<a href='transaksipengembalian.php'>Kembali</a>";
}
}
?>
