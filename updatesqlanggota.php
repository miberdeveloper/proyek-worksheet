<?php
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nomor_anggota = $_POST['nomor_anggota'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $foto = $_POST['foto'];
    $jenis_anggota = $_POST['jenis_anggota'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $status = $_POST['status'];

 //menambahkan query sql update data untuk memasukkan data ke database
$data = mysqli_query($mysqli, "UPDATE anggota SET id='$id', nomor_anggota='$nomor_anggota', username='$username', password='$password', nama='$nama',
alamat='$alamat', jenis_kelamin='$jenis_kelamin', email='$email', telepon='$telepon', foto='$foto', jenis_anggota='$jenis_anggota', tgl_daftar='$tgl_daftar', status='$status' WHERE id='$id'") or die ("data salah : ".mysqli_error($mysqli));

//  untuk mengetahui apakah data berhasil diedit atau belum
if ($data) {
    include "berhasilupdate.php"; //  berfungsi untuk ngelink ke halaman berhasilupdate.php
} else {
echo "Gagal Input Data!!! <br>";
echo "<a href='pendaftarananggota.php'>Kembali</a>";
}
}
?>
