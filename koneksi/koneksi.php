<?php
    $DB_HOST = "localhost";
    $DB_USERNAME = "root";
<<<<<<< HEAD
    $DB_PASSWORD = ""; // grandis
    $DB_NAME = "proyek1"; // grandis
    // $DB_PASSWORD = "gokpras123"; // agus
    // $DB_NAME = "proyek1"; // agus
=======
<<<<<<< HEAD
    $DB_PASSWORD = "";
=======
    $DB_PASSWORD = "gokpras123";
>>>>>>> 1d8fcbe684edf429d7470d2bbdb2ad0001c59033
    $DB_NAME = "proyek1";
>>>>>>> d189e94fe56d44e8dae6b0da828d20b1990ef30c

    $koneksi = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME) or trigger_error(mysqli_error($koneksi), E_USER_NOTICE);
?>