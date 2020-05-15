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
                        <th>Deskripsi</th>
                        <th>Tanggal Order</th>
                        <th>Tanggal kirim</th>
                        <th>Total</th>
                        <th>Status order</th>
                    </tr>
                </thead>
                <?php
                include '../func/koneksi.php';
                $data = mysqli_query($koneksi, "select * from order_list INNER JOIN member ON order_list.id_member=member.id_member INNER JOIN status_trans ON order_list.id_status_order=status_trans.id_status_trans");
                while($d = mysqli_fetch_array($data)){
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $d['order_num'] ?></td>
                        <td><?php echo $d['name'] ?></td>
                        <td><?php echo $d['deskripsi'] ?></td>
                        <td><?php echo $d['tanggal_order'] ?></td>
                        <td><?php echo $d['tanggal_kirim'] ?></td>
                        <td><?php echo $d['total_harga'] ?></td>
                        <td><?php echo $d['nama_status_trans'] ?></td>
                    </tr>
                </tbody>
                <?php 
                }
            ?>
            </table>
        </div>
    </div>
</section>