<?php
    include_once 'koneksi.php';

    $cart_id = $_GET['cart_id'];
   
    $query = "DELETE FROM cart where id_cart='$cart_id'";
    $result = mysqli_query($koneksi, $query);
    
    // header('location:../admin/index.php?page=cart_user_list');
    echo "<script type='text/javascript'> 
        window.history.back();
        </script>";

?>