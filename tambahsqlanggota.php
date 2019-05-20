<?php
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['simpan'])){
$nomor_anggota = $_POST['nomor_anggota'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$foto = $_POST['foto'];
$jenis_admin = $_POST['jenis_admin'];
$tgl_daftar = $_POST['tgl_daftar'];
$status = $_POST['status'];

//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO anggota SET id='', nomor_anggota='$nomor_anggota', username='$username', password='$password', nama='$nama',
 alamat='$alamat', jenis_kelamin='$jenis_kelamin', email='$email', telepon='$telepon', foto='$foto', jenis_admin='$jenis_admin', tgl_daftar='$tgl_daftar', status='$status'")
        or die ("data salah : ".mysqli_error($mysqli));
 
//  untuk mengetahui apakah data berhasil disimpan atau belum
if ($data) {
    include "berhasiltambah.php"; // berfungsi untuk ngelink ke halaman tampil.php
} else {
echo "Gagal Input Data!!!";
echo "<br><a href='pendaftarananggota.php'>Kembali</a>"; // berfungsi untuk ngelink ke halaman tampil.php
}
}
?>
