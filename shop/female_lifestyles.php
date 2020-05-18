<?php
include("../lib/header.php")
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
						<span class="breadcrumb_item active">All Man Lifestyles</span>
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
					$data = mysqli_query($koneksi, "select * from gudang where id_kategori=2");
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
		</div>
		<br><br>
	</div>
</div>
</div>
</div>
</div>
<!-- End Shop Page -->

<?php
include("../lib/footer.php")
?>