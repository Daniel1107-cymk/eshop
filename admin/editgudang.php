<?php
include '../func/koneksi.php';
$page = $_GET['page'];
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from gudang where id_stock='$id'");
$d = mysqli_fetch_array($data)
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
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Edit Barang</h3>
                    <form method="POST" action="../func/edit_aksi_item.php" enctype="multipart/form-data">
                        <div class="account__form">
                            <div class="input__box">
                                <input type="hidden" name="id" value="<?php echo $d['id_stock']; ?>">
                                <label>Nama Barang<span>*</span></label>
                                <input type="text" name="nama_item" value="<?php echo $d['nama_item'];?>">
                            </div>
                            <div class="input__box">
                                <label>Deskripsi<span>*</span></label>
                                <input type="text" name="deskripsi" value="<?php echo $d['deskripsi'];?>">
                            </div>
                            <div class="input__box">
                                <label>Kategori<span>*</span></label>
                                <select name="kategori">
                                <?php
                                    include '../func/koneksi.php';
                                    $result = mysqli_query($koneksi, "select * from kategori");
                                    while($row = mysqli_fetch_array($result)){
                                        if ($d['id_kategori'] == $row['id_kategori']){
                                            echo "<option value=\"{$row['id_kategori']}\" selected>".$row['nama_kategori']."</option>";
                                        }
                                        else{
                                            echo "<option value=\"{$row['id_kategori']}\">".$row['nama_kategori']."</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="input__box">
                                <label>Tipe<span>*</span></label>
                                <select name="tipe_item">
                                <?php
                                    include '../func/koneksi.php';
                                    $result1 = mysqli_query($koneksi, "select * from tipe_item");
                                    while($row1 = mysqli_fetch_array($result1)){
                                        if ($d['id_tipe_item'] == $row1['id_tipe_item']){
                                            echo "<option value=\"{$row1['id_tipe_item']}\" selected>".$row1['nama_tipe_item']."</option>";
                                        }
                                        else{
                                            echo "<option value=\"{$row1['id_tipe_item']}\">".$row1['nama_tipe_item']."</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="input__box">
                                <label>Quantity<span>*</span></label>
                                <input type="number" name="quantity"  value="<?php echo $d['quantity'];?>">
                            </div>
                            <div class="input__box">
                                <label>Harga Per Unit<span>*</span></label>
                                <input type="number" name="harga_unit"  value="<?php echo $d['harga_unit'];?>">
                            </div>
                            <div class="input__box">
                                <label>Gambar Produk</label>
                                <input type="file" name="gambar">
                            </div>
                            <div class="form__btn">
                                <button type="submit" value="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>