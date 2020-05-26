<?php
	session_start();
	$username = $_SESSION['username'];
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/plugins.css">
	<link rel="stylesheet" href="../style.css">

	<!-- Cusom css -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="index.php">
								<img src="../images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="index.php?page=home">Home</a></li>
								<li class="drop"><a href="#">Shop</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Categories</li>
											<li><a href="#">Sneakers</a></li>
											<li><a href="#">Sandals</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Male</li>
											<li><a href="#">All Shoes</a></li>
											<li><a href="#">Lifestyles</a></li>
											<li><a href="#">Sports</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Female</li>
											<li><a href="#">All Shoes</a></li>
											<li><a href="#">Lifestyles</a></li>
											<li><a href="#">Sports</a></li>
										</ul>
									</div>
								</li>
								<li class="drop with--one--item"><a href="index.php?page=user_order_list">Orderlist</a></li>
								<li class="drop with--one--item"><a href="index.php?page=resi_user">Resi</a></li>
								<li class="drop with--one--item"><a href="index.php?page=history_user">History Transaksi</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="wishlist"><a class="search__active" href="#"></a></li>
							<li class="shopcart"><a href="index.php?page=cart_user_list"></a>
								<!-- Start Shopping Cart -->
								<!-- End Shopping Cart -->
							</li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span><?php echo $username ?> Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="logout.php?logout">Logout</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="index.php">Home</a></li>
								<li><a href="#">Categories</a>
									<ul>
										<li><a href="#">Sneakers</a></li>
										<li><a href="#">Sandals</a></li>
									</ul>
								</li>
								<li><a href="#">Male</a>
									<ul>
										<li><a href="index.php?page=male">All Shoes</a></li>
										<li><a href="#">Lifestyles</a></li>
										<li><a href="#">Sports</a></li>
									</ul>
								</li>
								<li><a href="#">Female</a>
									<ul>
										<li><a href="#">All Shoes</a></li>
										<li><a href="#">Lifestyles</a></li>
										<li><a href="#">Sports</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
				<div class="mobile-menu d-block d-lg-none">
				</div>
				<!-- Mobile Menu -->
			</div>
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
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
		</div>
		<!-- End Search Popup -->
		<?php
			if(isset($_GET['page'])){
				$page = $_GET['page'];
				switch($page){
					case 'home':
						include 'home.php';
					break;
					case 'male':
						include 'shop/male.php';
					break;
					case 'home':
						include 'home.php';
					break;
					case 'home':
						include 'home.php';
					break;
					case 'home':
						include 'home.php';
					break;
					case 'product':
						include 'product.php';
					break;
					case 'edit_product':
						include 'edit_product.php';
					break;
					case 'delete_cart':
						include '../func/delete_cart.php';
					break;
					case 'cart_user_list':
						include 'cart_user_list.php';
					break;
					case 'user_order_list':
						include 'user_order_list.php';
					break;
					case 'resi_user':
						include 'resi_user.php';
					break;
					case 'history_user':
						include 'history_user.php';
					break;
					case 'order_detail':
						include 'order_detail.php';
					break;
				}
			}
			else{
				include 'home.php';
			}
		?>

		<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index.php">
										<img src="../images/logo/3.png" alt="logo">
									</a>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority
										have suffered duskam alteration variations of passages</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> <a
											href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights
										Reserved</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="payment text-right">
								<img src="images/icons/payment.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //Footer Area -->
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="../js/vendor/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>
	<script src="../js/active.js"></script>

</body>

</html>