<?php
// include 'koneksi.php';
// $page = $_GET['page'];
// $id= $_GET['id'];
// $data = mysqli_query($koneksi,"select * from room where room_id='$id'");
// while($d = mysqli_fetch_array($data)){
    ?>
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Stock</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<section class="my_account_area pt--80 pb--55 bg--white">
    <div class="container">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Tipe Barang</th>
                        <th>Quantity</th>
                        <th>Harga Per Unit</th>
                        <th>Foto Barang</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?php
                include '../func/koneksi.php';
                $data = mysqli_query($koneksi, "select * from gudang INNER JOIN kategori ON gudang.id_kategori=kategori.id_kategori INNER JOIN tipe_item ON gudang.id_tipe_item=tipe_item.id_tipe_item");
                while($d = mysqli_fetch_array($data)){
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $d['nama_item'] ?></td>
                        <td><?php echo $d['deskripsi'] ?></td>
                        <td><?php echo $d['nama_kategori'] ?></td>
                        <td><?php echo $d['nama_tipe_item'] ?></td>
                        <td><?php echo $d['quantity'] ?></td>
                        <td><?php echo $d['harga_unit'] ?></td>
                        <td><img src="../images/produk/<?php echo $d['gambar']; ?>" style="width: 120px;"></td>
                        <td><a class="btn btn-info" href="admin_page.php?page=editgudang&id=<?php echo $d['id_stock'];?>?">EDIT</a></td>
                        <td><a class="btn btn-danger" href="../func/deletegudang.php?id=<?php echo $d['id_stock'];?>">DELETE</a></td>
                    </tr>
                </tbody>
                <?php 
                }
            ?>
            </table>
        </div>
    </div>
</section>