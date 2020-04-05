<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Loja | HTML Template</title>
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
			<img class="preloader__logo" src="images/logo-transparent.png" alt="" width="250" height="114"/>
			<div class="preloader__progress">
				<svg width="60px" height="60px" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
					<path class="preloader__progress-circlebg" fill="none" stroke="#dddddd" stroke-width="4" stroke-linecap="round" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
					<path id='preloader__progress-circle' fill="none" stroke="#bca480" stroke-width="4" stroke-linecap="round" stroke-dashoffset="192.61" stroke-dasharray="192.61 192.61" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
				</svg>
			</div>
		</div>
		<div class="offcanvas open">
			<div class="offcanvas-wrap">
				<div class="offcanvas-user clearfix">
					<a class="offcanvas-user-wishlist-link" href="wishlist.html">
						<i class="fa fa-heart-o"></i> My Wishlist
					</a>
					<a class="offcanvas-user-account-link" href="#">
						<i class="fa fa-user"></i> Login
					</a>
				</div>
				<nav class="offcanvas-navbar">
					<ul class="offcanvas-nav">
						<li class="menu-item-has-children dropdown current-menu-ancestor">
							<a href="./" class="dropdown-hover">Home <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="lookbook-slider.html">Lookbooks Slider</a></li>
								<li><a href="home-default.html">Home Default</a></li>
								<li><a href="home-parallax.html">Home Parallax</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Shop <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="menu-item-has-children dropdown-submenu">
									<a href="#">Women <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop-by-category.html">Nulla</a></li>
										<li><a href="shop-by-category.html">Maecenas</a></li>
										<li><a href="shop-by-category.html">Aliquam</a></li>
										<li><a href="shop-by-category.html">Donec</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children dropdown-submenu">
									<a href="#">Layouts <span class="caret"></span></a>
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
								<li class="menu-item-has-children dropdown-submenu">
									<a href="#">Conllections <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop-by-collection.html">Women&#8217;s</a></li>
										<li><a href="shop-by-collection.html">Men&#8217;s</a></li>
										<li><a href="shop-by-collection.html">Accessories</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children dropdown-submenu">
									<a href="#">Pages <span class="caret"></span></a>
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
						<li><a href="collection.html">Collections</a></li>
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Blog <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="blog-default.html">Blog Default</a></li>
								<li><a href="blog-center.html">Blog Center</a></li>
								<li><a href="blog-masonry.html">Blog Masonry</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="about-us.html">About us</a></li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</li>
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
										<a href="wishlist.html"><i class="fa fa-heart-o"></i> My Wishlist</a>
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
											<a class="active" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
												<img src="images/en.png" alt="English"/> EN
											</a>
											<ul class="wpml-lang-dropdown dropdown-menu">
												<li>
													<a href="#"><img src="images/fr.png" alt="French"/> FR</a>
												</li>
												<li>
													<a href="#"><img src="images/de.png" alt="German"/> DE</a>
												</li>
											</ul>
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
												<a class="cart-icon-mobile" href="#">
													<i class="elegant_icon_bag"></i><span>0</span>
												</a>
												<a class="navbar-brand" href="./">
													<img class="logo" alt="Loja" src="images/logo-transparent.png">
													<img class="logo-fixed" alt="Loja" src="images/logo-fixed.png">
													<img class="logo-mobile" alt="Loja" src="images/logo-mobile.png">
												</a>
											</div>
											<nav class="collapse navbar-collapse primary-navbar-collapse">
												<ul class="nav navbar-nav primary-nav">
													<li class="menu-item-has-children dropdown active">
														<a href="./" class="dropdown-hover">
															<span class="underline">Home</span> 
															<span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li><a href="lookbook-slider.html">Lookbooks Slider</a></li>
															<li><a href="home-default.html">Home Default</a></li>
															<li><a href="home-parallax.html">Home Parallax</a></li>
														</ul>
													</li>
													<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">Shop</span> 
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
														<a href="collection.html"><span class="underline">Collections</span></a>
													</li>
													<li class="menu-item-has-children dropdown">
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
													</li>
													<li class="menu-item-has-children dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">Pages</span> 
															<span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li><a href="about-us.html">About us</a></li>
															<li><a href="contact.html">Contact Us</a></li>
														</ul>
													</li>
													<li class="navbar-minicart navbar-minicart-nav">
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
													</li>
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
			<div class="content-container no-padding">
				<div class="container-full">
					<div class="row">
						<div class="col-md-12">
							<div class="main-content">
								<div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container mb-0">
									<div id="rev_slider" class="rev_slider fullwidthabanner">
										<ul>  
											<li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
													<img src="images/sliders/slider-1.jpg" alt="" width="1920" height="780" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
												<div class="tp-caption tp-resizeme" data-x="756" data-y="266" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
													<img src="images/sliders/slider-star.png" alt="" width="149" height="39" data-ww="149px" data-hh="39px" data-no-retina>
												</div>
												<div class="tp-caption tp-resizeme" data-x="653" data-y="336" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="800" data-responsive_offset="on">
													<img src="images/sliders/slider-line.png" alt="" width="30" height="4" data-ww="30px" data-hh="4px" data-no-retina>
												</div>
												<div class="tp-caption Fashion-BigDisplay tp-resizeme" data-x="708" data-y="312" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1100" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													MEN'S FASHION
												</div>
												<div class="tp-caption tp-resizeme" data-x="970" data-y="334" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1400" data-responsive_offset="on">
													<img src="images/sliders/slider-line.png" alt="" width="30" height="4" data-ww="30px" data-hh="4px" data-no-retina>
												</div>
												<div class="tp-caption Fashion-BigDisplay Bigger tp-resizeme" data-x="526" data-y="377" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;s:300;s:300;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													SUMMER COLLECTION
												</div>
												<div class="tp-caption Fashion-BigDisplay Smaller tp-resizeme" data-x="675" data-y="426" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:500;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													NEW SUMMER COLLECTION 2015
												</div>
												<div class="tp-caption Fashion-BigDisplay tp-resizeme" data-x="691" data-y="489" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="2300" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													<a href="#" class="btn btn-black-outline">SHOP NOW</a>
												</div>
												<div class="tp-caption Fashion-BigDisplay tp-resizeme" data-x="832" data-y="489" data-width="['76']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="2300" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													<a href="#" class="btn btn-primary">PURCHASE</a>
												</div>
											</li>
											<li data-index="rs-4" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
												<img src="images/sliders/slider-2.jpg" alt="" width="1920" height="780" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
												<div class="tp-caption tp-resizeme" data-x="270" data-y="-2" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:500;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="200" data-responsive_offset="on">
													<img src="images/sliders/slider-c.png" alt="" width="225" height="373" data-ww="225px" data-hh="373px" data-no-retina>
												</div>
												<div class="tp-caption Fashion-SmallText tp-resizeme" data-x="340" data-y="246" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:500;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="200" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													175$
												</div>
												<div class="tp-caption Fashion-BigDisplay tp-resizeme" data-x="227" data-y="382" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													BEST PRODUCT 2015
												</div>
												<div class="tp-caption Fashion-BigDisplay Bigger tp-resizeme" data-x="163" data-y="443" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:500;e:Power2.easeOut;" data-transform_out="opacity:0;s:300;s:300;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="810" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													MEN'S FASHION
												</div>
												<div class="tp-caption tp-resizeme" data-x="494" data-y="526" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1100" data-responsive_offset="on">
													<img src="images/sliders/slider-L.png" alt="" width="41" height="41" data-ww="41px" data-hh="41px" data-no-retina>
												</div>
												<div class="tp-caption Fashion-BigDisplay tp-resizeme" data-x="324" data-y="547" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1300" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													<a href="#" class="btn btn-black-outline">SHOP NOW</a>
												</div>
													<div class="tp-caption tp-resizeme" data-x="236" data-y="527" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1100" data-responsive_offset="on">
														<img src="images/sliders/slider-L2.png" alt="" width="41" height="41" data-ww="41px" data-hh="41px" data-no-retina>
												</div>
											</li>
										</ul>
										<div class="tp-bannertimer tp-bottom"></div>
									</div>
								</div>
								<div class="row row-fluid mb-0">
									<div class="col-sm-12">
										<div class="container">
											<div class="row row-fluid mb-0 pt-9 pb-9">
												<div class="col-sm-4">
													<div class="box-ft box-ft-2 nice-border-full">
														<a href="#">
															<img src="images/thumb_370x275.jpg" alt="">
														</a>
														<a href="#">
															<span class="bof-tf-title-wrap">
																<span class="bof-tf-title-wrap-2">
																	<span class="nice-border-top-left"></span>
																	<span class="nice-border-top-right"></span>
																	<span class="nice-border-bottom-left"></span>
																	<span class="nice-border-bottom-right"></span>
																	<span class="bof-tf-sub-title">Accessories</span>
																	<span class="bof-tf-title">New Fashion</span>
																</span>
															</span>
														</a>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="box-ft box-ft-3">
														<img src="images/thumb_370x275.jpg" alt="">
															<div class="box-ft-img-overlay"></div>
															<a href="#">
																<span class="bof-tf-title-wrap">
																	<span class="bof-tf-title-wrap-2">
																		<span class="bof-tf-sub-title">hot fashion 2o15</span>
																		<span class="bof-tf-title">Men Clothing</span>
																		<span class="bof-tf-view-more">View More</span>
																	</span>
																</span>
															</a>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="box-ft box-ft-2 nice-border-full">
														<a href="#">
															<img src="images/thumb_370x275.jpg" alt="">
														</a>
														<a href="#">
															<span class="bof-tf-title-wrap">
																<span class="bof-tf-title-wrap-2">
																	<span class="nice-border-top-left"></span>
																	<span class="nice-border-top-right"></span>
																	<span class="nice-border-bottom-left"></span>
																	<span class="nice-border-bottom-right"></span>
																	<span class="bof-tf-sub-title">Discount - 50%</span>
																	<span class="bof-tf-title">Women Style</span>
																</span>
															</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row-fluid mb-0 pt-0">
									<div class="col-sm-12">
										<div class="lookbooks lookbooks-grid">
											<div class="lookbook lookbook-left clearfix">
												<div class="loobook-wrap clearfix">
													<div class="lookbook-info">
														<div class="lookbook-info-wrap bg-1">
															<div class="lookbook-info-wrap-border"></div>
															<div class="lookbook-info-sumary">
																<span class="lookbook-small-title">
																	Latest Item 2015
																</span>
																<h3>
																	<a href="#">Accessories </a>
																</h3>
																<a class="btn btn-primary lookbook-action" href="#">
																	<span>Shop Now</span>
																</a>
															</div>
														</div>
													</div>
													<div class="lookbook-thumb">
														<div class="commerce commerce-lookbok columns-2">
															<ul class="products columns-2" data-columns="2">
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-1"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-1alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">View</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Cras rhoncus duis viverra
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<span class="amount">
																									12.00&#36;
																								</span>
																								&ndash;
																								<span class="amount">
																									23.00&#36;
																								</span>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-2"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-2alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">
																						View
																					</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Morbi sed egestas
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<span class="amount">
																									12.00&#36;
																								</span>
																								&ndash;
																								<span class="amount">
																									23.00&#36;
																								</span>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-5"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-5alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">
																						View
																					</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Jalapeno Dressing Salad
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<span class="amount">
																									17.75&#36;
																								</span>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<span class="onsale">Sale!</span>
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-6"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-6alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">
																						View
																					</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Pesto Cauliflower
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<del>
																									<span class="amount">
																										15.05&#36;
																									</span>
																								</del> 
																								<ins>
																									<span class="amount">
																										12.00&#36;
																									</span>
																								</ins>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="lookbook lookbook-right clearfix">
												<div class="loobook-wrap clearfix">
													<div class="lookbook-info">
														<div class="lookbook-info-wrap bg-2">
															<div class="lookbook-info-wrap-border"></div>
															<div class="lookbook-info-sumary">
																<span class="lookbook-small-title">
																	Most Product 2015
																</span>
																<h3><a href="#">Men&#039;s </a></h3>
																<a class="btn btn-primary lookbook-action" href="#">
																	<span>Shop Now</span>
																</a>
															</div>
														</div>
													</div>
													<div class="lookbook-thumb">
														<div class="commerce commerce-lookbok columns-2">
															<ul class="products columns-2" data-columns="2">
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-1"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-1alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">
																						View
																					</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Cras rhoncus duis viverra
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<span class="amount">
																									12.00&#36;
																								</span>
																								&ndash;
																								<span class="amount">
																									23.00&#36;
																								</span>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-3"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-3alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">
																						View
																					</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Creamy Spring Pasta
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<span class="amount">
																									12.00&#36;
																								</span>
																								&ndash;
																								<span class="amount">
																									23.00&#36;
																								</span>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-4"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-4alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">
																						View
																					</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Green Chile Burritos
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<span class="amount">
																									73.75&#36;
																								</span>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-5"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-5alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">
																						View
																					</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Jalapeno Dressing Salad
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<span class="amount">
																									17.75&#36;
																								</span>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="lookbook lookbook-left clearfix">
												<div class="loobook-wrap clearfix">
													<div class="lookbook-info">
														<div class="lookbook-info-wrap bg-3">
															<div class="lookbook-info-wrap-border"></div>
															<div class="lookbook-info-sumary">
																<span class="lookbook-small-title">New Model 2015</span>
																<h3><a href="#">Women&#039;s </a></h3>
																<a class="btn btn-primary lookbook-action" href="#">
																	<span>Shop Now</span>
																</a>
															</div>
														</div>
													</div>
													<div class="lookbook-thumb">
														<div class="commerce commerce-lookbok columns-2">
															<ul class="products columns-2" data-columns="2">
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-2"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-2alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">
																						View
																					</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Morbi sed egestas
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<span class="amount">
																									12.00&#36;
																								</span>
																								&ndash;
																								<span class="amount">
																									23.00&#36;
																								</span>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-3"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-3alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">
																						View
																					</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Creamy Spring Pasta
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<span class="amount">
																									12.00&#36;
																								</span>
																								&ndash;
																								<span class="amount">
																									23.00&#36;
																								</span>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-4"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-4alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">
																						View
																					</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Green Chile Burritos
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<span class="amount">
																									73.75&#36;
																								</span>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
																<li class="product">
																	<div class="product-container">
																		<figure>
																			<div class="product-wrap">
																				<div class="product-images">
																					<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-5"/>
																						</a>
																					</div>
																					<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																						<a href="#">
																							<img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-5alt"/>
																						</a>
																					</div>
																				</div>
																				<div class="shop-loop-actions">
																					<a href="#" class="add_to_cart_button product_type_simple">
																						View
																					</a>
																					<a class="shop-loop-quickview" href="#" data-original-title="Quick view">
																					</a>
																					<div class="yith-wcwl-add-to-wishlist">
		                                                                                <div class="yith-wcwl-add-button">
		                                                                                    <a href="#" class="add_to_wishlist">
		                                                                                        Add to Wishlist
		                                                                                    </a>
		                                                                                </div>
		                                                                            </div>
																					<div class="clear"></div>
																				</div>
																			</div>
																			<figcaption>
																				<div class="shop-loop-product-info">
																					<div class="info-title">
																						<h3 class="product_title">
																							<a href="#">
																								Jalapeno Dressing Salad
																							</a>
																						</h3>
																					</div>
																					<div class="info-meta">
																						<div class="info-price">
																							<span class="price">
																								<span class="amount">
																									17.75&#36;
																								</span>
																							</span>
																						</div>
																					</div>
																				</div>
																			</figcaption>
																		</figure>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="brands pt-9 pb-9">
												<div class="container">
													<div class="row">
														<div class="caroufredsel" data-visible-min="1" data-visible-max="5" data-responsive="1" data-infinite="1" data-autoplay="1">
															<div class="caroufredsel-wrap">
																<ul class="caroufredsel-items row">
																	<li class="caroufredsel-item brand-item">
																		<a href="#">
																			<img alt="" src="images/brand/brand_170x120.png">
																		</a>
																	</li>
																	<li class="caroufredsel-item brand-item">
																		<a href="#">
																			<img alt="" src="images/brand/brand_170x120.png">
																		</a>
																	</li>
																	<li class="caroufredsel-item brand-item">
																		<a href="#">
																			<img alt="" src="images/brand/brand_170x120.png">
																		</a>
																	</li>
																	<li class="caroufredsel-item brand-item">
																		<a href="#">
																			<img alt="" src="images/brand/brand_170x120.png">
																		</a>
																	</li>
																	<li class="caroufredsel-item brand-item">
																		<a href="#">
																			<img alt="" src="images/brand/brand_170x120.png">
																		</a>
																	</li>
																	<li class="caroufredsel-item brand-item">
																		<a href="#">
																			<img alt="" src="images/brand/brand_170x120.png">
																		</a>
																	</li>
																	<li class="caroufredsel-item brand-item">
																		<a href="#">
																			<img alt="" src="images/brand/brand_170x120.png">
																		</a>
																	</li>
																	<li class="caroufredsel-item brand-item">
																		<a href="#">
																			<img alt="" src="images/brand/brand_170x120.png">
																		</a>
																	</li>
																	<li class="caroufredsel-item brand-item">
																		<a href="#">
																			<img alt="" src="images/brand/brand_170x120.png">
																		</a>
																	</li>
																	<li class="caroufredsel-item brand-item">
																		<a href="#">
																			<img alt="" src="images/brand/brand_170x120.png">
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="bottom-products commerce pt-7 pb-7 bg-white">
												<div class="container">
													<div class="row">
														<div class="col-md-4 col-sm-6">
															<div class="widget widget_products">
																<h3 class="widget-title"><span>On Sale Products</span></h3>
																<ul class="product_list_widget">
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-13"/> 
																			<span class="product-title">Donec tincidunt justo</span>
																		</a>
																		<del><span class="amount">20.50&#36;</span></del> 
																		<ins><span class="amount">19.00&#36;</span></ins>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-10"/> 
																			<span class="product-title">Mauris egestas</span>
																		</a>
																		<span class="amount">14.95&#36;</span>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-9"/> 
																			<span class="product-title">Morbi fermentum</span>
																		</a>
																		<span class="amount">17.45&#36;</span>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-8"/> 
																			<span class="product-title">Morbi fermentum</span>
																		</a>
																		<span class="amount">23.00&#36;</span>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-7"/> 
																			<span class="product-title">Ut quis Aenean</span>
																		</a>
																		<span class="amount">10.95&#36;</span>
																	</li>
																</ul>
															</div>
														</div>
														<div class="col-md-4 col-sm-6">
															<div class="widget widget_products">
																<h3 class="widget-title"><span>Featured Products</span></h3>
																<ul class="product_list_widget">
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-13"/> 
																			<span class="product-title">Donec tincidunt justo</span>
																		</a>
																		<del><span class="amount">20.50&#36;</span></del> 
																		<ins><span class="amount">19.00&#36;</span></ins>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-10"/> 
																			<span class="product-title">Mauris egestas</span>
																		</a>
																		<span class="amount">14.95&#36;</span>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-9"/> 
																			<span class="product-title">Morbi fermentum</span>
																		</a>
																		<span class="amount">17.45&#36;</span>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-8"/> 
																			<span class="product-title">Morbi fermentum</span>
																		</a>
																		<span class="amount">23.00&#36;</span>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-7"/> 
																			<span class="product-title">Ut quis Aenean</span>
																		</a>
																		<span class="amount">10.95&#36;</span>
																	</li>
																</ul>
															</div>
														</div>
														<div class="col-md-4 col-sm-6">
															<div class="widget widget_products">
																<h3 class="widget-title"><span>Top Rated Products</span></h3>
																<ul class="product_list_widget">
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-13"/> 
																			<span class="product-title">Donec tincidunt justo</span>
																		</a>
																		<del><span class="amount">20.50&#36;</span></del> 
																		<ins><span class="amount">19.00&#36;</span></ins>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-10"/> 
																			<span class="product-title">Mauris egestas</span>
																		</a>
																		<span class="amount">14.95&#36;</span>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-9"/> 
																			<span class="product-title">Morbi fermentum</span>
																		</a>
																		<span class="amount">17.45&#36;</span>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-8"/> 
																			<span class="product-title">Morbi fermentum</span>
																		</a>
																		<span class="amount">23.00&#36;</span>
																	</li>
																	<li>
																		<a href="#">
																			<img width="200" height="200" src="images/product/thumb_60x60.jpg" alt="Product-7"/> 
																			<span class="product-title">Ut quis Aenean</span>
																		</a>
																		<span class="amount">10.95&#36;</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="call-box pb-5 text-center">
												<div class="container">
													<div class="row">
														<div class="col-md-12">
															<img src="images/thumb_43x47.png" alt="" />
															<div class="text-block">
																<h2>You like this? Purchase Loja Shop</h2>
																<p>Lorem ipsum is simply text lorem ipsum text.</p>
															</div>
															<a href="#" class="purchase">Purchase Now</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-widget">
				<div class="footer-widget-wrap">
					<div class="container">
						<div class="row">
							<div class="footer-widget-col no-border ver-top col-md-3 col-sm-6">
								<div class="widget">
									<img class="footer-logo" src="images/footer_logo.png" alt="Logo" />
									<p>
										Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorumexerci tation ullamcorpe.
									</p>
									<p>
										Ut wisi enim ad minim veniam, quis nostrud exerci tation
									</p>
									<br />
									<p class="more-detail">
										<img src="images/more-detail.jpg" alt="" />
										<a href="#">Details</a>
									</p>
								</div>
							</div>
							<div class="footer-widget-col no-border ver-top col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title align-left">
										<span>My Account</span>
									</h3>
									<div class="menu-company-container">
										<ul class="menu">
											<li><a href="#">About Us</a></li>
											<li><a href="#">Work Here</a></li>
											<li><a href="#">Dealer Locator</a></li>
											<li><a href="#">Happenings</a></li>
											<li><a href="#">My account</a></li>
											<li><a href="#">My login</a></li>
											<li><a href="#">Cart</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="footer-widget-col no-border ver-top col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title align-left">
										<span>Extra</span>
									</h3>
									<div class="menu-company-container">
										<ul class="menu">
											<li><a href="#">Order &amp; Returns</a></li>
											<li><a href="#">Search Terms</a></li>
											<li><a href="#">Advanced Search</a></li>
											<li><a href="#">Affiliates</a></li>
											<li><a href="#">Group Sales</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="footer-widget-col col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title align-left">
										<span>Contact Us</span>
									</h3>
									<div class="contact-info">
										<div class="footer-contact-item">
											<div class="footer-contact-icon">
												<i class="fa fa-map-marker"></i>
											</div>
											<div class="footer-contact-text">
												356 St. James Square, Covnet Garden, England
											</div>
										</div>
										<div class="footer-contact-item">
											<div class="footer-contact-icon">
												<i class="fa fa-phone"></i>
											</div>
											<div class="footer-contact-text">
												+ (400) 0123 456 789 <br />
												+ (800) 0123 456 789
											</div>
										</div>
										<div class="footer-contact-item">
											<div class="footer-contact-icon">
												<i class="fa fa-envelope-o"></i>
											</div>
											<div class="footer-contact-text">
												<a href="mailto:email@domain.com">email@domain.com</a><br />
												<a href="#">www.domain.com</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="footer-info">
					<a href="#" class="go-to-top"><i class="fa fa-angle-double-up"></i></a>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="copyright">
									Copyright right © 2015 Loja. All Rights Reserved.
								</div>
							</div>
							<div class="col-md-6">
								<ul class="payment">
									<li><img src="images/thumb_32x20.jpg" alt="" /></li>
									<li><img src="images/thumb_32x20.jpg" alt="" /></li>
									<li><img src="images/thumb_32x20.jpg" alt="" /></li>
									<li><img src="images/thumb_32x20.jpg" alt="" /></li>
									<li><img src="images/thumb_32x20.jpg" alt="" /></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userloginModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Login</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" id="username" name="log" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" id="password" required value="" name="pwd" class="form-control" placeholder="Password">
							</div>
							<div class="checkbox clearfix">
								<label class="form-flat-checkbox pull-left">
									<input type="checkbox" name="rememberme" id="rememberme" value="forever">
									<i></i>&nbsp;Remember Me
								</label>
								<span class="lostpassword-modal-link pull-right">
									<a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
								</span>
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-register pull-left">
								<a data-rel="registerModal" href="#">Not a Member yet?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userregisterModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Register account</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="user_email">Email</label>
								<input type="email" id="user_email" name="user_email" required class="form-control" value="" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="user_password">Password</label>
								<input type="password" id="user_password" required value="" name="user_password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="user_password">Retype password</label>
								<input type="password" id="cuser_password" required value="" name="cuser_password" class="form-control" placeholder="Retype password">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userlostpasswordModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Forgot Password</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Username or E-mail:</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script type='text/javascript' src='js/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='js/easing.min.js'></script>
		<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='js/jquery.appear.min.js'></script>
		<script type='text/javascript' src='js/script.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='js/jquery.selectBox.min.js'></script>
		<script type='text/javascript' src='js/preloader.min.js'></script>
		<script type='text/javascript' src='js/jquery.carouFredSel.min.js'></script>

		<script type='text/javascript' src='js/extensions/revolution.extension.actions.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.kenburn.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.layeranimation.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.migration.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.navigation.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.parallax.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.slideanims.min.js'></script>
		<script type='text/javascript' src='js/extensions/revolution.extension.video.min.js'></script>

		<script type="text/javascript">

			var tpj=jQuery;
			tpj.noConflict();
			var revapi2;

			tpj(document).ready(function() {

			if(tpj('#rev_slider').revolution == undefined){
				revslider_showDoubleJqueryError('#rev_slider');
			}else{
			   revapi2 = tpj('#rev_slider').show().revolution(
				{	
					delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							onHoverStop:"off",
							arrows: {
								style:"gyges",
								enable:true,
								hide_onmobile:false,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:20,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:20,
									v_offset:0
								}
							}
							,
							bullets: {
								enable:true,
								hide_onmobile:false,
								style:"custom",
								hide_onleave:false,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:20,
								space:5,
								tmp:''
							}
						},
						gridwidth:1240,
						gridheight:868,
						lazyType:"none",
						minHeight:500,
						shadow:0,
						spinner:"spinner0",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
				});



				}
			});	/*ready*/

		</script>
	</body>
</html>