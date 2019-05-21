<?php
    $DB_HOST = "localhost";
    $DB_USERNAME = "root";
<<<<<<< HEAD
    $DB_PASSWORD = "gokpras123";
=======
    $DB_PASSWORD = "";
>>>>>>> 76876e40b57c12a9a0e49ec043515a5ea6453964
    $DB_NAME = "proyek1";

    $koneksi = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME) or trigger_error(mysqli_error($koneksi), E_USER_NOTICE);
?>