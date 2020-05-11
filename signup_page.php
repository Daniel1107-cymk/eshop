<?php
include("lib/header.php")
?>
<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area bg-image--6">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">My Account</h2>
							<nav class="bradcaump-content">
								<a class="breadcrumb_item" href="index.html">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb_item active">My Account</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Bradcaump area -->
		<!-- Start My Account Area -->
		<section class="my_account_area pt--80 pb--55 bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8">
						<div class="my__account__wrapper">
							<h3 class="account__title">Sign Up</h3>
							<form method="POST" action="func/sign_up.php">
								<div class="account__form">
									<div class="input__box">
										<label>Username<span>*</span></label>
										<input type="text" name="username">
									</div>
									<div class="input__box">
										<label>Password<span>*</span></label>
										<input type="password" name="password">
									</div>
									<div class="input__box">
										<label>Nama Lengkap<span>*</span></label>
										<input type="text" name="nama_lengkap">
									</div>
									<div class="input__box">
										<label>Tanggal Lahir<span>*</span></label>
										<input type="date" name="tanggal_lahir">
									</div>
									<div class="input__box">
										<label>Alamat<span>*</span></label>
										<input type="text" name="alamat">
									</div>
									<div class="input__box">
										<label>Email<span>*</span></label>
										<input type="email" name="email">
									</div>
									<div class="form__btn">
										<button type="submit" value="signup">Sign Up</button>	
									</div>
									<a class="forget_pass" href="login_page.php">Sign In</a>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-2"></div>
				</div>
			</div>
		</section>
		<!-- End My Account Area -->
		<?php
include("lib/footer.php")
?>