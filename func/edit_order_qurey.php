<?php
    include_once 'koneksi.php';

    $member = $_POST['member'];
    $id =$_POST['id'];
    $deskripsi = $_POST['deskripsi'];
    $order_date = $_POST['order_date'];
    $send_date = $_POST['send_date'];

    
    $query = "UPDATE order_list SET deskripsi='$deskripsi',tanggal_order='$order_date',tanggal_kirim='$send_date' where id_order ='$id'";
    $result = mysqli_query($koneksi, $query);
    header('location:../admin/admin_page.php?page=edit_order_list');


    
?>  