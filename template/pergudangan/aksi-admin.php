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
                  document.location.href = 'pergudangan.php?page=pergudangan&page2=admin&data=adm';
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
         
         default:
            echo '
            <div class="alert alert-danger text-center">
               Nothing
            </div> ';
            break;
      }
}

?>