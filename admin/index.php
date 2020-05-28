<?php
	session_start();
	$username = $_SESSION['username'];
?>
<?php
include("../lib/header_user.php")
?>
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
<?php
include("../lib/footer_user.php")
?>