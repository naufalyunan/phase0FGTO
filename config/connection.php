<?php
    $db_host = "127.0.0.1:3306"; //host db
    $db_username = "root";
    $db_password = "";
    $db_name = "fp_ph0_ftgo";

    //buat koneksi ke server mysql
    $koneksi = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($koneksi -> connect_error) {
        die("Koneksi ke database gagal". $koneksi -> connect_error);
    }
    echo"Koneksi berhasil";
?>