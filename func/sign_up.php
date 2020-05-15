<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    $select_login_username = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username'");
    if($d=mysqli_fetch_assoc($select_login_username)){
        // buat message ngak boleh pakek username yang udah ada
        header('location:../signup_page.php');
    }
    else{
        $insert = mysqli_query($koneksi, "INSERT INTO member VALUES('','$nama_lengkap',1,'$alamat','$email','$tanggal_lahir');");
        $select_member = mysqli_query($koneksi, "SELECT * FROM member WHERE nama='$nama_lengkap' AND alamat='$alamat' AND email='$email'");
        $member = mysqli_fetch_array($select_member);
        $member_id = $member[0];
        $insert_login = mysqli_query($koneksi, "INSERT INTO login VALUES('','$username','$password','$member_id',0)");
        echo $insert_login;

        
        header('location:../login_page.php');
    }

    
?>