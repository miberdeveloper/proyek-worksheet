<?php
  include "koneksi/koneksi.php";

   $title = "E-Koperasi";
   $judulKonten = "Dashboard";
   $keteranganKonten = "Keterangan dashboard";
   $breadcrumbKonten = "Home";

   include "config/header.php";
   
   $page = $_REQUEST['page'];
   $statusMenu = $_REQUEST['page2'];
   
   include "config/sidebar.php";

   $jmlAdmin = mysqli_fetch_assoc (mysqli_query($koneksi, "SELECT count(id) as jmlAdmin FROM admin"));
   $jmlAnggota = mysqli_fetch_assoc (mysqli_query($koneksi, "SELECT count(id) as jmlAnggota FROM anggota WHERE status = 1"));
   $jmlBahanJadi = mysqli_fetch_assoc (mysqli_query($koneksi, "SELECT count(id) as jmlBahan FROM bahan_jadi"));

?>

<!-- CONTENT -->
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>
                <?= $jmlAdmin['jmlAdmin'] ?> Orang
              </h3>

              <p>Data Admin Keseluruhan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                <?= $jmlAnggota['jmlAnggota'] ?> Orang
              </h3>

              <p>Data Anggota Keseluruhan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
         
<!-- CONTENT -->

<?php
  include "config/footer.php";
?>