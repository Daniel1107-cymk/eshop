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
        <div class="card-body table-responsive p-0">
            
            <table class="table table-hover table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Order</th>
                        <th>Tanggal kirim</th>
                        <th>Total</th>
                        <th>Status order</th>
                        <th></th>
                    </tr>
                </thead>
                <?php
                include '../func/koneksi.php';
                $member = $_SESSION['id_member'];
                $data = mysqli_query($koneksi, "select * from order_list where id_member='$member'");
                while($d = mysqli_fetch_array($data)){
                    
                    $id_status= $d['id_status_order'];
                    $status = '';
                    if ($id_status == 1)
                    {
                        $status = mysqli_query($koneksi, "select * from status_order where id_status_order='$id_status'");
                        $s = mysqli_fetch_array($status);
                        $status = $s['nama_status_order'];
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $d['order_num']; ?></td>
                        <td><?php echo $d['deskripsi']; ?></td>
                        <td><?php echo $d['tanggal_order']; ?></td>
                        <td><?php echo $d['tanggal_kirim']; ?></td>
                        <td><?php echo $d['total_harga']; ?></td>
                        <td><?php echo $s['nama_status_order']; ?></td>
                        <td>
                            <!-- <a class="btn btn-success" href="../func/updatepayment.php?id=<?php echo $d['id_order'];?>">Payment</a> -->
                            <form method="POST" action="../func/payment_order_user.php">
                                <input name="id" type="hidden" value="<?php echo $d['id_order']; ?>" />
                                <button class="btn btn-success" type="submit" title="Add to Cart">Payment</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                <?php 
                }}
            ?>
            </table>
        </div>
    </div>
</section>