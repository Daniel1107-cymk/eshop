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
                    <h3 class="account__title">Add Order</h3>
                    <form method="POST" action="../func/add_order_qurey.php" enctype="multipart/form-data">
                        <div class="account__form">
                            <div class="input__box">
                                <label>Member<span>*</span></label>
                                <select name="member">
                                <?php
                                    include '../func/koneksi.php';
                                    $member = mysqli_query($koneksi, "select * from member");
                                    while($m = mysqli_fetch_array($member)){
                                        echo "<option value=\"{$m['id_member']}\">".$m['nama']."</option>";
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="input__box">
                                <label>Deskripsi<span>*</span></label>
                                <input type="text" name="deskripsi">
                                
                            </div>
                         
                            <div class="input__box">
                                <label>Tanggal Order<span>*</span></label>
                                <input type="date" name="order_date">
                            </div>
                            <div class="input__box">
                                <label>Tanggal kirim</label>
                                <input type="date" name="send_date"  >
                            </div>
                            <div class="form__btn">
                                <button type="submit" value="submit">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>