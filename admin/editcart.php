<?php
include '../func/koneksi.php';
$page = $_GET['page'];
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from cart where id_cart='$id'");
$d = mysqli_fetch_array($data)
    ?>
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
                    <form method="POST" action="../func/edit_cart_qurey.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $d['id_cart']; ?>">
                        <div class="account__form">
                            <div class="input__box">
                                <label>Member<span>*</span></label>
                                <select name="member">
                                <?php
                                    include '../func/koneksi.php';
                                    $member = mysqli_query($koneksi, "select * from member");
                                    while($m = mysqli_fetch_array($member)){
                                        if ($d['id_member'] == $m['id_member']){
                                        echo "<option value=\"{$m['id_member']}\" selected>".$m['nama']."</option>";
                                        }
                                        else{
                                            echo "<option value=\"{$m['id_member']}\">".$m['nama']."</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="input__box">
                                <label>Item<span>*</span></label>
                                <select name="item">
                                <?php
                                    include '../func/koneksi.php';
                                    $gudang = mysqli_query($koneksi, "select * from gudang");
                                    while($g = mysqli_fetch_array($gudang)){
                                        if ($d['id_stock'] == $g['id_stock']){
                                            echo "<option value=\"{$g['id_stock']}\" selected>".$g['nama_item']."</option>";
                                        }
                                        else{
                                            echo "<option value=\"{$g['id_stock']}\">".$g['nama_item']."</option>";
                                    }
                                        }
                                        
                                ?>
                                </select>
                            </div>
                            <div class="input__box">
                                <label>Quantity<span>*</span></label>
                                <input type="number" value="<?php echo $d['quantity']; ?>" name="quantity">
                            </div>
                            <div class="input__box">
                                <label>Harga Per Unit</label>
                                <label><?php echo $d['harga_unit']; ?></label>
                            </div>
                            <div class="input__box">
                                <label>Total</label>
                                <label><?php echo $d['sub_total'];?></label>
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