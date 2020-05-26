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
						<span class="breadcrumb_item active">All Male Shoes</span>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- Start BEst Seller Area -->
<section class="wn__product__area brown--color pt--80  pb--30">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section__title text-center">
					<h2 class="title__be--2">New <span class="color--theme">Sneakers</span></h2>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
						lebmid alteration in some ledmid form</p>
				</div>
			</div>
		</div>
		<!-- Start Single Tab Content -->
		<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
			<!-- Start Single Product -->
			<?php
				include '../func/koneksi.php';
				$data = mysqli_query($koneksi, "select * from gudang where id_kategori=1 and id_tipe_item=1");
				$id="";
				while($d = mysqli_fetch_array($data)){
			?>
			<div class="product product__style--3">
				<div class="col-lg-3 col-md-4 col-sm-6 col-12">
					<div class="product__thumb">
						<a class="first__img" href="single-product.html"><img
								src="../images/produk/<?php echo $d['gambar'] ?>" alt="product image"></a>
						<!-- <div class="hot__box">
							<span class="hot-label">BEST SALLER</span>
						</div> -->
					</div>
					<div class="product__content content--center">
						<h4><a href="single-product.html"><?php echo $d['nama_item']; ?></a></h4>
						<ul class="prize d-flex">
							<li>Rp.<?php echo $d['harga_unit'] ?></li>
						</ul>
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="wishlist.html"><i
												class="bi bi-shopping-cart-full"></i></a></li>
									<li><a data-toggle="modal" title="Quick View"
											class="quickview modal-view detail-link" href="#productmodal"><i
												class="bi bi-search"></i></a></li>
								</ul>
							</div>
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
	<!-- End Single Tab Content -->
	</div>
</section>
<!-- Start BEst Seller Area -->
<!-- Start BEst Seller Area -->
<section class="wn__product__area brown--color pt--80  pb--30">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section__title text-center">
					<h2 class="title__be--2">New <span class="color--theme">Shoes</span></h2>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
						lebmid alteration in some ledmid form</p>
				</div>
			</div>
		</div>
		<!-- Start Single Tab Content -->
		<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
			<!-- Start Single Product -->
			<?php
				include '../func/koneksi.php';
				$data = mysqli_query($koneksi, "select * from gudang where id_kategori=1 and id_tipe_item=1");
				$id="";
				while($d = mysqli_fetch_array($data)){
			?>
			<div class="product product__style--3">
				<div class="col-lg-3 col-md-4 col-sm-6 col-12">
					<div class="product__thumb">
						<a class="first__img" href="single-product.html"><img
								src="../images/produk/<?php echo $d['gambar'] ?>" alt="product image"></a>
						<!-- <div class="hot__box">
							<span class="hot-label">BEST SALLER</span>
						</div> -->
					</div>
					<div class="product__content content--center">
						<h4><a href="single-product.html"><?php echo $d['nama_item']; ?></a></h4>
						<ul class="prize d-flex">
							<li>Rp.<?php echo $d['harga_unit'] ?></li>
						</ul>
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="wishlist.html"><i
												class="bi bi-shopping-cart-full"></i></a></li>
									<li><a data-toggle="modal" title="Quick View"
											class="quickview modal-view detail-link" href="#productmodal"><i
												class="bi bi-search"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
				}
			?>
			<!-- Start Single Product -->
		</div>
		<!-- End Single Tab Content -->
	</div>
</section>
<!-- Start BEst Seller Area -->
<!-- Start BEst Seller Area -->
<section class="wn__product__area brown--color pt--80  pb--30">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section__title text-center">
					<h2 class="title__be--2">New <span class="color--theme">Sports Shoes</span></h2>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
						lebmid alteration in some ledmid form</p>
				</div>
			</div>
		</div>
		<!-- Start Single Tab Content -->
		<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
			<!-- Start Single Product -->
			<?php
				include '../func/koneksi.php';
				$data = mysqli_query($koneksi, "select * from gudang where id_kategori=1 and id_tipe_item=1");
				$id="";
				while($d = mysqli_fetch_array($data)){
			?>
			<div class="product product__style--3">
				<div class="col-lg-3 col-md-4 col-sm-6 col-12">
					<div class="product__thumb">
						<a class="first__img" href="single-product.html"><img
								src="../images/produk/<?php echo $d['gambar'] ?>" alt="product image"></a>
						<!-- <div class="hot__box">
							<span class="hot-label">BEST SALLER</span>
						</div> -->
					</div>
					<div class="product__content content--center">
						<h4><a href="single-product.html"><?php echo $d['nama_item'] ?></a></h4>
						<ul class="prize d-flex">
							<li>Rp.<?php echo $d['harga_unit'] ?></li>
						</ul>
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="wishlist.html"><i
												class="bi bi-shopping-cart-full"></i></a></li>
									<li><a data-toggle="modal" title="Quick View"
											class="quickview modal-view detail-link" href="#productmodal"><i
												class="bi bi-search"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
				}
			?>
			<!-- Start Single Product -->
		</div>
		<!-- End Single Tab Content -->
	</div>
</section>
<!-- Start BEst Seller Area -->
<?php
include("../lib/footer_folder.php")
?>