<?php 
	session_start();
	$username = $_SESSION['username']
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Page</title>
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
	<link rel="stylesheet" href="../css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="index.php">
								<img src="images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="admin_page.php?page=admin_home">Home</a></li>
								<li class="drop with--one--item"><a href="admin_page.php?page=admin_gudang">Stock</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li><a href="admin_page.php?page=tambah_item">New Item</a></li>
										</ul>
										<ul class="item item03">
											<li><a href="admin_page.php?page=tambah_stock">Tambah Stock</a></li>
										</ul>
										<ul class="item item03">
											<li><a href="admin_page.php?page=edit_item">Edit Item</a></li>
										</ul>
									</div>
								</li>
								<li class="drop with--one--item"><a href="admin_page.php?page=order_list">Order</a>
								<div class="megamenu mega03">
									<ul class="item item03">
										<li><a href="admin_page.php?page=order_list">Order List</a></li>
									</ul>
									<ul class="item item03">
										<li><a href="admin_page.php?page=cart_list">Cart List</a></li>
									</ul>
									<ul class="item item03">
										<li><a href="admin_page.php?page=add_cart">Add Cart List</a></li>
									</ul>
									<ul class="item item03">
										<li><a href="admin_page.php?page=edit_cart">Edit Cart List</a></li>
									</ul>
								</div>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span><?php echo $username ?> Account</span>
											</strong>
										</div>
									</div>
								</div>
							</li>
							<li><a href="../func/logout.php">Logout</a></li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="admin_page.php?page=admin_home">Home</a></li>
								<li><a href="admin_page.php?page=admin_gudang">Stock</a></li>
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
		<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
				switch($page){
					case 'admin_home':
						include 'admin_home.php';
					break;
					case 'admin_gudang':
						include 'admin_stock.php';
					break;
					case 'tambah_item':
						include 'tambah_item.php';
					break;
					case 'editgudang':
						include 'editgudang.php';
					break;
					case 'tambah_stock':
						include 'tambah_stock.php';
					break;
					case 'edit_item':
						include 'edit_item.php';
					break;
				}
			}
			else{
				include 'admin_home.php';
			}
		?>
	</div>

	<!-- JS Files -->
	<script src="../js/vendor/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>
	<script src="../js/active.js"></script>
</body>

</html>