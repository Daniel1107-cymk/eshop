<?php
    include '../func/koneksi.php';
    $id_stock = $_GET['id_stock'];
    $id_cart = $_GET['cart_id'];
    $cart = mysqli_query($koneksi, "select * from cart where id_cart='$id_cart'");
	$c = mysqli_fetch_array($cart);
    $data = mysqli_query($koneksi, "select * from gudang where id_stock='$id_stock'");
	$d = mysqli_fetch_array($data);
	$member= $_SESSION['id_member'];
?>
<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
	<div class="ht__bradcaump__area bg-image--4">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="bradcaump__inner text-center">
						<h2 class="bradcaump-title">Shop Single</h2>
						<nav class="bradcaump-content">
							<a class="breadcrumb_item" href="index.php">Home</a>
							<span class="brd-separetor">/</span>
							<span class="breadcrumb_item active">Shop Single</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Bradcaump area -->
	<!-- Start main Content -->
	<div class="maincontent bg--white pt--80 pb--55">
		<div class="container">
			<div class="row">
				<form method="POST" action="../func/edit_cart_user.php">
					<div class="col-lg-12 col-12">
						<div class="wn__single__product">
							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="wn__fotorama__wrapper">
										<div class="fotorama wn__fotorama__action" data-nav="thumbs">
											<a href="1.jpg"><img src="../images/produk/<?php echo $d['gambar'] ?>"
													alt=""></a>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="product__info__main">
										<h1><?php echo $d['nama_item']?></h1>
										<div class="price-box">
											<span>Rp.<?php echo $d['harga_unit'] ?></span>
										</div>
										<div class="product__overview">
											<p><?php echo $d['deskripsi']; ?></p>
										</div>
										<div class="box-tocart d-flex">
											<span>Qty</span>
											<input name="product" type="hidden" value="<?php echo $id_stock; ?>" />
											<input name="id" type="hidden" value="<?php echo $id_cart; ?>" />
											<input id="qty" class="input-text qty" name="qty" min="1" value="<?php echo $c['quantity']; ?>"
												title="Qty" type="number">
											<div class="addtocart__actions">
												<button class="tocart" type="submit" title="Add to Cart">Save</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>

				
			</div>
		</div>
	</div>
</div>
<!-- End main Content -->
<!-- Start Search Popup -->
<div class="box-search-content search_active block-bg close__top">
	<form id="search_mini_form--2" class="minisearch" action="#">
		<div class="field__search">
			<input type="text" placeholder="Search entire store here...">
			<div class="action">
				<a href="#"><i class="zmdi zmdi-search"></i></a>
			</div>
		</div>
	</form>
	<div class="close__wrap">
		<span>close</span>
	</div>
</div>


</div>