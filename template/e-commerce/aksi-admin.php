<?php 
$data = $_REQUEST['data'];

$id = $_GET['id'];

if (isset($data)) {
      switch ($data) {
         case 'tambah-adm':
            include_once "tambah-admin.php";
            break;
         case 'edit-adm':
            include_once "edit-admin.php";
            break;
         case 'hapus-adm':
            if (hapusAdmin($id) > 0) {
               echo "
               <script>
                  alert('Data berhasil dihapus');
                  document.location.href = 'E-commerce.php?page=ecommerce&page2=admin&data=adm';
               </script>
               ";
            } else {
               echo "
                  <script>
                     alert('Hapus data gagal');
                  </script>
               ";
               echo("<br>");
               echo mysqli_error($koneksi);
            }
            break;
         
         case 'tambah-ang':
            include_once "tambah-anggota.php";
            break;

         case 'edit-ang':
            include_once "edit-anggota.php";
            break;

         case 'hapus-ang':
            if (hapusAnggota($id) > 0) {
               echo "
               <script>
                  alert('Data berhasil dihapus');
                  document.location.href = 'e-commerce.php?page=ecommerce&page2=admin&data=ang';
               </script>
               ";
            } else {
               echo "
                  <script>
                     alert('Hapus data gagal');
                  </script>
               ";
               echo("<br>");
               echo mysqli_error($koneksi);
            }
            break;
         
         case 'edit-status':
            include_once "edit-status.php";            
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