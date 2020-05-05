<?php
    include_once 'koneksi.php';

    $nama_item = $_POST['nama_item'];
    $deskripsi = $_POST['deskripsi'];
    $id_kategori = $_POST['kategori'];
    $id_tipe_item = $_POST['tipe_item'];
    $quantity = $_POST['quantity'];
    $harga_unit = $_POST['harga_unit'];
    $gambar = $_FILES['gambar']['name'];

    if ($gambar != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $gambar;
    
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../users/gambar/' . $nama_gambar_baru);
    
            $query = "INSERT INTO gudang VALUES (null, '$nama_item', '$deskripsi', '$id_kategori','$id_tipe_item', '$quantity', '$harga_unit', '$nama_gambar_baru')";
            $result = mysqli_query($koneksi, $query);
    
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                    " - " . mysqli_error($koneksi));
            } else {
                header('location:admin_page?page=tambah_stock');
            }
        }
    }
?>