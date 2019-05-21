<?php 
   $query = query("SELECT j.*, a.*, sum(j.total_transaksi) as 'totalTransaksiAnggota' FROM jual_anggota j inner join anggota a ON j.id_anggota = a.id 
   GROUP BY j.id_anggota, month(j.tgl_transaksi), year(j.tgl_transaksi) ORDER BY j.id");
?>
<div class="box">
   <div class="box-header text-center"><h4>Bahan Jadi</h4></div>
   <div class="row">
      <div class="col-md-12">
         <div class="box-body table-responsive">
            <table class="table table-striped table-hover table-bordered table-align-middle text-center">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Anggota</th>
                     <th>Total</th>
                     <th>Periode</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     foreach ($query as $no => $data) {
                  ?>
                  <tr>
                     <td><?= ++$no ?>.</td>
                     <td><b><?= $data["nama"] ?></b></td>
                     <td><?= number_format($data['totalTransaksiAnggota'], 0, ",", ".") ?></td>
                     <td><?= date("M-Y", strtotime($data["tgl_transaksi"]))  ?></td>
                  </tr>
                     <?php } ?>
               </tbody>
            </table>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>
