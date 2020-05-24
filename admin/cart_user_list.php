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
        <div class="card-body table-responsive p-0">
        <table class="table table-hover table-striped table-valign-middle">
                <thead>
                    <tr>
                        <!-- <th>Order Number</th> -->
                        <!-- <th>Member</th> -->
                        <th>Item</th>
                        <th>Gambar</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Sub Total</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?php
                include '../func/koneksi.php';
                $d1 = FALSE;
                $member =  $_SESSION['id_member'];
                $data = mysqli_query($koneksi, "select * from cart where id_member='$member' and id_order is NULL ");
                while($d = mysqli_fetch_array($data)){
                if ($d['id_order']){
                    $order_id =$d['id_order'];
                    $data1 = mysqli_query($koneksi, "select * from order_list where id_order='$order_id'");
                    $d1 = mysqli_fetch_array($data1);
                }
                $stock_id =$d['id_stock'];
                $product = mysqli_query($koneksi, "select * from gudang where id_stock='$stock_id'");
                $p = mysqli_fetch_array($product);
            ?>
                <tbody>
                    <tr>
                        <!-- <td><?php if ($d1){ echo $d1['order_num'];} ?></td> -->
                        <!-- <td><?php echo $d['nama'] ?></td> -->
                        <td><?php echo $p['nama_item'] ?></td>
                        <td><img src="../images/produk/<?php echo $p['gambar']; ?>" style="width: 340px" alt=""></td>
                        <td><?php echo $d['quantity'] ?></td>
                        <td><?php echo $d['harga_unit'] ?></td>
                        <td><?php echo $d['sub_total'] ?></td>
                        <!-- <td><a class="btn btn-info" href="admin_page.php?page=editcart&id=<?php echo $d['id_cart'];?>?">EDIT</a></td> -->
                        <td><a class="btn btn-info" href="index.php?page=edit_product&cart_id=<?php echo $d['id_cart']; ?>&id_stock=<?php echo $d['id_stock'];?>">Change Qty</a></td>
                        <td><a class="btn btn-danger" href="index.php?page=delete_cart&cart_id=<?php echo $d['id_cart']; ?>">Delete</a></td>
                    </tr>
                </tbody>
                <?php 
                }
            ?>
            </table>
            <form method="POST" action="../func/checkout_user.php">
                <input name="member" type="hidden" value="<?php echo $member; ?>" />
                <button class="btn btn-success" type="submit" title="Add to Cart">Check out</button>
            </form>
        </div>
    </div>
</section>