<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	//membuat variabel $nis dan datanya dari inputan NIS
	// $namalengkap	= $_POST['NamaLengkap'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$nama		    = $_POST['nama'];
	$harga		    = $_POST['harga'];
	$stok 			= $_POST['stok'];
    $jenis_bahan 	= $_POST['jenis_bahan'];
    $tgl_masuk 		= $_POST['tgl_masuk'];
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$query = "INSERT INTO bahan_baku VALUES ( '','$nama', '$harga', '$stok', '$jenis_bahan', '$tgl_masuk')";
	$input = mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
	
	//jika query input sukses
	if($input){
		

		echo "<meta http-equiv=\"refresh\" content=\"0;URL=order.php\">";
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