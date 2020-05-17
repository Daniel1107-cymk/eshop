<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Resi</h2>
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
                        <th>Member</th>
                        <th>Order</th>
                        <th>Total</th>
                        <th>Status Kirim</th>
                    </tr>
                </thead>
                <?php
                include '../func/koneksi.php';
                $data = mysqli_query($koneksi, "select * from resi INNER JOIN member ON resi.id_member=member.id_member INNER JOIN order_list ON resi.id_order=order_list.id_order INNER JOIN status_kirim ON resi.id_status_kirim=status_kirim.id_status_kirim");
                while($d = mysqli_fetch_array($data)){
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $d['nomor_resi'] ?></td>
                        <td><?php echo $d['nama'] ?></td>
                        <td><?php echo $d['order_num'] ?></td>
                        <td><?php echo $d['total_harga'] ?></td>
                        <td><?php echo $d['nama_status_kirim'] ?></td>
                    </tr>
                </tbody>
                <?php 
                }
            ?>
            </table>
        </div>
    </div>
</section>