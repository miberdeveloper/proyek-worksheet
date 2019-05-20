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

    //Kode Anggota
    function nomerAnggota($kode) {
        global $koneksi;

        $query = mysqli_query($koneksi, "SELECT max(id) as maxkode from anggota ");
        $data = mysqli_fetch_array($query);
        $kodeAnggota = $data['maxkode'];
        $nourut = $kodeAnggota++;
        $char = $kode;
        $kodeAnggota = $char.sprintf("%05s", $nourut);
        return $kodeAnggota;
    }

    function tambahAdmin($data){
        global $koneksi;
        
        $nama = htmlspecialchars($data['nama']);
        $username = strtolower(stripcslashes($data['username']));
        $alamat = $data['alamat'];
        $jk = $data['jk'];
        $email = $data['email'];
        $telepon = $data['telepon'];
        $foto = 'null';
        $jenis_admin = 1;
        $tgl_daftar = date('Y-m-d');


        $password = mysqli_real_escape_string($koneksi, $data['password']);
        $password2 = mysqli_real_escape_string($koneksi, $data['password2']);
        
        //mengecek username
        $query = mysqli_query($koneksi, "SELECT username FROM admin WHERE username='$username' ");
    
        if (mysqli_fetch_assoc($query)) {
            echo "
                <script>
                    alert('Username sudah ada');
                    window.location = 'keuangan.php?page=keuangan&page2=admin&data=tambah-adm';
                </script>
                    ";
            return false;
        }
        //cek informasi password
        if ($password !== $password2) {
            echo "
                <script>
                    alert('Harap memasukan password dengan benar');
                    // window.location = 'registrasi.php';
                </script>
            ";
            die();
            return false;
        }

        //enkripsi password
        $password = password_hash($password,PASSWORD_DEFAULT);

        //tambah data
        mysqli_query($koneksi, "INSERT INTO admin VALUES (Null, '$username', '$password', '$nama','$alamat', '$jk', '$email', '$telepon', '$foto', '$jenis_admin', '$tgl_daftar')");   

        return mysqli_affected_rows($koneksi);
    }

    function editAdmin($data){
        global $koneksi;
        
        $id = $data['id'];
        $nama = htmlspecialchars($data['nama']);
        $alamat = $data['alamat'];
        $jk = $data['jk'];
        $email = $data['email'];
        $telepon = $data['telepon'];
        $foto = 'null';
        $jenis_admin = $data['jenis'];


        $password = mysqli_real_escape_string($koneksi, $data['password']);
        $password2 = mysqli_real_escape_string($koneksi, $data['password2']);
        
        //mengecek username
        // $query = mysqli_query($koneksi, "SELECT username, password FROM admin WHERE username='$username' ")[0];
    
        // if (!mysqli_fetch_assoc($query)) {
        //     echo "
        //         <script>
        //             alert('Terjadi kesalahan penginputan data');
        //             window.location = 'pergudangan.php?page=pergudangan&page2=admin&data=adm';
        //         </script>
        //             ";
        //     return false;
        // }

        //cek informasi password
        if ($password !== $password2) {
            echo "
                <script>
                    alert('Terjadi kesalahan penginputan data');
                    // window.location = 'registrasi.php';
                </script>
            ";
            die();
            return false;
        }

        //enkripsi password
        $password = password_hash($password,PASSWORD_DEFAULT);

        $query = "UPDATE admin SET 
        nama = '$nama',
        alamat = '$alamat',
        jenis_kelamin = '$jk',
        email = '$email',
        telepon = '$telepon',
        jenis_admin = '$jenis_admin',
        password = '$password' WHERE id =  '$id' ";

        //tambah data
        mysqli_query($koneksi, $query);   

        return mysqli_affected_rows($koneksi);
    }

    function hapusAdmin($id) {
        global $koneksi;

        $query = "DELETE from admin WHERE id = '$id' ";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }
  
    function tambahAnggota($data){
        global $koneksi;
        
        $nomer = $data['nomer_anggota'];
        $nama = htmlspecialchars($data['nama']);
        $username = strtolower(stripcslashes($data['username']));
        $alamat = $data['alamat'];
        $jk = $data['jk'];
        $email = $data['email'];
        $telepon = $data['telepon'];
        $foto = 'null';
        $jenis_anggota = 1;
        $tgl_daftar = date('Y-m-d');
        $status = 1;

        $password = mysqli_real_escape_string($koneksi, $data['password']);
        $password2 = mysqli_real_escape_string($koneksi, $data['password2']);
        
        //mengecek username
        $query = mysqli_query($koneksi, "SELECT username FROM anggota WHERE username='$username' ");
    
        if (mysqli_fetch_assoc($query)) {
            echo "
                <script>
                    alert('Username sudah ada');
                    window.location = 'keuangan.php?page=keuangan&page2=admin&data=tambah-ang';
                </script>
                    ";
            return false;
        }
        //cek informasi password
        if ($password !== $password2) {
            echo "
                <script>
                    alert('Harap memasukan password dengan benar');
                    // window.location = 'registrasi.php';
                </script>
            ";
            die();
            return false;
        }

        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //tambah data
        mysqli_query($koneksi, "INSERT INTO anggota VALUES (NULL, '$nomer', '$username', '$password', '$nama','$alamat', '$jk', '$email', '$telepon', '$foto', '$jenis_anggota', '$tgl_daftar', $status )");   

        return mysqli_affected_rows($koneksi);
    }

    function editAnggota($data) {
        global $koneksi;
        
        $id = $data['id'];
        $nama = htmlspecialchars($data['nama']);
        $alamat = $data['alamat'];
        $jk = $data['jk'];
        $email = $data['email'];
        $telepon = $data['telepon'];
        $foto = 'null';
        // $jenis_anggota = 1;
        $tgl_daftar = date('Y-m-d');

        $password = mysqli_real_escape_string($koneksi, $data['password']);
        $password2 = mysqli_real_escape_string($koneksi, $data['password2']);
        
        //mengecek username
        // $query = mysqli_query($koneksi, "SELECT username FROM anggota WHERE username='$username' ");
    
        // if (mysqli_fetch_assoc($query)) {
        //     echo "
        //         <script>
        //             alert('Username sudah ada');
        //             window.location = 'pergudangan.php?page=pergudangan&page2=admin&data=tambah-ang';
        //         </script>
        //             ";
        //     return false;
        // }
        //cek informasi password
        if ($password !== $password2) {
            echo "
                <script>
                    alert('Harap memasukan password dengan benar');
                    // window.location = 'registrasi.php';
                </script>
            ";
            die();
            return false;
        }

        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "UPDATE anggota SET 
        nama = '$nama',
        alamat = '$alamat',
        jenis_kelamin = '$jk',
        email = '$email',
        telepon = '$telepon',
        password = '$password' WHERE id =  '$id' ";

        //tambah data
        mysqli_query($koneksi, $query);   

        return mysqli_affected_rows($koneksi);
    }

    function editStatus($data) {
        global $koneksi;

        $id = $data['id'];
        $status = $data['status'];

        $query = "UPDATE anggota SET status = '$status' WHERE id = '$id' ";
        mysqli_query($koneksi, $query);   

        return mysqli_affected_rows($koneksi);
    }

    function hapusAnggota($id) {
        global $koneksi;

        $query = "DELETE from anggota WHERE id = '$id' ";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }

?>