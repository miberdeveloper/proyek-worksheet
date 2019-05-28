<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['update'])){
    $id		    = $_POST['id'];
    $id_admin		    = $_POST['id_admin'];
	$id_bj		    = $_POST['id_bahan_jadi'];
    $stok 			= $_POST['stok'];
    $harga		    = $_POST['harga'];
    $tgl_masuk 		= $_POST['tgl_masuk'];
 //menambahkan query sql update data untuk memasukkan data ke database
$data = mysqli_query($mysqli, "UPDATE transaksi_masuk_bahan_jadi SET id='$id', id_admin='$id_admin', id_bahan_jadi='$id_bj', stok='$stok', harga='$harga',
tgl_masuk='$tgl_masuk' WHERE id='$id'") or die ("data salah : ".mysqli_error($mysqli));

//  untuk mengetahui apakah data berhasil diedit atau belum
if ($data) {
    include "updateberhasilbtpjd.php"; //  berfungsi untuk ngelink ke halaman berhasilupdate.php
} else {
echo "Gagal Input Data!!! <br>";
echo "<a href='btpjd.php'>Kembali</a>";
}
}
?>
