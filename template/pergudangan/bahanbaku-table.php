<?php 
   $query = query("SELECT * FROM bahan_baku b inner join jenis_bahan j ON b.jenis_bahan = j.id ORDER BY b.id");
?>
<div class="box">
   <div class="box-header text-center"><h4>Bahan Baku</h4></div>
   <div class="row">
      <div class="col-md-12">
         <div class="box-body table-responsive">
            <table class="table table-striped table-hover table-bordered table-align-middle text-center">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Nama</th>
                     <th>Harga</th>
                     <th>Stok</th>
                     <th>Jenis Bahan</th>
                     <th>Tanggal Input</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     foreach ($query as $no => $data) {
                  ?>
                  <tr>
                     <td><?= ++$no ?>.</td>
                     <td><b><?= $data["nama"] ?></b></td>
                     <td><?= $data["harga"] ?></td>
                     <td><?= $data["stok"] ?></td>
                     <td><?= $data["jenis"] ?></td>
                     <td><?= date("d-M-Y", strtotime($data["tgl_masuk"]))  ?></td>
                  </tr>
                     <?php } ?>
               </tbody>
            </table>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>
