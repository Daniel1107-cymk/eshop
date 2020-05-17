<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Invoice</h2>
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
                        <th>Invoice Number</th>
                        <th>Member</th>
                        <th>Order Number</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <?php
                include '../func/koneksi.php';
                $data = mysqli_query($koneksi, "select * from invoice INNER JOIN member ON invoice.id_member=member.id_member INNER JOIN order_list ON invoice.id_order=order_list.id_order");
                while($d = mysqli_fetch_array($data)){
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $d['kode_invoice'] ?></td>
                        <td><?php echo $d['nama'] ?></td>
                        <td><?php echo $d['order_num'] ?></td>
                        <td><?php echo $d['tanggal'] ?></td>
                        <td><?php echo $d['total_harga'] ?></td>
                    </tr>
                </tbody>
                <?php 
                }
            ?>
            </table>
        </div>
    </div>
</section>