<?php
$koneksi = mysqli_connect("localhost","root","","sepatu");
if (mysqli_connect_errno()){
echo "connection database failed : " . mysqli_connect_error();
}
?>