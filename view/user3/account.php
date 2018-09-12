	<style>
	.page-banner-area {
		background: rgba(0, 0, 0, 0) url(http://localhost/laptopbaongoc_mvc/file/1920-400-1.jpg) no-repeat scroll center center;
	}
	</style>
	<!-- PAGE-CONTENT START -->
    <section class="page-content">
			<!-- PAGE-BANNER START -->
			<div class="page-banner-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-banner-menu">
								<h2 class="page-banner-title">My Account</h2>
								<ul>
									<li><a href="?controller=user3&act=trangchu">home</a></li>
									<li><a href="?controller=user3&act=account">My Account</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PAGE-BANNER END -->
			<!-- MY-ACCOUNT-AREA START -->
			<div class="my-account-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="panel-group  margin-btm-0" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#personal-info" aria-expanded="true">
											<i class="pe-7s-bookmarks"></i>
											<span>My Personal Information</span>
											</a>
										</h4>
									</div>
									<div id="personal-info" class="panel-collapse collapse in" role="tabpanel">
										<div class="panel-body">
											<form action="#">
												<div class="row">
													<div class="col-md-12">
														<div class="billing-address">
															<div class="row">
																<div class="col-md-6">
																	<input type="text" class="custom-form" placeholder="First Name" />
																</div>
																<div class="col-md-6">
																	<input type="text" class="custom-form" placeholder="Last Name" />
																</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<input type="text" class="custom-form" placeholder="Office Address" />
																</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<input type="text" class="custom-form" placeholder="Home Address" />
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<select class="custom-select custom-form">
																		<option>City</option>
																		<option>Dhaka</option>
																		<option>New York</option>
																		<option>London</option>
																		<option>Melbourne</option>
																	</select>
																</div>
																<div class="col-md-6">
																	<select class="custom-select custom-form">
																		<option>Country</option>
																		<option>Bangladesh</option>
																		<option>United States</option>
																		<option>United Kingdom</option>
																		<option>Australia</option>
																	</select>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<select class="custom-select custom-form">
																		<option>Post Code</option>
																		<option>012345</option>
																		<option>0123456</option>
																		<option>01234567</option>
																		<option>012345678</option>
																	</select>
																</div>
																<div class="col-md-6">
																	<input class="custom-form" type="password" placeholder="Password" />
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<input type="text" class="custom-form" placeholder="Cell Number" />
																</div>
																<div class="col-md-6">
																	<input type="text" class="custom-form" placeholder="Phone Number" />
																</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<input type="text" class="custom-form" placeholder="Email" name="email" />
																</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<textarea class="custom-form" placeholder="Additional information"></textarea>
																</div>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="subscribe" checked="checked"/>
																	I wish to subscribe to the 69 Fashion newsletter. 
																</label>
																<label>
																	<input type="checkbox" name="subscribe"/>
																	I have read and agree to the
																	<a href="#"><b>Privacy Policy</b></a>
																</label>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<input type="submit" class="custom-submit-2 save" value="Save" />
																</div>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#shipping-info" aria-expanded="false">
											<i class="pe-7s-cart"></i>
											<span>My shipping address</span>
											</a>
										</h4>
									</div>
									<div id="shipping-info" class="panel-collapse collapse" role="tabpanel">
										<div class="panel-body">
											<!-- CHECKOUT-AREA START -->
											<div class="checkout-area">
												<form action="#">
													<div class="row">
														<!-- Shipping-Address Start -->
														<!-- <div class="col-md-12">
															<div class="shipping-address">
																<div class="row">
																	<div class="col-md-12">
																		<select class="custom-select custom-form">
																			<option>Select Delivery Method</option>
																			<option>Select Delivery Method</option>
																			<option>Select Delivery Method</option>
																		</select>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<input class="custom-form" type="text" placeholder="Subash" name="firstname"/>
																	</div>
																	<div class="col-md-6">
																		<input class="custom-form" type="text" placeholder="Chandra" name="lastname"/>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<input type="text" class="custom-form" placeholder="Address" />
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<select class="custom-select custom-form">
																			<option>City</option>
																			<option>Dhaka</option>
																			<option>New York</option>
																			<option>London</option>
																			<option>Melbourne</option>
																		</select>
																	</div>
																	<div class="col-md-6">
																		<select class="custom-select custom-form">
																			<option>Country</option>
																			<option>Bangladesh</option>
																			<option>United States</option>
																			<option>United Kingdom</option>
																			<option>Australia</option>
																		</select>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<input class="custom-form" type="text" placeholder="Phone Number" />
																	</div>
																	<div class="col-md-6">
																		<select class="custom-select custom-form">
																			<option>Post Code</option>
																			<option>012345</option>
																			<option>0123456</option>
																			<option>01234567</option>
																			<option>012345678</option>
																		</select>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<input type="text" class="custom-form" placeholder="Email" name="email" />
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<textarea class="custom-form" placeholder="Order Note"></textarea>
																	</div>
																</div>
															</div>
														</div> -->
														<!-- Shipping-Address End -->
													</div>
												</form>
											</div>
											<!-- CHECKOUT-AREA END -->								
										</div>
									</div>
								</div>
							</div>					
						</div>
						<!-- <div class="col-sm-6">
							<div class="panel-group margin-btm-0" >
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="?controller=user3&act=wishlist" >
											<i class="pe-7s-like"></i>
											<span>My Wishlist Information</span>
											</a>
										</h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="?controller=user3&act=cart">
											<i class="pe-7s-news-paper"></i>
											<span>Order history and details</span>
											</a>
										</h4>
									</div>
								</div>
							</div>					
						</div> -->
					</div>
				</div>
			</div>
			<!-- MY-ACCOUNT-AREA END -->
			<!-- BRAND-LOGO-AREA START -->
			<!-- <div class="brand-logo-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-12">
							<div class="brand-brief">
								<h2 class="border-left-right">they are with us</h2>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<div class="brand-logo fix">
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/1.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/2.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/3.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/4.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/5.png" alt="" />
								</div>
								<div class="single-logo">
									<img src="<?=template_user3_path?>/img/brand/6.png" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- BRAND-LOGO-AREA END -->
		</section>
		<!-- PAGE-CONTENT END -->