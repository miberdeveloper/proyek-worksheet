<?php 
   $link = "AdminPersonalia.php?page=AdminPersonalia&page2=admin";
   
   $data = $_REQUEST['data'];

   if (!isset($data)) {
?>
<div class="row">
   <div class="col-lg-6 col-xs-12">
      <!-- small box -->
      <!-- small box -->
      <a href="<?=$link. '&data=ang'?>">
         <div class="small-box bg-aqua">
            <div class="inner">
               <h3>
                  Daftar Anggota Baru
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
<?php
   } else {
      switch ($data) {
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