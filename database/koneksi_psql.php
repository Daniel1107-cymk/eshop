<?php
    // $koneksi = new PDO("pgsql:user=postgres password=admin dbname=sepatu");
    // $koneksi = pg_pconnect("dbname=sepatu");
    // $appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    // $koneksi = "host=localhost port=5432 dbname=sepatu user=postgres options='--application_name=$appName'";
    $conn_string = "host=localhost port=5432 dbname=sepatu user=postgres password=admin";
    $koneksi = pg_connect($conn_string);
    if($koneksi){
        echo 'koneksi berhasil';
    }else{
        echo 'koneksi gagal';
    }
?>