<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    $insert = mysqli_query($koneksi, "insert into member 
    values ('', '$username', '$password', '$nama_lengkap', 101, '$alamat', '$email', '$tanggal_lahir')");
    
    header('location:../login_page.php');
?>