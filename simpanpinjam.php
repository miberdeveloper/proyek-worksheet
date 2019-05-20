<?php
   include "koneksi/koneksi.php";
   include "config/fungsi.php";

   $page = $_REQUEST['page'];
   $statusMenu = $_REQUEST['page3'];

   $title = "E-Koperasi";
   $judulKonten = "Simpan Pinjam";
   $keteranganKonten = $statusMenu;
   $breadcrumbKonten = $statusMenu;

   include "config/header.php";
   
   include "config/sidebar.php";

   switch ($page) {
      case 'simpanpinjam':

         switch ($statusMenu) {
            // Jika dipilih home
            case 'home':
               include "template/simpanpinjam/home.php";
            break;

            // Jika dipilih admin site
            case 'admin':
               include "template/simpanpinjam/admin.php";         
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