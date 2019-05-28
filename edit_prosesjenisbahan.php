<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $jenis = $_POST['jenis'];

 //menambahkan query sql update data untuk memasukkan data ke database
$data = mysqli_query($mysqli, "UPDATE jenis_bahan SET id='$id', jenis='$jenis' WHERE id='$id'") or die ("data salah : ".mysqli_error($mysqli));

//  untuk mengetahui apakah data berhasil diedit atau belum
if ($data) {
    include "updateberhasil2.php"; //  berfungsi untuk ngelink ke halaman berhasilupdate.php
} else {
echo "Gagal Input Data!!! <br>";
echo "<a href='jenisbahan.php'>Kembali</a>";
}
}
?>
