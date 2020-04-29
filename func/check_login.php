<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
$row = mysqli_fetch_assoc($data);
$member = mysqli_query($koneksi,"select * from login where id=$row[member_id]");
$row_member = mysqli_fetch_assoc($member);
$_SESSION['member_id'] ='';
$_SESSION['username'] ='';
$_SESSION['status'] = '';

if($cek > 0){
	$_SESSION['username'] = $$row_member['username'];
	$_SESSION['status'] = "login";
	$_SESSION['login_type'] = "user";
	$_SESSION['member_id'] = $row['member_id'];


	header("location:../index.php");
}else{
	header("location:login.php");
}
?>
