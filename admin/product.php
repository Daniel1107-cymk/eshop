<?php
    include '../func/koneksi.php';
    $id_stock = $_GET['id_stock'];
    $id_kategori = $_GET['id_kategori'];
    $data = mysqli_query($koneksi, "select * from gudang where id_stock='$id_stock'");
	$d = mysqli_fetch_array($data);
	$member= $_SESSION['id_member'];
?>
<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
	<!-- Start Search Popup -->
	<!-- <div class="box-search-content search_active block-bg close__top">
		<form id="search_mini_form" class="minisearch" action="#">
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
	</div> -->
	<!-- End Search Popup -->
	<!-- Start Bradcaump area -->
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
				<form method="POST" action="../func/add_cart_user.php">
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
											<input name="member" type="hidden" value="<?php echo $member; ?>" />
											<input name="id" type="hidden" value="<?php echo $d['id_stock']; ?>" />
											<input id="qty" class="input-text qty" name="qty" min="1" value="1"
												title="Qty" type="number">
											<div class="addtocart__actions">
												<button class="tocart" type="submit" title="Add to Cart">Add to
													Cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>

				<div class="wn__related__product pt--80 pb--50">
					<div class="section__title text-center">
						<h2 class="title__be--2">Related Products</h2>
					</div>
					<div class="row mt--60">
						<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
							<!-- Start Single Product -->
							<?php
                                        include '../func/koneksi.php';
                                        $data = mysqli_query($koneksi, "select * from gudang where id_kategori='$id_kategori'");
                                        while($d = mysqli_fetch_array($data)){
                                    ?>
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img"
										href="index.php?page=product&id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori']?>"><img
											src="../images/produk/<?php echo $d['gambar'] ?>" alt="product image"></a>
								</div>
								<div class="product__content content--center">
									<h4><a href="single-product.html"></a></h4>
									<ul class="prize d-flex">
										<li>Rp.<?php echo $d['harga_unit'] ?></li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart"
														href="index.php?page=product&id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori']?>"><i
															class="bi bi-shopping-bag4"></i></a></li>
												<!-- <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li> -->
												<!-- <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li> -->
											</ul>
										</div>
									</div>
								</div>
							</div>
							<?php
                                        }
                                    ?>
							<!-- Start Single Product -->
						</div>
					</div>
				</div>
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