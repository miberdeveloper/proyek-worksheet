<?php 
    $id = $_REQUEST['id'];

    $data = query("SELECT * FROM admin WHERE id = '$id'")[0];
?>
<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="box">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Pengguna </h3>
                </div>
                <form role="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username" value="<?= $data['username'] ?>" required disabled readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" value="<?= $data['nama'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat" required><?= $data['alamat'] ?></textarea>
                        </div>
                        <div class="form-group">
                           <label for="jk">Jenis Kelamin</label>
                           <select name="jk" id="jk" class="form-control">
                              <option value="" disabled selected>Pilih jenis kelamin</option>
                              <option value="L" <?= $data['jenis_kelamin'] == 'L' ? 'selected' : '' ?> >Laki-laki</option>
                              <option value="P" <?= $data['jenis_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
                           </select>       
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email" value="<?= $data['email'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukan telepon" value="<?= $data['telepon'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password2" placeholder="Konfirmasi password" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputFile">Upload foto</label>
                            <input type="file" id="exampleInputFile" name="photo" value="{{ old('photo') }}" required>
                            <p class="help-block">* Maksimal 2 MB</p>
                        </div> -->
                    </div>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="box-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
   if (isset($_POST['submit'])) {
      if (editAdmin($_POST) > 0) {
         echo "
         <script>
            alert('Data user berhasil ditambahkan');
            document.location.href = 'personalia.php?page=personalia&page2=admin&data=adm';
         </script>
         ";
      } else {
         echo "
         <script>
            alert('Data gagal ditambahkan');
         // document.location.href = 'tambahjenis.php';            
         </script>
         ";
         echo("<br>");
         echo mysqli_error($koneksi);        
      }
   }
?>