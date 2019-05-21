<?php
   $jmlAdmin = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT count(a.jenis_admin) as 'jmlAdmin' FROM admin a inner join jenis_user j ON a.jenis_admin = j.id WHERE j.jenis = 'E-Commerce' group by a.jenis_admin"));
   $jmlAnggota = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT count(a.jenis_anggota) as 'jmlAnggota' FROM anggota a inner join jenis_user j ON a.jenis_anggota = j.id WHERE j.jenis = 'E-Commerce' AND a.status = 1 group by a.jenis_anggota"));
   $jmlBahanJadi = mysqli_fetch_assoc (mysqli_query($koneksi, "SELECT count(id) as 'jmlBahan' FROM bahan_jadi"));
   $jmlTransaksi = mysqli_fetch_assoc (mysqli_query($koneksi, "SELECT count(*) as 'jmlTransaksi' FROM jual_anggota"));

   $link = "e-commerce.php?page=ecommerce&page2=home";
   
   $data = $_REQUEST['data'];
?>

<!-- CONTENT -->
<div class="row">
   <div class="col-lg-4 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-blue">
      <div class="inner">
         <h3>
            <?= $jmlAdmin["jmlAdmin"] ?> Orang
         </h3>

         <p>Admin Pergudangan</p>
      </div>
      <div class="icon">
         <i class="ion ion-person-stalker"></i>
      </div>
      <a href="<?= $link.'&data=adm' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-4 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-green">
      <div class="inner">
         <h3>
            <?= $jmlAnggota["jmlAnggota"] ?> Orang
         </h3>

         <p>Anggota Keseluruhan</p>
      </div>
      <div class="icon">
         <i class="ion ion-person-add"></i>
      </div>
      <a href="<?= $link.'&data=ang' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <div class="col-lg-4 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-yellow">
      <div class="inner">
         <h3>
            <?= $jmlBahanJadi["jmlBahan"] ?> Bahan
         </h3>

         <p>Jumlah Bahan Jadi</p>
      </div>
      <div class="icon">
         <i class="ion ion-ios-cart"></i>
      </div>
      <a href="<?= $link.'&data=bhn-jadi' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-12 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-aqua">
      <div class="inner">
         <h3>
            <?= $jmlTransaksi["jmlTransaksi"] ?> Transaksi
         </h3>

         <p>Transaksi</p>
      </div>
      <div class="icon">
         <i class="ion ion-ios-barcode"></i>
      </div>
      <a href="<?= $link.'&data=transaksi' ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
   </div>
        <!-- ./col -->
</div>
<?php
   if (isset($data)) {
         switch ($data) {
            case 'adm':
               include_once "admin-table.php";
               break;
            case 'ang':
               include_once "anggota-table.php";
               break;
            case 'bhn-jadi':
               include_once "bahanjadi-table.php";
               break;
            case 'transaksi':
               include_once "transaksi-table.php";
               break;
            
            default:
               echo '
                  <div class="alert alert-danger text-center">
                     Nothing
                  </div> ';
               break;
         }
   }
?>