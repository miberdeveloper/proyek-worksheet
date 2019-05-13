<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="../css/slick.css" />
	<link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="../css/font-awesome.min.css">

</head>
<body>
    
    <div style="clear:left;">
    <?php
    include('../Pages/sidebar.php');
    ?>
    </div>

    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg col-md">
                   
                    <table class="table">

            <thead class="bg-secondary">
            <tr>
                <th scope="col">ID Barang</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Stock</th>
            </tr>
    
            <!-- <?php
            $data = mysqli_query($mysqli,"SELECT * FROM barang WHERE id_user = '$_SESSION[id]'"); 
            /* memberikan perintah query sql untuk 
            menampilkan semua data di tabel jual*/
            while ($show = mysqli_fetch_array($data)) {
            ?> -->

</thead>
<tbody>
    <tr>
        <td>
            <?php echo $show[''];?>
        </td>
        <td>
            <?php echo $show[''];?>
        </td>
        <td>
            <?php echo $show[''];?>
        </td>
        <td>
            <?php echo $show[''];?>
        </td>
        <td>
            <a href="" class="btn btn-info">EDIT DATA</a>
            <a href="" type="button" class="btn btn-success">EDIT DESAIN</a> 
            <a href="" class="btn btn-danger">DELETE</a>
        </td>
        </tr>
       
    <?php 
    } 
    ?>
</tbody>
</table>
    
</body>
</html>