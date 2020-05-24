<!-- Start Slider area -->
<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
	<!-- Start Single Slide -->
	<div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="slider__content">
						<div class="contentbox">
							<h2>Buy <span>your </span></h2>
							<h2>favourite <span>Book </span></h2>
							<h2>from <span>Here </span></h2>
							<a class="shopbtn" href="#">shop now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Single Slide -->
	<!-- Start Single Slide -->
	<div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="slider__content">
						<div class="contentbox">
							<h2>Buy <span>your </span></h2>
							<h2>favourite <span>Book </span></h2>
							<h2>from <span>Here </span></h2>
							<a class="shopbtn" href="#">shop now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Single Slide -->
</div>
<!-- End Slider area -->
<!-- Start BEst Seller Area new product-->
<section class="wn__product__area brown--color pt--80  pb--30">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section__title text-center">
					<h2 class="title__be--2">New <span class="color--theme">Products</span></h2>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
						lebmid alteration in some ledmid form</p>
				</div>
			</div>
		</div>
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					<!-- Start Single Product -->
					<?php
										include '../func/koneksi.php';
										$data = mysqli_query($koneksi, "select * from gudang where id_kategori=2");
										$id="";
										while($d = mysqli_fetch_array($data)){
									?>
					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
							<a class="first__img" href="index.php?page=product&id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori']?>"><img
									src="../images/produk/<?php echo $d['gambar']; ?>" style="width: 340px" alt=""></a>
						</div>
						<div class="product__content content--center">
							<h4><a href="index.php?page=product&id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori']?>"><?php echo $d['nama_item']; ?></a></h4>
							<ul class="prize d-flex">
								<li>Rp.<?php echo $d['harga_unit'] ?></li>
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">

										<li><a class="cart"
												href="index.php?page=product&id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori']?>"><i
													class="bi bi-shopping-bag4"></i></a></li>
										<!-- <li><a class="cart" href="index.php?page=add_cart_user&id=<?php echo $d['id_stock'] ?>?>"><i class="bi bi-shopping-bag4"></i></a></li> -->
										<li><a class="cart" href="login_page.php"><i
													class="bi bi-shopping-cart-full"></i></a></li>

										<li><a data-toggle="modal" title="Quick View"
												class="quickview modal-view detail-link" href="#productmodal"><i
													class="bi bi-search"></i></a></li>

									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php 
					}
				?>
					<!-- End Single Product -->
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
	</div>
	<!-- End Single Tab Content -->
	</div>
</section>
<!-- Start BEst Seller Area -->

<!-- Start NEwsletter Area -->
<section class="wn__newsletter__area bg-image--2">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
				<div class="section__title text-center">
					<h2>Stay With Us</h2>
				</div>
				<div class="newsletter__block text-center">
					<p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks
						and exclusive offers.</p>
					<form action="#">
						<div class="newsletter__box">
							<input type="email" placeholder="Enter your e-mail">
							<button>Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End NEwsletter Area -->

<!-- Start Best Seller Area all products -->
<section class="wn__bestseller__area bg--white pt--80  pb--30">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section__title text-center">
					<h2 class="title__be--2">All <span class="color--theme">Products</span></h2>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
						lebmid alteration in some ledmid form</p>
				</div>
			</div>
		</div>
		<div class="row mt--50">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<div class="product__nav nav justify-content-center" role="tablist">
					<a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
					<a class="nav-item nav-link" data-toggle="tab" href="#nav-male" role="tab">MALE</a>
					<a class="nav-item nav-link" data-toggle="tab" href="#nav-female" role="tab">FEMALE</a>
				</div>
			</div>
		</div>
		<div class="tab__container mt--60">
			<!-- Start Single Tab Content -->
			<div class="shop-grid tab-pane fade show active" id="nav-all" role="tabpanel">
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
							<a class="first__img" href="index.php?page=product&id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori']?>"><img
									src="../images/produk/<?php echo $d['gambar']; ?>" style="width: 340px" alt=""></a>
						</div>
						<div class="product__content content--center">
							<h4><a href="index.php?page=product&id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori']?>"><?php echo $d['nama_item']; ?></a></h4>
							<ul class="prize d-flex">
								<li>Rp.<?php echo $d['harga_unit'] ?></li>
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li><a class="cart"
												href="product.php?id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori'] ?>"><i
													class="bi bi-shopping-bag4"></i></a>
										</li>
										<li><a class="cart" href="login_page.php"><i
													class="bi bi-shopping-cart-full"></i></a></li>

										<li><a data-toggle="modal" title="Quick View"
												class="quickview modal-view detail-link" href="#productmodal"><i
													class="bi bi-search"></i></a></li>

									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php 
						}
					?>
					<!-- End Single Product -->
				</div>
			</div>
			<!-- End Single Tab Content -->
			<!-- Start Single Tab Content -->
			<div class="shop-grid tab-pane fade " id="nav-male" role="tabpanel">
				<div class="row">
					<!-- Start Single Product -->
					<?php
						include '../func/koneksi.php';
						$data = mysqli_query($koneksi, "select * from gudang where id_kategori=1");
						$id="";
						while($d = mysqli_fetch_array($data)){
					?>
					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
							<a class="first__img" href="index.php?page=product&id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori']?>"><img
									src="../images/produk/<?php echo $d['gambar']; ?>" style="width: 340px" alt=""></a>
						</div>
						<div class="product__content content--center">
							<h4><a href="index.php?page=product&id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori']?>"><?php echo $d['nama_item']; ?></a></h4>
							<ul class="prize d-flex">
								<li>Rp.<?php echo $d['harga_unit'] ?></li>
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li><a class="cart"
												href="product.php?id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori'] ?>"><i
													class="bi bi-shopping-bag4"></i></a>
										</li>
										<li><a class="cart" href="login_page.php"><i
													class="bi bi-shopping-cart-full"></i></a></li>

										<li><a data-toggle="modal" title="Quick View"
												class="quickview modal-view detail-link" href="#productmodal"><i
													class="bi bi-search"></i></a></li>

									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php 
						}
						?>
					<!-- End Single Product -->
				</div>
			</div>
			<!-- End Single Tab Content -->
			<!-- Start Single Tab Content -->
			<div class="shop-grid tab-pane fade " id="nav-female" role="tabpanel">
				<div class="row">
					<!-- Start Single Product -->
					<?php
										include '../func/koneksi.php';
										$data = mysqli_query($koneksi, "select * from gudang where id_kategori=2");
										$id="";
										while($d = mysqli_fetch_array($data)){
									?>
					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
							<a class="first__img" href="index.php?page=product&id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori']?>"><img
									src="../images/produk/<?php echo $d['gambar']; ?>" style="width: 340px" alt=""></a>
						</div>
						<div class="product__content content--center">
							<h4><a href="index.php?page=product&id_stock=<?php echo $d['id_stock'] ?>&id_kategori=<?php echo $d['id_kategori']?>"><?php echo $d['nama_item']; ?></a></h4>
							<ul class="prize d-flex">
								<li>Rp.<?php echo $d['harga_unit'] ?></li>
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
										</li>
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
					<?php 
						}
						?>
					<!-- End Single Product -->
				</div>
			</div>
			<!-- End Single Tab Content -->
		</div>
	</div>
</section>