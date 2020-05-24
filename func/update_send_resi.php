<?php
    include_once 'koneksi.php';

    
    $id =$_POST['id'];
    
    $query = "UPDATE resi SET id_status_kirim='2' where id_resi ='$id'";
    $result = mysqli_query($koneksi, $query);
    $select = "select * from resi where id_resi ='$id'";
    $result_select = mysqli_query($koneksi, $select);
    $data = mysqli_fetch_array($result_select);
    $id_order = $data['id_order'];
    $query_order = "UPDATE order_list SET id_status_order='3' where id_order ='$id_order'";
    $result_order = mysqli_query($koneksi, $query_order);

    header('location:../admin/admin_page.php?page=list_pengiriman');
    
?>  