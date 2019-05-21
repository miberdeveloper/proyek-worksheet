<?php 
   $query = query("SELECT * FROM transaksi_angsuran b inner join transaksi_pinjam j ON b.id_angsuran = j.id ORDER BY b.id");
?>
<div class="box">
   <div class="box-header text-center"><h4>Tabel Angsuran</h4></div>
   <div class="row">
      <div class="col-md-12">
         <div class="box-body table-responsive">
            <table class="table table-striped table-hover table-bordered table-align-middle text-center">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>ID Angsuran</th>
                     <th>ID Anggota</th>
                     <th>Total Angsuran</th>
                     <th>Total Pinjam</th>
                     <th>Tanggal Angsuran</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     foreach ($query as $no => $data) {
                  ?>
                  <tr>
                     <td><?= ++$no ?>.</td>
                     <td><b><?= $data["id_angsuran"] ?></b></td>
                     <td><?= $data["id_anggota"] ?></td>
                     <td><?= $data["total_angsuran"] ?></td>
                     <td><?= $data["total_pinjam"] ?></td>                     
                     <td><?= date("d-M-Y", strtotime($data["tgl_angsuran"]))  ?></td>
                  </tr>
                     <?php } ?>
               </tbody>
            </table>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>
