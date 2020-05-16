<?php
    include_once 'koneksi.php';

    $id = $_POST['id'];
    $member = $_POST['member'];
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $barang = mysqli_query($koneksi, "select * from gudang where id_stock ='$item'");
    $row = mysqli_fetch_array($barang);
    $harga_unit = $row['harga_unit'];
    $total= $quantity*$harga_unit;

    if ($quantity > 0){
        $query = "UPDATE cart set id_member='$member',id_stock='$item',quantity='$quantity',harga_unit='$harga_unit',sub_total='$total' WHERE id_cart ='$id'";
        $result = mysqli_query($koneksi, $query);
        echo $result;
    }
    header('location:../admin/admin_page.php?page=cart_list');


    
?>