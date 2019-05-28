<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	//membuat variabel $nis dan datanya dari inputan NIS
    // $namalengkap	= $_POST['NamaLengkap'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
    $id_admin		    = $_POST['id_admin'];
	$id_bb		    = $_POST['id_bb'];
    $stok 			= $_POST['stok'];
    $harga		    = $_POST['harga'];
    $tgl_masuk 		= $_POST['tgl_masuk'];
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$query = "INSERT INTO transaksi_masuk_bahan_baku VALUES ( '','$id_admin', '$id_bb', '$stok', '$harga', '$tgl_masuk')";
	$input = mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
	
	//jika query input sukses
	if($input){
		

		echo "<meta http-equiv=\"refresh\" content=\"0;URL=btpbk.php\">";
		 // echo ("<SCRIPT LANGUAGE='JavaScript'>
   //  window.alert('Succesfully Registered')
   //  window.location.href='c_crud_jadwal.php';
   //  </SCRIPT>");


		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah_btpbk.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>