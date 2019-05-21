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
                  document.location.href = 'keuangan.php?page=keuangan&page2=admin&data=adm';
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
            if (hapusAdmin($id) > 0) {
               echo "
               <script>
                  alert('Data berhasil dihapus');
                  document.location.href = 'keuangan.php?page=keuangan&page2=admin&data=adm';
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
            echo "<h1>Edit status</h1>";
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