<?php
  ini_set("display_errors", 0);

   include "koneksi/koneksi.php";
   include "config/fungsi.php";

   $page = $_REQUEST['page'];
   $statusMenu = $_REQUEST['page2'];

   $title = "E-Koperasi";
   $judulKonten = "E-Commerce";
   $keteranganKonten = $statusMenu;
   $breadcrumbKonten = $statusMenu;

   include "config/header.php";
   
   include "config/sidebar.php";

   switch ($page) {
      case 'ecommerce':

         switch ($statusMenu) {
            // Jika dipilih home
            case 'home':
               include "template/e-commerce/home.php";
            break;

            // Jika dipilih admin site
            case 'admin':
               include "template/e-commerce/admin.php";         
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