<?php
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['simpan'])){
// $id = $_POST['id'];
$id_anggota = $_POST['id_anggota'];
$total_pinjam = $_POST['total_pinjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];


//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO transaksi_pinjam SET id='', 
    id_anggota='$id_anggota', total_pinjam='$total_pinjam', tgl_pinjam='$tgl_pinjam'")
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
