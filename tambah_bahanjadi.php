<?php
if(isset($_POST['tambah'])){
	
	include('koneksi.php');
	
	$nama		    = $_POST['nama'];
	$harga		    = $_POST['harga'];
	$stok 			= $_POST['stok'];
    $jenis_bahan 	= $_POST['jenis_bahan'];
    $keterangan     = $_POST['keterangan'];
    $tgl_masuk 		= $_POST['tgl_masuk'];
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$query = "INSERT INTO bahan_jadi VALUES ( '','$nama', '$harga', '$stok', '$jenis_bahan', '$keterangan', '$tgl_masuk')";
	$input = mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
	
	//jika query input sukses
	if($input){
		

		echo "<meta http-equiv=\"refresh\" content=\"0;URL=order1.php\">";
		 // echo ("<SCRIPT LANGUAGE='JavaScript'>
   //  window.alert('Succesfully Registered')
   //  window.location.href='c_crud_jadwal.php';
   //  </SCRIPT>");


		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah_stokalat.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>