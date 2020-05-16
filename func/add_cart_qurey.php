<?php
    include_once 'koneksi.php';

    $member = $_POST['member'];
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $barang = mysqli_query($koneksi, "select * from gudang where id_stock ='$item'");
    $row = mysqli_fetch_array($barang);
    $harga_unit = $row['harga_unit'];
    $total= $quantity*$harga_unit;

    if ($quantity > 0){
        $query = "INSERT INTO cart VALUES (NULL,NULL,'$member','$item',1,'$quantity','$harga_unit','$total')";
        $result = mysqli_query($koneksi, $query);
        echo $result;
    }
    header('location:../admin/admin_page.php?page=cart_list');


    
?>