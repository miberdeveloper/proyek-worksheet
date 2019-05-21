<?php
   $id = $_REQUEST['id'];

   $data = query("SELECT * FROM anggota WHERE id = '$id'")[0];
?>
<div class="row">
   <div class="col-md-6 col-xs-12">
      <div class="box">
         <div class="box-header">
            <h3 class="box-title">Edit Status</h3>
         </div>
         <form action="" method="post" class="form-group" style="padding: 5px 5px 12px 5px;">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
               <option value="" disabled selected>Masukan status</option>
               <option value="1" <?= $data['status'] == 1 ? 'selected' : '' ?> >Aktif</option>
               <option value="0" <?= $data['status'] == 0 ? 'selected' : '' ?> >Tidak Aktif</option>
            </select>
            <input type="hidden" name="id" value="<?= $id ?>" >
            <input type="submit" name="submit" value="Simpan" class="btn btn-success btn-block" style="margin-top: 10px">
         </form>
      </div>
   </div>
</div>
<?php
   if (isset($_POST['submit'])) {
      if (editStatus($_POST) > 0) {
         echo "
         <script>
            alert('Status berhasil dirubah');
            document.location.href = 'simpanpinjam.php?page=simpanpinjam&page3=admin&data=ang';
         </script>
         ";
      } else {
         echo "
         <script>
         // alert('Data gagal ditambahkan');
         // document.location.href = 'tambahjenis.php';            
         </script>
         ";
         echo("<br>");
         echo mysqli_error($koneksi);        
      }
   }
?>