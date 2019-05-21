<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $jenis_bahan = $_POST['jenis_bahan'];
    $keterangan = $_POST['keterangan'];
    $tgl_masuk = $_POST['tgl_masuk'];

 //menambahkan query sql update data untuk memasukkan data ke database
$data = mysqli_query($mysqli, "UPDATE bahan_jadi SET id='$id', nama='$nama', harga='$harga', stok='$stok', jenis_bahan='$jenis_bahan', keterangan='$keterangan',
tgl_masuk='$tgl_masuk' WHERE id='$id'") or die ("data salah : ".mysqli_error($mysqli));

//  untuk mengetahui apakah data berhasil diedit atau belum
if ($data) {
    include "updateberhasil1.php"; //  berfungsi untuk ngelink ke halaman berhasilupdate.php
} else {
echo "Gagal Input Data!!! <br>";
echo "<a href='order1.php'>Kembali</a>";
}
}
?>
