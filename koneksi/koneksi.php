<?php
    $DB_HOST = "localhost";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "gokpras123";
    $DB_NAME = "koperasi";

    $koneksi = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME) or trigger_error(mysqli_error($koneksi), E_USER_NOTICE);
?>