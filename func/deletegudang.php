<?php
    include_once 'koneksi.php';

    $id= $_GET['id'];

    $query = "delete from gudang where id_stock='$id';";
    $result = mysqli_query($koneksi, $query);
    echo $result;
    header('location:../admin/admin_page.php');

?>