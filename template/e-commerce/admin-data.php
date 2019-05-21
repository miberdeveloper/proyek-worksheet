<?php 
   $query = query("SELECT a.id as 'idAdmin' ,a.* , j.* FROM admin a inner join jenis_user j ON a.jenis_admin = j.id WHERE j.jenis = 'E-Commerce' ORDER BY a.id");
   $link = "e-commerce.php?page=ecommerce&page2=admin";
   $dataGet = $_REQUEST['data'];

   if ($dataGet == 'adm') {
?>
<div class="box">
   <div class="box-header">
      <h3 class="box-title">Admin</h3>
      <a href="<?= $link. '&data=tambah-adm' ?>" style="float: right" class="btn btn-sm btn-success"><span class="fa fa-plus"></span> Tambah</a>
   </div>
   <div class="row">
      <div class="col-md-12 col-xs-12">
      <div class="box-body table-responsive">
            <table class="table table-striped table-hover table-bordered table-align-middle text-center">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Nama</th>
                     <th>Username</th>
                     <th>Alamat</th>
                     <th>Jenis Kelamin</th>
                     <th>Email</th>
                     <th>Telepon</th>
                     <th>Tanggal Daftar</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     foreach ($query as $no => $data) {
                  ?>
                  <tr>
                     <td><?= ++$no ?>.</td>
                     <td><?= $data["nama"] ?></td>
                     <td><?= $data["username"] ?></td>
                     <td><?= $data["alamat"] ?></td>
                     <td><?= $data["jenis_kelamin"] ?></td>
                     <td><?= $data["email"] ?></td>
                     <td><?= $data["telepon"] ?></td>
                     <td><?= date("d-M-Y", strtotime($data["tgl_daftar"]))  ?></td>
                     <td>
                        <div class="btn-group-vertical">
                           <a href="<?= $link. '&data=edit-adm&id='. $data['idAdmin'] ?>" class="btn btn-warning btn-sm">Edit</a>
                           <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?= $link. '&data=hapus-adm&id='. $data['idAdmin'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </div>
                     </td>
                  </tr>
                     <?php } ?>
               </tbody>
            </table>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>

<?php
   } else {
      include_once "aksi-admin.php";
   }
?>