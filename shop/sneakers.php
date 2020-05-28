<?php
include("../lib/header_folder.php")
?>
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title">Shop Grid</h2>
					<nav class="bradcaump-content">
						<a class="breadcrumb_item" href="http://localhost/ardy/index.php">Home</a>
						<span class="brd-separetor">/</span>
						<span class="breadcrumb_item active">All Sneakers</span>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- Start Single Product -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
			</div>
		</div>
	</div>
	<div class="tab__container">
		<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
			<div class="row">
				<!-- Start Single Product -->
				<?php
					include '../func/koneksi.php';
					$data = mysqli_query($koneksi, "select * from gudang");
					$id="";
					while($d = mysqli_fetch_array($data)){
				?>
				<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="product__thumb">
						<a class="first__img" href="single-product.html"><img
								src="../images/produk/<?php echo $d['gambar']; ?>" style="width: 340px" alt=""></a>
					</div>
					<div class="product__content content--center">
						<h4><a href="single-product.html"><?php echo $d['nama_item']; ?></a></h4>
						<ul class="prize d-flex">
							<li>Rp.<?php echo $d['harga_unit'] ?></li>
						</ul>
					</div>
				</div>
				<?php 
					}
				?>
				<!-- End Single Product -->
			</div>
			<ul class="wn__pagination">
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
			</ul>
			<br><br>
		</div>
	</div>
	<!-- QUICKVIEW PRODUCT -->
	<div id="quickview-wrapper">
		<!-- Modal -->

		<div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal__container" role="document">
				<div class="modal-content">
					<div class="modal-header modal__header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="modal-product">
							<!-- Start product images -->
							<div class="product-images">
								<div class="main-image images">
									<img src="../images/produk/<?php echo $d1['gambar'] ?>" alt="">
								</div>
							</div>
							<!-- end product images -->
							<div class="product-info">
								<h1>Simple Fabric Bags</h1>
								<div class="rating__and__review">
									<ul class="rating">
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
									</ul>
									<div class="review">
										<a href="#">4 customer reviews</a>
									</div>
								</div>
								<div class="price-box-3">
									<div class="s-price-box">
										<span class="new-price">$17.20</span>
										<span class="old-price">$45.00</span>
									</div>
								</div>
								<div class="quick-desc">
									Designed for simplicity and made from high quality materials. Its sleek geometry and
									material combinations creates a modern look.
								</div>
								<div class="select__color">
									<h2>Select color</h2>
									<ul class="color__list">
										<li class="red"><a title="Red" href="#">Red</a></li>
										<li class="gold"><a title="Gold" href="#">Gold</a></li>
										<li class="orange"><a title="Orange" href="#">Orange</a></li>
										<li class="orange"><a title="Orange" href="#">Orange</a></li>
									</ul>
								</div>
								<div class="select__size">
									<h2>Select size</h2>
									<ul class="color__list">
										<li class="l__size"><a title="L" href="#">L</a></li>
										<li class="m__size"><a title="M" href="#">M</a></li>
										<li class="s__size"><a title="S" href="#">S</a></li>
										<li class="xl__size"><a title="XL" href="#">XL</a></li>
										<li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
									</ul>
								</div>
								<div class="social-sharing">
									<div class="widget widget_socialsharing_widget">
										<h3 class="widget-title-modal">Share this product</h3>
										<ul class="social__net social__net--2 d-flex justify-content-start">
											<li class="facebook"><a href="#" class="rss social-icon"><i
														class="zmdi zmdi-rss"></i></a></li>
											<li class="linkedin"><a href="#" class="linkedin social-icon"><i
														class="zmdi zmdi-linkedin"></i></a></li>
											<li class="pinterest"><a href="#" class="pinterest social-icon"><i
														class="zmdi zmdi-pinterest"></i></a></li>
											<li class="tumblr"><a href="#" class="tumblr social-icon"><i
														class="zmdi zmdi-tumblr"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="addtocart-btn">
									<a href="#">Add to cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END QUICKVIEW PRODUCT -->
</div>
<!-- End Shop Page -->

<?php
include("../lib/footer_folder.php")
?>