<?php
    include_once 'koneksi.php';

    
    $id =$_GET['id'];
    
    $query = "UPDATE order_list SET id_status_order='2' where id_order ='$id'";
    $result = mysqli_query($koneksi, $query);
    $select = "select * from order_list where id_order ='$id'";
    $result_select = mysqli_query($koneksi, $select);
    $data = mysqli_fetch_array($result_select);
    $member = $data['id_member'];
    $total = $data['total_harga'];

    $inv_last = mysqli_query($koneksi, "select * from invoice ORDER BY id_invoice DESC LIMIT 1");
    $last = mysqli_fetch_array($inv_last);
    $resi_last = mysqli_query($koneksi, "select * from resi ORDER BY id_resi DESC LIMIT 1");
    $last_resi = mysqli_fetch_array($resi_last);

    $today =date('Y-m-d');
    if ($last){
        $inv_num = $last['kode_invoice'];
        $resi_num = $last_resi['nomor_resi'];
        $split = str_split($inv_num, 4);
        $split[1]= intval($split[1]);
        $split[1] = $split[1] +1;
        $num = $split[1] ;

        $split_resi = str_split($resi_num, 5);
        $split_resi[1]= intval($split_resi[1]);
        $split_resi[1] = $split_resi[1] +1;
        $num_resi = $split_resi[1] ;

        $inv = "INSERT invoice VALUES (NULL,'INV-$num','$member','$id','$total','$today')";
        $result_insert = mysqli_query($koneksi, $inv);

        $resi = "INSERT resi VALUES (NULL,'RESI-$num_resi','$member','1','2','$id','$total','$today')";
        $result_resi = mysqli_query($koneksi, $resi);

        $resi_last_insert = mysqli_query($koneksi, "select * from resi ORDER BY id_resi DESC LIMIT 1");
        $last_resi_insert = mysqli_fetch_array($resi_last_insert);
        $id_last_resi = $last_resi_insert['id_resi'];
        $history = "INSERT histori_trans VALUES (NULL,'','$id_last_resi','$member')";
        $result_history = mysqli_query($koneksi, $history);

    }
    else{
        $inv_num = 'INV-1';
        $resi_num = 'RESI-1';
        $inv = "INSERT invoice VALUES (NULL,'$inv_num','$member','$id','$total','$today')";
        $result_insert = mysqli_query($koneksi, $inv);

        $resi = "INSERT resi VALUES (NULL,'$resi_num','$member','1','2','$id','$total','$today')";
        $result_resi = mysqli_query($koneksi, $resi);

        $resi_last_insert = mysqli_query($koneksi, "select * from resi ORDER BY id_resi DESC LIMIT 1");
        $last_resi_insert = mysqli_fetch_array($resi_last_insert);
        $id_last_resi = $last_resi_insert['id_resi'];
        $history = "INSERT histori_trans VALUES (NULL,'','$id_last_resi','$member')";
        $result_history = mysqli_query($koneksi, $history);
    }
    header('location:../admin/admin_page.php?page=edit_order_list');


    
?>  