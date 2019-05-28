<?php
	include "koneksi.php";
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
        <th width="100"><center>ID</th>
         <th width="100"><center>ID ADMIN</th>
         <th width="100"><center>ID B_BAKU</th>
         <th width="100"><center>STOK</th>
         <th width="120"><center>HARGA</th>
         <th width="120"><center>TGL_MASUK</th>

        </tr>

        <?php $i=1 ?>
        <?php
        $query = "select * from transaksi_masuk_bahan_baku"; 
        
        $data = query($query);

        foreach ($data as $i => $row) {
        ?>

        <tr id="rowHover">
        <td><center><?= $i++ ?></td>
         <td><center><?= $row['id'] ?></td>
         <td><center><?= $row['id_admin'] ?></td>
         <td><center><?= $row['id_bahan_baku'] ?></td>
         <td><center><?= $row['stok'] ?></td>
         <td><center><?= $row['harga'] ?></td>
         <td><center><?= $row['tgl_masuk'] ?></td>        
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