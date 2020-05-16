<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Cart</h2>
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
                    <h3 class="account__title">Add Cart</h3>
                    <form method="POST" action="../func/add_cart_qurey.php" enctype="multipart/form-data">
                        <div class="account__form">
                            <div class="input__box">
                                <!-- <label>Nama Barang<span>*</span></label>
                                <input type="text" name="nama_item"> -->
                                <label>Member<span>*</span></label>
                                <select name="member">
                                <?php
                                    include '../func/koneksi.php';
                                    $member = mysqli_query($koneksi, "select * from member");
                                    while($m = mysqli_fetch_array($member)){
                                        echo "<option value=\"{$m['id_member']}\">".$m['nama']."</option>";
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="input__box">
                                <!-- <label>Deskripsi<span>*</span></label>
                                <input type="text" name="deskripsi"> -->
                                <label>Item<span>*</span></label>
                                <select name="item">
                                <?php
                                    include '../func/koneksi.php';
                                    $member = mysqli_query($koneksi, "select * from gudang");
                                    while($m = mysqli_fetch_array($member)){
                                        echo "<option value=\"{$m['id_stock']}\">".$m['nama_item']."</option>";
                                    }
                                ?>
                                </select>
                            </div>
                            <!-- <div class="input__box">
                                <label>Kategori<span>*</span></label>
                                <select name="kategori">
                                <?php
                                    include '../func/koneksi.php';
                                    $result = mysqli_query($koneksi, "select * from kategori");
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<option value=\"{$row['id_kategori']}\">".$row['nama_kategori']."</option>";
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
                                        echo "<option value=\"{$row1['id_tipe_item']}\">".$row1['nama_tipe_item']."</option>";
                                    }
                                ?>
                                </select>
                            </div> -->
                            <div class="input__box">
                                <label>Quantity<span>*</span></label>
                                <input type="number" name="quantity">
                            </div>
                            <!-- <div class="input__box">
                                <label>Harga Per Unit</label>
                                <input type="number" name="harga_unit"  >
                            </div>
                            <div class="input__box">
                                <label>Total</label>
                                <input type="number" name="sub_total" disabled>
                            </div> -->
                            <div class="form__btn">
                                <button type="submit" value="submit">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>