<?php
   include "koneksi/koneksi.php";
   include "config/fungsi.php";

   $page = $_REQUEST['page'];
   $statusMenu = $_REQUEST['page2'];

   $title = "E-Koperasi";
   $judulKonten = "Keuangan";
   $keteranganKonten = $statusMenu;
   $breadcrumbKonten = $statusMenu;

   include "config/header.php";
   
   include "config/sidebar.php";

   switch ($page) {
      case 'keuangan':

         switch ($statusMenu) {
            // Jika dipilih home
            case 'home':
               include "template/keuangan/home.php";
            break;

            // Jika dipilih admin site
            case 'admin':
               include "template/keuangan/admin.php";         
            break;
            
            default:
            # code...
            break;
         }  

         break;
      
      default:
         # code...
         break;
   }

  include "config/footer.php";
?>