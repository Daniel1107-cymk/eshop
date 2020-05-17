<?php
include '../func/koneksi.php';
$page = $_GET['page'];
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from order_list where id_order='$id'");
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
                    <form method="POST" action="../func/edit_order_qurey.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $d['id_order']; ?>">
                        <div class="account__form">
                            <div class="input__box">
                                <label>Member<span>*</span></label>
                                <label></label>
                                <?php
                                    $id_mem=$d['id_member'];
                                    $member = mysqli_query($koneksi, "select * from member where id_member='$id_mem'");
                                    while($m = mysqli_fetch_array($member)){
                                        echo $m['nama'];
                                    }
                                ?>
                            </div>
                            <div class="input__box">
                                <label>Deskripsi<span>*</span></label>
                                <input type="text" name="deskripsi" value='<?php echo $d['deskripsi']; ?>'>
                                
                            </div>
                         
                            <div class="input__box">
                                <label>Tanggal Order<span>*</span></label>
                                <input type="date" name="order_date" value='<?php echo $d['tanggal_order']; ?>'>
                            </div>
                            <div class="input__box">
                                <label>Tanggal kirim</label>
                                <input type="date" name="send_date" value='<?php echo $d['tanggal_kirim']; ?>' >
                            </div>
                            <div class="input__box">
                                <table class="table table-hover table-striped table-valign-middle">
                                    <thead>
                                        <tr>
                                            <th>Order Number</th>
                                            <th>Member</th>
                                            <th>Item</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $data1 = mysqli_query($koneksi, "select * from cart INNER JOIN member ON cart.id_member=member.id_member INNER JOIN status_order ON cart.id_status_order=status_order.id_status_order INNER JOIN gudang ON cart.id_stock=gudang.id_stock where id_order ='$id' ");
                                    while($d1 = mysqli_fetch_array($data1)){
                                    
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php if ($d){ echo $d['order_num'];} ?></td>
                                            <td><?php echo $d1['nama'] ?></td>
                                            <td><?php echo $d1['nama_item'] ?></td>
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
                            <div class="form__btn">
                                <button type="submit" value="submit">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>