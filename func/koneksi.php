<?php
    $koneksi = new PDO("pgsql:user=postgres password=admin dbname=sepatu");
    if($koneksi){
        echo 'koneksi berhasil';
    }else{
        echo 'koneksi gagal';
    }
?>