<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Online Cooking Portal</title>
		<link rel="shortcut icon" href="images/favicon.png">

		<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/settings.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/jquery.selectBox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/elegant-icon.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/custom.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/preloader.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C900&#038;ver=4.3.1' type='text/css' media='all'/>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>
		<div id="preloader">
			<img class="preloader__logo"  alt="" width="250" height="114"/>
			<div class="preloader__progress">
				<svg width="60px" height="60px" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
					<path class="preloader__progress-circlebg" fill="none" stroke="#dddddd" stroke-width="4" stroke-linecap="round" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
					<path id='preloader__progress-circle' fill="none" stroke="#bca480" stroke-width="4" stroke-linecap="round" stroke-dashoffset="192.61" stroke-dasharray="192.61 192.61" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
				</svg>
			</div>
		</div>


<!-- mobile navbar starts here usama saahab -->

		<div class="offcanvas open">
			<div class="offcanvas-wrap">
				<div class="offcanvas-user clearfix">
					<a class="offcanvas-user-wishlist-link" href="wishlist.php">
						<i class="fa fa-heart-o"></i> My Wishlist
					</a>
					<a class="offcanvas-user-wishlist-link" href="my-account.php">
						<i class="fa fa-heart-o"></i> My Profile
					</a>
					<a class="offcanvas-user-account-link" data-rel="loginModal" >
						<i class="fa fa-user"></i> Login
					</a>
					<a class="offcanvas-user-account-link" data-rel="loginModal" >
						<i class="fa fa-user"></i> Logout
					</a>
				</div>
				<nav class="offcanvas-navbar">
					<ul class="offcanvas-nav">
						<li class="">
							<a href="index.php" class="">Home <!-- <span class="caret"></span> --></a>
							
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="shop.php" class="dropdown-hover">Recipes <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="menu-item-has-children dropdown-submenu">
									<a href="shop.php">Chinese <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop.php">Nulla</a></li>
										<li><a href="shop.php">Maecenas</a></li>
										<li><a href="shop.php">Aliquam</a></li>
										<li><a href="shop.php">Donec</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children dropdown-submenu">
									<a href="shop.php">Pakistani <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop.php">Shop Grid</a></li>
										<li><a href="shop.php">Shop List</a></li>
										<li><a href="shop.php">List Style 1</a></li>
										
									</ul>
								</li>
								<li class="menu-item-has-children dropdown-submenu">
									<a href="shop.php">Thai <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop.php">Women&#8217;s</a></li>
										
									</ul>
								</li>
								<li class="menu-item-has-children dropdown-submenu">
									<a href="shop.php">Indian <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop.php">Shop Masonry</a></li>
										
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Chefs <span class="caret"></span></a>
							<!-- <ul class="dropdown-menu">
								<li><a href="blog-default.html">Chef</a></li>
								<li><a href="blog-center.html">Chef</a></li>
								<li><a href="blog-masonry.html">Chef</a></li>
								<li><a href="blog-detail.html">Chef</a></li>
							</ul> -->
						</li>
						<!-- <li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Blog <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="blog-default.html">Blog Default</a></li>
								<li><a href="blog-center.html">Blog Center</a></li>
								<li><a href="blog-masonry.html">Blog Masonry</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
							</ul>
						</li> -->
						<li class="">
							<a href="about-us.php" class="">About Us <!-- <span class="caret"></span> --></a>
							
						</li>
						<li class="">
							<a href="contact.php" class="">Contact Us <!-- <span class="caret"></span> --></a>
							
						</li>
						<!-- <li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="about-us.html">About us</a></li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</li> -->
					</ul>
				</nav>
				<div class="offcanvas-widget">
					<div class="widget social-widget">
						<div class="social-widget-wrap social-widget-none">
							<a href="#" title="Facebook" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" title="Twitter" target="_blank">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" title="Google+" target="_blank">
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#" title="Pinterest" target="_blank">
								<i class="fa fa-pinterest"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>
			<header class="header-type-classic header-absolute header-transparent header-scroll-resize">
				<div class="topbar">
					<div class="container-fluid topbar-wap">
						<div class="row">
							<div class="col-sm-6">
								<div class="left-topbar">
									<div class="user-login">
										<ul class="nav top-nav">
											<li class="menu-item">
												<a data-rel="loginModal" href="#">
													<i class="fa fa-user"></i> Login 
												</a>
											</li>
										</ul>
									</div>
									<div class="user-wishlist">
										<a href="wishlist.php"><i class="fa fa-heart-o"></i> My Wishlist</a>
									</div>
									<div class="user-wishlist">
										<a href="my-account.php"><i class="fa fa-heart-o"></i> My Account</a>
									</div>
									<div class="user-wishlist">
										<a href="logout.php"><i class="fa fa-heart-o"></i> Log-out</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="right-topbar">
									<div class="top-search">
										<div class="top-search-wrap">
											<form id="top-searchform">
												<label for="top-searchform-s" class="sr-only">Search</label>
												<input type="search" id="top-searchform-s" name="s" class="form-control" value="" placeholder="Search something&hellip;"/>
												<i class="top-searchform-icon"></i>
												<input type="submit" class="hidden" name="submit" value="Search"/>
											</form>
										</div>
									</div>
									<div class="language-switcher">
										<div class="wpml-languages">
											<a class="active" href="#" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false">
												<img src="images/en.png" alt="English"/> EN
											</a>
											<!-- <ul class="wpml-lang-dropdown dropdown-menu">
												<li>
													<a href="#"><img src="images/fr.png" alt="French"/> FR</a>
												</li>
												<li>
													<a href="#"><img src="images/de.png" alt="German"/> DE</a>
												</li>
											</ul> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="navbar-container">
					<div class="navbar navbar-default navbar-scroll-fixed">
						<div class="navbar-default-wrap">
							<div class="container navbar-default-container">
								<div class="row">
									<div class="col-md-12">
										<div class="navbar-wrap">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar bar-top"></span>
													<span class="icon-bar bar-middle"></span>
													<span class="icon-bar bar-bottom"></span>
												</button>
												<a class="navbar-search-button search-icon-mobile" href="#">
													<i class="fa fa-search"></i>
												</a>
												<!-- <a class="cart-icon-mobile" href="#">
													<i class="elegant_icon_bag"></i><span>0</span>
												</a> -->
												<a class="navbar-brand" href="./">
													<!-- <img class="logo" alt="Loja" src="images/logo-transparent.png"> -->
													<h4 style="margin-top: 30px;">Online Cooking Portal</h4>
													<!-- <img class="logo-fixed" alt="Loja" src="images/logo-fixed.png">
													<img class="logo-mobile" alt="Loja" src="images/logo-mobile.png"> -->
												</a>
											</div>
											<nav class="collapse navbar-collapse primary-navbar-collapse">
												<ul class="nav navbar-nav primary-nav">
													<li class="menu-item-has-children dropdown active">
														<a href="./" class="dropdown-hover">
															<span class="underline">Home</span> 
															<!-- <span class="caret"></span> -->
														</a>
														<!-- <ul class="dropdown-menu">
															<li><a href="lookbook-slider.html">Lookbooks Slider</a></li>
															<li><a href="home-default.html">Home Default</a></li>
															<li><a href="home-parallax.html">Home Parallax</a></li>
														</ul> -->
													</li>
													<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">Recipes</span> 
															<span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li class="menu-item-has-children mega-col-3 dropdown-submenu">
																<h3 class="megamenu-title">
																	Women <span class="caret"></span>
																</h3>
																<ul class="dropdown-menu">
																	<li><a href="shop-by-category.html">Nulla</a></li>
																	<li><a href="shop-by-category.html">Maecenas</a></li>
																	<li><a href="shop-by-category.html">Aliquam</a></li>
																	<li><a href="shop-by-category.html">Donec</a></li>
																</ul>
															</li>
															<li class="menu-item-has-children mega-col-3 dropdown-submenu">
																<h3 class="megamenu-title">
																	Layouts <span class="caret"></span>
																</h3>
																<ul class="dropdown-menu">
																	<li><a href="shop.html">Shop Grid</a></li>
																	<li><a href="shop-list.html">Shop List</a></li>
																	<li><a href="shop-list-1.html">List Style 1</a></li>
																	<li><a href="shop-list-2.html">List Style 2</a></li>
																	<li><a href="shop-list-3.html">List Style 3</a></li>
																	<li><a href="shop-detail-1.html">Single Style 1</a></li>
																	<li><a href="shop-detail-2.html">Single Style 2</a></li>
																</ul>
															</li>
															<li class="menu-item-has-children mega-col-3 dropdown-submenu">
																<h3 class="megamenu-title">
																	Conllections <span class="caret"></span>
																</h3>
																<ul class="dropdown-menu">
																	<li><a href="shop-by-collection.html">Women&#8217;s</a></li>
																	<li><a href="shop-by-collection.html">Men&#8217;s</a></li>
																	<li><a href="shop-by-collection.html">Accessories</a></li>
																</ul>
															</li>
															<li class="menu-item-has-children mega-col-3 dropdown-submenu">
																<h3 class="megamenu-title">
																	Pages <span class="caret"></span>
																</h3>
																<ul class="dropdown-menu">
																	<li><a href="shop-masonry.html">Shop Masonry</a></li>
																	<li><a href="my-account.html">My Account</a></li>
																	<li><a href="cart.html">Cart</a></li>
																	<li><a href="cart-empty.html">Empty Cart</a></li>
																	<li><a href="wishlist.html">Wishlist</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li>
														<a href="collection.html"><span class="underline">Chef</span></a>
													</li>
													<li>
														<a href="collection.html"><span class="underline">About Us</span></a>
													</li>
													<li>
														<a href="collection.html"><span class="underline">Contact Us</span></a>
													</li>
													<!-- <li class="menu-item-has-children dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">Blog</span> 
															<span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li><a href="blog-default.html">Blog Default</a></li>
															<li><a href="blog-center.html">Blog Center</a></li>
															<li><a href="blog-masonry.html">Blog Masonry</a></li>
															<li><a href="blog-detail.html">Blog Detail</a></li>
														</ul>
													</li> -->
													<!-- <li class="menu-item-has-children dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">Pages</span> 
															<span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li><a href="about-us.html">About us</a></li>
															<li><a href="contact.html">Contact Us</a></li>
														</ul>
													</li> -->
													<!-- <li class="navbar-minicart navbar-minicart-nav">
														<a class="minicart-link" href="#">
															<span class="minicart-icon">
																<i class="minicart-icon-svg elegant_icon_bag"></i> 
																<span>0</span>
															</span>
														</a>
														<div class="minicart">
															<div class="minicart-header no-items show">
																Your shopping bag is empty.
															</div>
															<div class="minicart-footer">
																<div class="minicart-actions clearfix">
																	<a class="btn btn-white-outline" href="#">
																		<span class="text">Go to the shop</span>
																	</a>
																</div>
															</div>
														</div>
													</li> -->
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="header-search-overlay hide">
							<div class="container">
								<div class="header-search-overlay-wrap">
									<form class="searchform search-ajax">
										<input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Search..."/>
										<input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
									</form>
									<button type="button" class="close">
										<span aria-hidden="true" class="fa fa-times"></span>
										<span class="sr-only">Close</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>