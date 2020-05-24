<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">History</h2>
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
                        <th>Nomor Resi</th>
                        <th>Nomor order</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Total</th>
                        <th>Status Pembayaran</th>
                    </tr>
                </thead>
                <?php
                include '../func/koneksi.php';
                $member = $_SESSION['id_member'];
                $data = mysqli_query($koneksi, "select * from histori_trans where id_member='$member'");
                while($d = mysqli_fetch_array($data)){
                    $resi_id = $d['id_resi'];
                    $resi = mysqli_query($koneksi, "select * from resi where id_resi='$resi_id'");
                    $res = mysqli_fetch_array($resi);
                    $order_id = $res['id_order'];
                    $order = mysqli_query($koneksi, "select * from order_list where id_order='$order_id'");
                    $or = mysqli_fetch_array($order);
                    $status_trans_id = $res['id_status_trans'];
                    $trans = mysqli_query($koneksi, "select * from status_trans where id_status_trans='$status_trans_id'");
                    $tr = mysqli_fetch_array($trans);
                    $status_kirim_id = $res['id_status_kirim'];
                    $kirim = mysqli_query($koneksi, "select * from status_kirim where id_status_kirim='$status_kirim_id'");
                    $ki = mysqli_fetch_array($kirim);
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $res['nomor_resi']; ?></td>
                        <td><a class="text-primary" href="index.php?page=order_detail&id_order=<?php echo $or['id_order']; ?>"><?php echo $or['order_num']; ?></a></td>
                        <td><?php echo $res['tanggal_trans']; ?></td>
                        <td><?php echo $res['total_harga']; ?></td>
                        <td><?php echo $tr['nama_status_trans']; ?></td>
                    </tr>
                </tbody>
                <?php 
                } //}
            ?>
            </table>
        </div>
    </div>
</section>