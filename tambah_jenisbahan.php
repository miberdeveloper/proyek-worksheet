<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	//membuat variabel $nis dan datanya dari inputan NIS
	// $namalengkap	= $_POST['NamaLengkap'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$id		    = $_POST['id'];
	$jenis		    = $_POST['jenis'];
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$query = "INSERT INTO jenis_bahan VALUES ( '','$jenis')";
	$input = mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
	
	//jika query input sukses
	if($input){
		

		echo "<meta http-equiv=\"refresh\" content=\"0;URL=jenisbahan.php\">";
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