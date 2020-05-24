<?php
    include_once 'koneksi.php';

    $cart_id = $_POST['id'];
    $item = $_POST['product'];
    $quantity = $_POST['qty'];
    // echo $quantity;
    $barang = mysqli_query($koneksi, "select * from gudang where id_stock ='$item'");
    $row = mysqli_fetch_array($barang);
    $harga_unit = $row['harga_unit'];
    $total= $quantity*$harga_unit;

    if ($quantity > 0){
        $query = "UPDATE cart Set quantity='$quantity',harga_unit='$harga_unit',sub_total='$total' where id_cart='$cart_id'";
        $result = mysqli_query($koneksi, $query);
        
    }
    header('location:../admin/index.php?page=cart_user_list');



    
?>