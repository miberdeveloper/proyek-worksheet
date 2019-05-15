<?php
   include "../koneksi/koneksi.php";

   function query($query){
      global $koneksi;

      $result = mysqli_query($koneksi, $query);
      $rows = [];
      while ($data = mysqli_fetch_assoc($result)) {
          $rows[] = $data;
      }
      return $rows;
  }

  


?>