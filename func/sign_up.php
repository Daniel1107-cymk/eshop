<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    // $insert = mysqli_query($koneksi, "insert into member 
    // values ('', '$username', '$password', '$nama_lengkap', 101, '$alamat', '$email', '$tanggal_lahir')");

    $conn_string = "host=localhost port=5432 dbname=sepatu user=postgres password=admin";
    $koneksi = pg_connect($conn_string);

    $user_status=101;
    // $insert = pg_query($koneksi, "INSERT INTO member VALUES('','$nama_lengkap',$user_status::INT,'$alamat','$email','$tanggal_lahir');");
    $insert = pg_query($koneksi, "CALL create_member('$nama_lengkap','$user_status','$alamat','$email','$tanggal_lahir');");
    $select_member = pg_query($koneksi, "SELECT * FROM member WHERE nama='$nama_lengkap' AND alamat='$alamat' AND email='$email'");
    $member = pg_fetch_array($select_member);
    $member_id =$member[0];
    echo $member_id;
    $insert_login = pg_query($koneksi, "CALL create_login('$username','$password','$member_id','FALSE')");
    echo $insert_login;

    // note
    // udah pernah juga coba 
    // CALL create_member('$nama_lengkap',101,'$alamat','$email','$tanggal_lahir')
    // database nya bisa di ambil dari database_psql
    
    // header('location:../login_page.php');
?>