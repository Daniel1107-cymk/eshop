<?php
    require_once('koneksi.php');
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = mysqli_query($koneksi, "select * from member where username='$username' and password='$password'");
    if($d=mysqli_fetch_assoc($data)){
		$_SESSION['id_member'] = $d['id_member'];
		$_SESSION['username'] = $username;
		$_SESSION['login_type'] = 'user';
		$_SESSION['status'] = 'login';
        header("location:../users/index.php");
    }else{
        echo "<script type='text/javascript'> 
        alert('Username dan Password Salah'); 
        window.history.back();
        </script>";
    }
?>