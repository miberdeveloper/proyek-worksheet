<?php 
   $query = query("SELECT * FROM transaksi_pinjam b inner join anggota j ON b.id_anggota = j.id ORDER BY b.id");
?>
<div class="box">
   <div class="box-header text-center"><h4>Tabel Peminjaman</h4></div>
   <div class="row">
      <div class="col-md-12">
         <div class="box-body table-responsive">
            <table class="table table-striped table-hover table-bordered table-align-middle text-center">
               <thead>
                  <tr>
                     <th>#</th>
                     <!-- <th>ID</th> -->
                     <th>ID Anggota</th>
                     <th>Nama Anggota</th>
                     <th>Total Pinjam</th>      
                     <th>Tanggal Pinjam</th>                     
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     foreach ($query as $no => $data) {
                  ?>
                  <tr>
                     <td><?= ++$no ?>.</td>
                     
                     <td><b><?= $data["id_anggota"] ?></b></td>
                     <td><?= $data["nama"] ?></td>
                     <td><?= $data["total_pinjam"] ?></td>                     
                     <td><?= date("d-M-Y", strtotime($data["tgl_pinjam"]))  ?></td>
                  </tr>
                     <?php } ?>
               </tbody>
            </table>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>
