<?php
    $koneksi = new PDO("pgsql:user=postgres password=admin dbname=eshop");
    if($koneksi){
        echo 'koneksi berhasil';
    }else{
        echo 'koneksi gagal';
    }
?>