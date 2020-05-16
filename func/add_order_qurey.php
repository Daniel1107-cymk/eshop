<?php
    include_once 'koneksi.php';

    $member = $_POST['member'];
    $deskripsi = $_POST['deskripsi'];
    $order_date = $_POST['order_date'];
    $send_date = $_POST['send_date'];
    $cart = mysqli_query($koneksi, "select id_cart from cart where id_member ='$member' and id_order is NULL");
    $row = mysqli_fetch_array($cart);

    if ($row){
        $cart_total = mysqli_query($koneksi, "select sum(sub_total) as total from cart where id_member ='$member' and id_order is NULL");
        $row_total = mysqli_fetch_array($cart_total);
        $total = $row_total['total'];

        $order_last = mysqli_query($koneksi, "select * from order_list where id_member ='$member' ORDER BY id_order DESC LIMIT 1");
        $last = mysqli_fetch_array($order_last);
        $num = FALSE;
        if ($last){
            $num = $last['order_num'];
            $split = str_split($num, 6);
            $split[1]= intval($split[1]);
            $split[1] = $split[1] +1;
            $num = $split[1] ;
            $query = "INSERT INTO order_list VALUES (NULL,'Order-$num','$deskripsi','$member',1,'$order_date','$send_date','$total')";
            $result = mysqli_query($koneksi, $query);
        }
        else{
            $num = 'Order-1';
            $query = "INSERT INTO order_list VALUES (NULL,'$num','$deskripsi','$member',1,'$order_date','$send_date','$total')";
            $result = mysqli_query($koneksi, $query);
        }
        $cart = mysqli_query($koneksi, "select id_cart from cart where id_member ='$member' and id_order is NULL");
        while($row = mysqli_fetch_array($cart)){
            $order_last_insert = mysqli_query($koneksi, "select id_order from order_list where id_member ='$member' ORDER BY id_order DESC LIMIT 1");
            $last_insert = mysqli_fetch_array($order_last_insert);
            $last_id = $last_insert['id_order'];
            $id_cart = $row['id_cart'];
            $query_update = "UPDATE cart SET id_order = '$last_id' WHERE id_cart='$id_cart' ";
            $result_update = mysqli_query($koneksi, $query_update);
            echo $result_update;
        }

    }
    else{
        echo "<script type='text/javascript'> 
        alert('Member ini tidak ada cart'); 
        window.history.back();
        </script>";
    }
    header('location:../admin/admin_page.php?page=order_list');


    
?>  