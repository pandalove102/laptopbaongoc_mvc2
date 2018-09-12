<?php

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";




?>
<style>
	.page-banner-area.photo-3 {
		background: rgba(0, 0, 0, 0) url(http://localhost/laptopbaongoc_mvc/file/1920-400-1.jpg) no-repeat scroll center center;
	}
	</style>
<!-- PAGE-CONTENT START -->
<section class="page-content">
			<!-- PAGE-BANNER START -->
			<div class="page-banner-area photo-3 margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-banner-menu">
								<h2 class="page-banner-title">Shopping Cart</h2>
								<ul>
									<li><a href="index.html">home</a></li>
									<li>Shoping Cart</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PAGE-BANNER END -->
			<!-- SHOPPING-CART-AREA START -->
			<div class="shopping-cart-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<form action="?controller=cart_user3&&act=update_soluong" method="post">
								<div class="table-content table-responsive">
									<table>
										<thead>
											<tr>
												<th class="product-thumbnail">Image</th>
												<th class="product-name">Name</th>
												<th class="product-quantity">Quantity</th>
												<th class="product-price">price</th>
												<th class="product-subtotal">Subtotal</th>
												<th class="product-edit">Edit</th>
												<th class="product-remove">Remove</th>
											</tr>
										</thead>
										<tbody>
									<?php
										$total=0;
										if (isset($_SESSION['cart']) && $_SESSION['cart'] && count($_SESSION['cart'])>0)
										{
										
											foreach($_SESSION['cart'] as $k=>$v)
											{
												$tt=$v['soluong']*$v['gia'];
												$total+=$tt;
										?>
											<!-- mặc định giỏ hàng không có sản phẩm -->
											<tr>
												<td class="product-thumbnail"><a href="#"><img src="<?=domainpic?><?php echo @$v['hinhdaidiensanpham'] ?>" alt="" /></a></td>
												<td class="product-name"><a href="#"><?php echo @$v['ten_sanpham'] ?></a></td>
												<td class="product-quantity"><input type="text" name="soluong[<?=$v['id_sanpham']?>]"  value="<?php echo @$v['soluong'] ?>" /></td>
												<td class="product-price"><span class="amount"><?php echo number_format(@$v['gia']) ?></span></td>
												<td class="product-subtotal"><?php echo number_format($tt) ?></td>
												<td class="product-edit"><a href="#">Edit</a></td>
												<td class="product-remove"><a href="?controller=cart_user3&&act=dell_sanpham&&id=<?php echo $v['id_sanpham'] ?>"  ><i class="pe-7s-close"></i></a></td>
											</tr>
										<?php 
											}
										}
										?>
										</tbody>
					
									
									</table>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="coupon">
											<input type="submit" name="soluong_update" value="update cart" />
											<span>do you have coupon code</span>
											<input type="text" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5 col-md-offset-7">
										<div class="cart-totals">
											<h2>Total</h2>
											<div class="table-cart table-responsive">
												<table>
													<tbody class="cart-totals-list">
														<tr>
															<th>Subtotal</th>
															<td><?php echo number_format($total) ?></td>
														</tr>
														<!-- <tr>
															<th>Discount</th>
															<td><span>no discount or coupon code</span></td>
														</tr>
														<tr>
															<th>Shipping</th>
															<td><p>free shipping</p></td>
														</tr> -->
														<tr class="cart-total">
															<th>Total</th>
															<td><?php echo number_format($total) ?></td>
														</tr>
													</tbody>
												</table>
												<div class="we-proceed-to-checkout">
													<a href="#">proceed to chackout</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- SHOPPING-CART-AREA END -->
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