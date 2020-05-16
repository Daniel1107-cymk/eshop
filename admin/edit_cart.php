<?php
// include '../func/koneksi.php';
// $page = $_GET['page'];
// $id= $_GET['id'];
// $data = mysqli_query($koneksi,"select * from cart where id_stock='$id'");
// $d = mysqli_fetch_array($data)
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
        <div class="card-body table-responsive p-0">
        <table class="table table-hover table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Member</th>
                        <th>Item</th>
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
                $data = mysqli_query($koneksi, "select * from cart INNER JOIN member ON cart.id_member=member.id_member INNER JOIN status_order ON cart.id_status_order=status_order.id_status_order INNER JOIN gudang ON cart.id_stock=gudang.id_stock");
                while($d = mysqli_fetch_array($data)){
                if ($d['id_order']){
                    $order_id =$d['id_order'];
                    $data1 = mysqli_query($koneksi, "select * from order_list where id_order='$order_id'");
                    $d1 = mysqli_fetch_array($data1);
                }
            ?>
                <tbody>
                    <tr>
                        <td><?php if ($d1){ echo $d1['order_num'];} ?></td>
                        <td><?php echo $d['nama'] ?></td>
                        <td><?php echo $d['nama_item'] ?></td>
                        <td><?php echo $d['quantity'] ?></td>
                        <td><?php echo $d['harga_unit'] ?></td>
                        <td><?php echo $d['sub_total'] ?></td>
                        <td><a class="btn btn-info" href="admin_page.php?page=editcart&id=<?php echo $d['id_cart'];?>?">EDIT</a></td>
                        <td><a class="btn btn-danger" href="../func/deletecart.php?id=<?php echo $d['id_cart'];?>">DELETE</a></td>
                    </tr>
                    </tr>
                </tbody>
                <?php 
                }
            ?>
            </table>
        </div>
    </div>
</section>