<?php
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['simpan'])){
// $id = $_POST['id'];
$id_angsuran = $_POST['id_angsuran'];
$total_angsuran = $_POST['total_angsuran'];
$tgl_angsuran = $_POST['tgl_angsuran'];


//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO transaksi_angsuran SET id='', 
    id_angsuran='$id_angsuran', total_angsuran='$total_angsuran', tgl_angsuran='$tgl_angsuran'")
        or die ("data salah : ".mysqli_error($mysqli));
 
//  untuk mengetahui apakah data berhasil disimpan atau belum
if ($data) {
    include "berhasiltambah.php"; // berfungsi untuk ngelink ke halaman tampil.php
} else {
echo "Gagal Input Data!!!";
echo "<br><a href='pengajuanpinjam.php'>Kembali</a>"; // berfungsi untuk ngelink ke halaman tampil.php
}
}
?>
