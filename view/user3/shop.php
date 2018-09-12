<?php
// xem_arr($data['sanpham']);
// xem_arr($data['danhmuc']);
// xem_arr($data['nhomsanpham']);

?>
<!-- <script language="javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script> -->

	<style>
	.page-banner-area {
		background: rgba(0, 0, 0, 0) url(http://localhost/laptopbaongoc_mvc/file/1920-400-1.jpg) no-repeat scroll center center;
	}
	</style>
	
<form method="post" action="">
<!-- PAGE-CONTENT START -->
<section class="page-content">

	<!-- PAGE-BANNER START -->
	<div class="page-banner-area margin-bottom-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-banner-menu">
						<h2 class="page-banner-title">Shop</h2>
						<ul>
							<li><a href="index.html">home</a></li>
							<li>Shop Grid</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- PAGE-BANNER END -->
	<!-- SHOP-AREA START -->
	<div class="shop-area margin-bottom-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="shop-border"></span>
				</div>
					
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h1>Categories</h1>
					<div class="demo">
						<!-- Ace Responsive Menu -->
						<nav>
							<!-- Menu Toggle btn-->
							<div class="menu-toggle">
								<h3>Menu</h3>
								<button type="button" id="menu-btn">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- Responsive Menu Structure-->
							<!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
							<ul id="respMenu" class="ace-responsive-menu" data-menu-style="accordion">
								<!-- <li>
									<a href="javascript:;">
										<span class="title">Home</span>
									</a>
								</li> -->
								<?php
									$i=0;
									foreach($data['danhmuc'] as $v)
									{
										$i++;
								?>	
								<li>
									<a href="javascript:;">
										<!-- <i class="fa fa-cube" aria-hidden="true"></i> -->
										<span class="title"><?php echo $v->ten_danhmucsanpham ?></span>

									</a>
									<!-- Level Two-->
									<ul>
										<?php
											foreach($data['nhomsanpham'] as $k)
											{

												if($k->id_danhmucsanpham==$v->id_danhmucsanpham)
												{

										?>	
												<li>
													<a href="?controller=user3&act=shop&id_danhmuc=<?php echo $v->id_danhmucsanpham?>&id_nhomsp=<?php echo $k->id_nhomsanpham?>"><?php echo $k->ten_nhomsanpham ?></a>
												</li>
										<?php 
												}
											}
										?>			
									</ul>
								</li>

								<?php 
									}
								?>	
							</ul>
						</nav>
						<!-- End of Responsive Menu -->
					</div>
					
				</div>


				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<!-- Shop-Content start -->
					<div class="shop-content">
						<!-- product-toolbar start -->
						<div class="product-toolbar">
							<!-- Shop-menu -->
							<div class="shop-menu view-mode">
								<a class="grid-view active" href="#grid-view" data-toggle="tab"><i class="sp-grid-view"></i></a>
								<a class="list-view" href="#list-view" data-toggle="tab"><i class="sp-list-view"></i></a>
							</div>
							<div class="short-by hidden-xs">
								<span>short by</span>
								<select class="shop-select">
									<option value="1">default</option>
									<option value="1">default</option>
									<option value="1">default</option>
									<option value="1">default</option>
									<option value="1">default</option>
								</select>
							</div>
							<div class="short-by showing hidden-xs">
								<span>showing</span>
								<select class="shop-select">
									<option value="1">9</option>
									<option value="1">15</option>
									<option value="1">24</option>
									<option value="1">30</option>
									<option value="1">45</option>
								</select>
							</div>
							<!-- pagination -->
							<div class="shop-pagination">
								<ul>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="sp-arrow-bold-right"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- product-toolbar end -->
						<!-- Shop-product start -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="grid-view">
								<div class="row shop-grid">
									<!-- Single-product start -->
									<?php
										foreach($data['sanpham'] as $v)
										{
									?>
									<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
										<div class="single-product">
											<div class="product-photo">
												<a href="#">
													<img class="primary-photo" style="height:;align-content: center;" src="<?=domainpic.$v->hinhdaidiensanpham?>" alt="" />
													<img class="secondary-photo" src="<?=domainpic.$v->hinhdaidiensanpham?>" alt="" />
												</a>
												<div class="pro-action">
													<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
													<a href="?controller=cart_user3&&act=add_cart&&id=<?php echo  $v->id_sanpham ?> " class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
													<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
												</div>
											</div>
											<div class="product-brief">
												<h2><a href="#"><?=$v->ten_sanpham?></a></h2>
												<h3><?=number_format($v->gia)?></h3>
											</div>
										</div>
									</div>	
									
									<?php
										}
									?>
									
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="list-view"> 
								<div class="row shop-list">
								<?php
										foreach($data['sanpham'] as $v)
										{
									?>
									<!-- Single-product start -->
									<div class="col-md-12">
										<div class="single-product">
											<div class="product-photo">
												<a href="#">
													<img class="primary-photo" src="<?=domainpic.$v->hinhdaidiensanpham?>" alt="" />
													<img class="secondary-photo" src="<?=domainpic.$v->hinhdaidiensanpham?> alt="" />
												</a>
												<div class="pro-action">
													<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
													<a href="?controller=cart_user3&&act=add_cart&&id=<?php echo  $v->id_sanpham ?> " class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
													<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
												</div>
											</div>
											<div class="product-brief">
												<h2><a href="#"><?=$v->ten_sanpham?></a></h2>
												<h3><?=number_format($v->gia)?></h3>
												<div class="porduct-desc">
													<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, temporamet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
												</div>
												<div class="pro-quick-view">
													<div class="quick-view">
														<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View">Quick View</a>
													</div>
													<div class="pro-rating">
														<a href="#"><i class="sp-star rating-1"></i></a>
														<a href="#"><i class="sp-star rating-1"></i></a>
														<a href="#"><i class="sp-star rating-1"></i></a>
														<a href="#"><i class="sp-star rating-1"></i></a>
														<a href="#"><i class="sp-star rating-2"></i></a>
													</div>
												</div>
											</div>
										</div>	
									</div>
									<?php
										}
									?>
								</div>
							</div>
						</div>
						<!-- Shop-product end -->
						<!-- product-toolbar start -->
						<div class="product-toolbar btm-border">
							<!-- Shop-menu -->
							<div class="shop-menu view-mode">
								<a class="grid-view active" href="#grid-view" data-toggle="tab"><i class="sp-grid-view"></i></a>
								<a class="list-view" href="#list-view" data-toggle="tab"><i class="sp-list-view"></i></a>
							</div>
							<div class="short-by hidden-xs">
								<span>short by</span>
								<select class="shop-select">
									<option value="1">default</option>
									<option value="1">default</option>
									<option value="1">default</option>
									<option value="1">default</option>
									<option value="1">default</option>
								</select>
							</div>
							<div class="short-by showing hidden-xs">
								<span>showing</span>
								<select class="shop-select">
									<option value="1">9</option>
									<option value="1">15</option>
									<option value="1">24</option>
									<option value="1">30</option>
									<option value="1">45</option>
								</select>
							</div>
							<!-- Pagination -->
							<div class="shop-pagination">
								<ul>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="sp-arrow-bold-right"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- product-toolbar end -->
					</div>
					<!-- Shop-Content end -->
				</div>
			</div>
		</div>
	</div>
	<!-- SHOP-AREA END -->
	<!-- BANNER-AREA START -->
	<div class="banner-area fix margin-bottom-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="best-product-banner">
						<a href="#"><img src="<?=template_user3_path?>/img/banner/best-product-banner.jpg" alt="" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BANNER-AREA END -->
       
	<!-- BANNER-AREA START -->
	<div class="banner-area fix margin-bottom-80">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="banner-photo">
						<a href="#"><img src="<?=template_user3_path?>/img/banner/4.jpg" alt="" /></a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="banner-6">
						<div class="section-title-2">
							<h2 class="border-left-rights">product description</h2>
						</div>
						<h3><a href="#">Slim Oxford Shirt</a></h3>
						<span class="main-price">$144.44</span> <span class="old-price-2">$288.00</span>
						<p>An oxford shirt sharp and reliable essential. durable woven texture in premium two-ply cotton, it is the perfect complement to suiting and urban knits. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BANNER-AREA END -->
	
	<!-- SERVICE-AREA START -->
	<div class="service-area margin-bottom-80">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-service">
						<div class="service-icon">
							<i class="sp-transport"></i>
						</div>
						<div class="service-brief">
							<h3>free shipping</h3>
							<p>There are many variations of passages of Lorem Ipsum available, alteration</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-service">
						<div class="service-icon">
							<i class="sp-head-phone"></i>
						</div>
						<div class="service-brief">
							<h3>help line</h3>
							<p>01652.448.338 - call any time for any support Lorem Ipsum available, alteration </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-service">
						<div class="service-icon">
							<i class="sp-business"></i>
						</div>
						<div class="service-brief">
							<h3>money back guarantee</h3>
							<p>There are many variations of passages of Lorem Ipsum available, alteration</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- SERVICE-AREA END -->
</section>
<!-- PAGE-CONTENT END -->
</form>



