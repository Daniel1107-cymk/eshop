<?php
include '../func/koneksi.php';
$page = $_GET['page'];
$id= $_GET['id_order'];
$data = mysqli_query($koneksi,"select * from order_list where id_order='$id'");
$d = mysqli_fetch_array($data)
    ?>
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Order</h2>
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
                    <h3 class="account__title"><?php echo $d['order_num']; ?></h3>
                    <input type="hidden" name="id" value="<?php echo $d['id_order']; ?>">
                    <div class="account__form">
                        <div class="input__box">
                            <label>Tanggal Order</label>
                            <?php echo $d['tanggal_order']; ?>
                        </div>
                        <div class="input__box">
                            <label>Tanggal kirim</label>
                            <?php echo $d['tanggal_kirim']; ?>
                        </div>
                        <div class="input__box">
                            <table class="table table-hover table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Qty</th>
                                        <th>Harga</th>
                                        <th>Sub Total</th>
                                    </tr>
                                </thead>
                                <?php
                                    $data1 = mysqli_query($koneksi, "select * from cart  where id_order ='$id' ");
                                    while($d1 = mysqli_fetch_array($data1)){
                                    $item_id =$d1['id_stock'];
                                    $item = mysqli_query($koneksi, "select * from gudang  where id_stock ='$item_id'");
                                    $s = mysqli_fetch_array($item);
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $s['nama_item'] ?></td>
                                        <td><?php echo $d1['quantity'] ?></td>
                                        <td><?php echo $d1['harga_unit'] ?></td>
                                        <td><?php echo $d1['sub_total'] ?></td>
                                    </tr>
                                </tbody>
                                <?php 
                                    }
                                ?>
                            </table>
                        </div>
                        <div class="input__box">
                            <label>Total</label>
                            <label><?php echo $d['total_harga'] ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>