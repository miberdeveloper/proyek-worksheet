<?php
    $DB_HOST = "localhost";
    $DB_USERNAME = "root";
<<<<<<< HEAD
    $DB_PASSWORD = "";
=======
    $DB_PASSWORD = "gokpras123";
>>>>>>> 1d8fcbe684edf429d7470d2bbdb2ad0001c59033
    $DB_NAME = "proyek1";

    $koneksi = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME) or trigger_error(mysqli_error($koneksi), E_USER_NOTICE);
?>