<?php 
   $query = query("SELECT * FROM admin a inner join jenis_user j ON a.jenis_admin = j.id WHERE j.jenis = 'keuangan' ORDER BY a.id");
?>
<div class="box">
   <div class="box-header text-center"><h4>Admin Keuangan</h4></div>
   <div class="row">
      <div class="col-md-12">
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
                  </tr>
                     <?php } ?>
               </tbody>
            </table>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>
