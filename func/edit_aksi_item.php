<?php
    include_once 'koneksi.php';

    $id = $_POST['id'];
    $nama_item = $_POST['nama_item'];
    $deskripsi = $_POST['deskripsi'];
    $id_kategori = $_POST['kategori'];
    $id_tipe_item = $_POST['tipe_item'];
    $quantity = $_POST['quantity'];
    $harga_unit = $_POST['harga_unit'];
    $gambar = $_FILES['gambar']['name'];
    echo $harga_unit;

    if ($gambar) {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $gambar;
    
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../users/gambar/' . $nama_gambar_baru);
    
            $query = "update gudang SET  nama_item='$nama_item',deskripsi='$deskripsi',id_kategori='$id_kategori',id_tipe_item='$id_tipe_item',quantity='$quantity',harga_unit='$harga_unit',gambar='$nama_gambar_baru' where id_stock='$id';";
            $result = mysqli_query($koneksi, $query);
            header('location:../admin/admin_page.php');
        }
    }
    else{
        $query = "update gudang SET nama_item='$nama_item',deskripsi='$deskripsi',id_kategori='$id_kategori',id_tipe_item='$id_tipe_item',quantity='$quantity',harga_unit='$harga_unit' where id_stock='$id';";
        $result = mysqli_query($koneksi, $query);
        header('location:../admin/admin_page.php');
    }
?>