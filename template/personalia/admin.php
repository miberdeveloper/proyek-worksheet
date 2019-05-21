<?php 
   $link = "personalia.php?page=personalia&page2=admin";
   
   $data = $_REQUEST['data'];

   if (!isset($data)) {
?>
<div class="row">
   <div class="col-lg-6 col-xs-12">
      <!-- small box -->
      <a href="<?=$link. '&data=adm'?>">
         <div class="small-box bg-blue">
            <div class="inner">
               <h3>
                  Admin
               </h3>
               <p>&nbsp;</p>
            </div>
            <div class="icon">
               <i class="ion ion-person-stalker"></i>
            </div>
         </div>
      </a>
   </div>
   <div class="col-lg-6 col-xs-12">
      <!-- small box -->
      <a href="<?=$link. '&data=ang'?>">
         <div class="small-box bg-aqua">
            <div class="inner">
               <h3>
                  Anggota
               </h3>
               <p>&nbsp;</p>
            </div>
            <div class="icon">
               <i class="ion ion-person-stalker"></i>
            </div>
         </div>
      </a>
   </div>
</div>
<div class="row">
   <div class="col-lg-6 col-xs-12">
      <!-- small box -->
      <a href="<?=$link. ''?>">
         <div class="small-box bg-green">
            <div class="inner">
               <h3>
                  Laporan Personalia
               </h3>
               <p>&nbsp;</p>
            </div>
            <div class="icon">
               <i class="ion ion-clipboard"></i>
            </div>
         </div>
      </a>
   </div>
<?php
   } else {
      switch ($data) {
         case 'adm' :
         include_once "admin-data.php";
         break;

         case 'ang' :
         include_once "anggota-data.php";
         break;

         case 'tambah-adm' ||  'edit-adm' || 'hapus-adm' :
         include_once "aksi-admin.php";
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