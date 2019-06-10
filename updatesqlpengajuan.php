<?php
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $id_anggota = $_POST['id_anggota'];
    $total_pinjam = $_POST['total_pinjam'];
    $tgl_pinjam = $_POST['tgl_pinjam'];


 //menambahkan query sql update data untuk memasukkan data ke database
$data = mysqli_query($mysqli, "UPDATE transaksi_pinjam SET id='$id', id_anggota='$id_anggota', total_pinjam='$total_pinjam', tgl_pinjam='$tgl_pinjam'
     WHERE id='$id'") 
or die ("data salah : ".mysqli_error($mysqli));

//  untuk mengetahui apakah data berhasil diedit atau belum
if ($data) {
    include "berhasilupdate.php"; //  berfungsi untuk ngelink ke halaman berhasilupdate.php
} else {
echo "Gagal Input Data!!! <br>";
echo "<a href='pengajuanpinjam.php'>Kembali</a>";
}
}
?>
