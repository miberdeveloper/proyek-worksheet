<?php
	include "koneksi/koneksi.php";
?>

<html>
<head>
	<title>Print Document</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<table border="1" width="90%" style="border-collapse:collapse;" align="center">
    	<tr class="tableheader">
        <th width="100"><center>NO</th>
         <th width="220"><center>ID ADMIN</th>
         <th width="180"><center>ID B_BAKU</th>
         <th width="180"><center>STOK</th>
         <th width="180"><center>HARGA</th>
         <th width="380"><center>TOTAL</th>
        </tr>

        <?php $i=1 ?>
        <?php
        $data = "select * from transaksi_masuk_bahan_baku"; 
        $result=mysqli_query($mysqli,$data);
        while($hasil = mysqli_fetch_array($result))
        { 
        ?>

        <tr id="rowHover">
        <td><center><?= $i++ ?></td>
         <td><center><?= $row['id_admin'] ?></td>
         <td><center><?= $row['id_bahan_baku'] ?></td>
         <td><center><?= $row['stok'] ?></td>
         <td><center><?= $row['harga'] ?></td>
         <td><?= $row['total'] ?></td>       
        </tr>
        <?php } ?>
    </table>
    
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>