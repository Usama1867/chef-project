<?php include 'includes/header.php';?>
<br><br><br><br><br><br>
<div class="heading-container">
	<div class="container heading-standar">
		<div class="page-breadcrumb">
			<ul class="breadcrumb">
				<li><a href="#" class="home"><span>Home</span></a></li>
				<li>My Account</li>
			</ul>
		</div>
	</div>
</div><hr>
<div class="content-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 main-wrap">
				<div class="main-content">
					<div class="commerce-account">
						<div class="commerce">
							<h2 class="commerce-account-heading">Add Recipe</h2>

							<form class="login">
								<div class="form-row form-row-wide">
									<label for="username">
										Recipe Title<span class="required">*</span>
									</label>
									<input type="text" class="input-text" name="username" id="username" value=""/>
								</div>
								
								<label for="username">
										Add Recipe Description<span class="required">*</span>
									</label>
								<textarea name="editor1"></textarea>
								<script>
									CKEDITOR.replace( 'editor1' );
								</script>
								<br>
								<div class="form-group">
									<label for="example-search-input" class="col-form-label">Add Pic for recipe 1</label>
									<br>
									<input type="file" name="fileToUpload1">
								</div> 
								<div class="form-group">
									<label for="example-search-input" class="col-form-label">Add Pic for recipe 2</label>
									<br>
									<input type="file" name="fileToUpload2">
								</div> 
								<div class="form-row">
									
								
									<input type="submit" class="button" name="login" value="Submit Recipe"/>
								</div>
								<!-- <div class="lost_password">
									<a href="#">Lost your password?</a>
								</div> -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><hr>
<h3 style="margin-left: 600px;">My Recipe</h3>

<div class="content-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 main-wrap">
				<div class="main-content">
					<div class="commerce">
						<form>
							<table class="table shop_table cart">
								<thead>
									<tr>
										<th class="product-remove hidden-xs">&nbsp;</th>
										<th class="product-thumbnail hidden-xs">&nbsp;</th>
										<th class="product-name">My Recipe</th>
										<th class="product-price text-center">Date Added</th>

									</tr>
								</thead>
								<tbody>
									<tr class="cart_item">
										<td class="product-remove hidden-xs">
											<a href="#" class="remove" title="Remove this item">&times;</a>
										</td>
										<td class="product-thumbnail hidden-xs">
											<a href="#">
												<img width="100" height="150" src="images/product/thumb_72x72.jpg" alt="Product-1"/>
											</a>
										</td>
										<td class="product-name">
											<a href="#">Cras rhoncus duis viverra</a>

										</td>
										<td class="product-price text-center">
											<span class="amount">Kal Parso</span>
										</td>

									</tr>

								</tbody>
							</table>
						</form>

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
				<div class="footer-widget-col col-md-3 col-sm-6">
					<div class="widget widget_nav_menu">
						<h3 class="widget-title">
							<span>Legal</span>
						</h3>
						<div class="menu-legal-container">
							<ul class="menu">
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Terms and Conditions</a></li>
								<li><a href="#">Social Responsibility</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-widget-col col-md-3 col-sm-6">
					<div class="widget widget_nav_menu">
						<h3 class="widget-title">
							<span>Company</span>
						</h3>
						<div class="menu-company-container">
							<ul class="menu">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Work Here</a></li>
								<li><a href="#">Dealer Locator</a></li>
								<li><a href="#">Happenings</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-widget-col col-md-3 col-sm-6">
					<div class="widget widget_nav_menu">
						<h3 class="widget-title">
							<span>Services</span>
						</h3>
						<div class="menu-services-container">
							<ul class="menu">
								<li><a href="#">Support</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Repair Center</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-widget-col col-md-3 col-sm-6">
					<div class="widget widget_nav_menu">
						<h3 class="widget-title">
							<span>Orders &#038; Returns</span>
						</h3>
						<div class="menu-orders-returns-container">
							<ul class="menu">
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Shipping Policy</a></li>
								<li><a href="#">Return Policy</a></li>
								<li><a href="#">Digital Gift Card</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'includes/footer.php';?>
