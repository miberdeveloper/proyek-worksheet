<?php
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['simpan'])){
// $id = $_POST['id'];
$id_anggota = $_POST['id_anggota'];
$total = $_POST['total'];
$tgl_transaksi = $_POST['tgl_transaksi'];

//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO simpanan_wajib SET id='', id_anggota='$id_anggota', total='$total', tgl_transaksi='$tgl_transaksi'")
        or die ("data salah : ".mysqli_error($mysqli));
 
//  untuk mengetahui apakah data berhasil disimpan atau belum
if ($data) {
    include "berhasilregisterwajib.php"; // berfungsi untuk ngelink ke halaman tampil.php
} else {
echo "Gagal Input Data!!!";
echo "<br><a href='registeranggotawajib.php'>Kembali</a>"; // berfungsi untuk ngelink ke halaman tampil.php
}
}
?>
