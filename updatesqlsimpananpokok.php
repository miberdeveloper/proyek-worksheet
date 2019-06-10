<?php
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $id_anggota = $_POST['id_anggota'];
    $total = $_POST['total'];
    $tgl_transaksi = $_POST['tgl_transaksi'];


 //menambahkan query sql update data untuk memasukkan data ke database
$data = mysqli_query($mysqli, "UPDATE simpanan_pokok SET id='$id', id_anggota='$id_anggota', total='$total', tgl_transaksi='$tgl_transaksi'
     WHERE id='$id'") 
or die ("data salah : ".mysqli_error($mysqli));

//  untuk mengetahui apakah data berhasil diedit atau belum
if ($data) {
    include "berhasilupdate.php"; //  berfungsi untuk ngelink ke halaman berhasilupdate.php
} else {
echo "Gagal Input Data!!! <br>";
echo "<a href='simpananwajib.php'>Kembali</a>";
}
}
?>
