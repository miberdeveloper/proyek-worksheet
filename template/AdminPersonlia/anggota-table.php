<?php 
   $query = query("SELECT * FROM anggota a inner join jenis_user j ON a.jenis_anggota = j.id WHERE j.jenis = 'AdminPersonalia' ORDER BY a.id");
?>
<div class="box">
   <div class="box-header text-center"><h4>Anggota Personalia</h4></div>
   <div class="row">
      <div class="col-md-12">
         <div class="box-body table-responsive">
            <table class="table table-striped table-hover table-bordered table-align-middle text-center">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Nomor Anggota</th>
                     <th>Nama</th>
                     <th>Username</th>
                     <th>Alamat</th>
                     <th>Jenis Kelamin</th>
                     <th>Email</th>
                     <th>Telepon</th>
                     <th>Tanggal Daftar</th>
                     <th>Status</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     foreach ($query as $no => $data) {
                  ?>
                  <tr>
                     <td><?= ++$no ?>.</td>
                     <td><b><?= $data["nomor_anggota"] ?></b></td>
                     <td><?= $data["nama"] ?></td>
                     <td><?= $data["username"] ?></td>
                     <td><?= $data["alamat"] ?></td>
                     <td><?= $data["jenis_kelamin"] ?></td>
                     <td><?= $data["email"] ?></td>
                     <td><?= $data["telepon"] ?></td>
                     <td><?= date("d-M-Y", strtotime($data["tgl_daftar"]))  ?></td>
                     <?php 
                        $status = $data["status"];  
                     ?>
                     <td>
                        <span style="text-align: center" class="label label-<?= $status == 1 ? 'success' : 'danger' ?> ">
                           <?= $status == 1 ? 'Aktif' : 'Tidak Aktif' ?>
                        </span>
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
