<?php

include("partials/connect.php");

?>

<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over Rs 799
					</div>

					<div class="right-top-bar flex-w h-full">
						<?php
						if(!empty($_SESSION['email'])) {?>
						<a href="handler/customerlogout.php" class="flex-c-m p-lr-10 trans-04">
							Log Out
						</a>
						<?php }else{ ?>
						<a href="customerforms.php" class="flex-c-m p-lr-10 trans-04">
							Log In
						</a>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="index.php" class="logo">
						<p class="ltext-101 cl2 respon2">TechCiti Store</p>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
						    <li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>

							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">

						<?php
						if(!empty($_SESSION['cart'])){ 
							$qty=count($_SESSION['cart']);?>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" onclick="location.href='cart.php'" data-notify="<?php echo $qty ?>">
						<?php }else{ ?>
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" onclick="location.href='cart.php'" data-notify="0">
							<?php } ?>
								<i class="zmdi zmdi-shopping-cart"></i>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
			    <a href="index.php">
				  <p class="ltext-101 cl2 respon2">TechCiti Store</p>
				</a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">

				<?php
						if(!empty($_SESSION['cart'])){ 
							$qty=count($_SESSION['cart']);?>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" onclick="location.href='cart.php'" data-notify="<?php echo $qty ?>">
						<?php }else{ ?>
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" onclick="location.href='cart.php'" data-notify="0">
							<?php } ?>
								<i class="zmdi zmdi-shopping-cart"></i>
						</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over Rs 799
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<?php
						if(!empty($_SESSION['email'])) {?>
						<a href="handler/customerlogout.php" class="flex-c-m p-lr-10 trans-04">
							Log Out
						</a>
						<?php }else{ ?>
						<a href="customerforms.php" class="flex-c-m p-lr-10 trans-04">
							Log In
						</a>
						<?php } ?>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
				</li>

				<li>
					<a href="product.php">Shop</a>
				</li>

				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</header>
    <!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
		</div>
	</div>