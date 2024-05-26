<?php include 'header.php'; 
$select = mysqli_query($database,"SELECT * FROM `product`");

?>

		<!-- content 
			================================================== -->
		<div id="content">

			<!-- Page Banner -->
			<div class="page-banner">
				<div class="container">
					<h2>Shop</h2>
					<ul class="page-tree">
						<li><a href="#">Home</a></li>
						<li><a href="#">Shop</a></li>
					</ul>				
				</div>
			</div>

			<!-- shop-page -->
			<div class="shop-page">
				<div class="container">
					<div class="row">

						<div class="col-md-9 shop-section">
							<div class="top-bar">
								<div class="left-block">
									<form class="select-filter">
										<label>Sort by</label>
										<div class="select-box">
											<select class="categories" tabindex="1">
												<option>Position</option>
												<option>option 2</option>
												<option>option 3</option>
												<option>option 4</option>
											</select>
										</div>
										<label>Show</label>
										<div class="select-box">
											<select class="categories" tabindex="1">
												<option>5 per page</option>
												<option>6 per page</option>
												<option>7 per page</option>
												<option>8 per page</option>
											</select>
										</div>
									</form>
								</div>

								<div class="right-block">
									<span>View as</span>
									<a href="#"><i class="fa fa-th-large"></i></a>
									<a href="#"><i class="fa fa-th-list"></i></a>
								</div>
							</div>

							

							<div class="row">
							<?php while($rec = mysqli_fetch_array($select)){?>

								<div class="col-md-4">
									<div class="product-post">
										<div class="product-post-gal">
											<img alt="" src="upload/image7.jpg">
											<span class="price"><?php echo $rec['NewPrice'];?></span>
										</div>
										<div class="product-post-content">
											<a href='single-product.php?cpn=<?php echo $rec['Coupon'];?>'><?php echo $rec['Name'];?></a>
											<ul class="product-list">
												<li><a class="like" href="#"><i class="fa fa-heart"></i></a></li>
												<li><a class="shop" href="#"><i class="fa fa-shopping-cart"></i></a></li>
												<li><a class="rev" href="#"><i class="fa fa-exchange"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<?php }?>
							</div>
							<div class="col-md-12">
							<ul class="pagination-list " style="text-align: center;">
								<li><a class="active" href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
							</ul>
							</div>
						</div>


						<div class="col-md-3 shop-sidebar">
							<div class="sidebar-widgets">
								<div class="shop-widget">
									<h4>Categories</h4>
									<ul class="category-shop-list">
										<li>
											<a class="accordion-link" href="#">Watches <span>(4)</span></a>
											<ul class="accordion-list-content">
												<li><a href="#">Jackets <span>(7)</span></a></li>
												<li><a href="#">Electronics <span>(10)</span></a></li>
												<li><a href="#">Sports <span>(12)</span></a></li>
												<li><a href="#">Garden <span>(2)</span></a></li>
											</ul>
										</li>
										<li>
											<a class="accordion-link" href="#">Jewellery <span>(8)</span></a>
											<ul class="accordion-list-content">
												<li><a href="#">Jackets <span>(7)</span></a></li>
												<li><a href="#">Electronics <span>(10)</span></a></li>
												<li><a href="#">Sports <span>(12)</span></a></li>
												<li><a href="#">Garden <span>(2)</span></a></li>
											</ul>
										</li>
										<li>
											<a class="accordion-link" href="#">Technology <span>(6)</span></a>
											<ul class="accordion-list-content">
												<li><a href="#">Jackets <span>(7)</span></a></li>
												<li><a href="#">Electronics <span>(10)</span></a></li>
												<li><a href="#">Sports <span>(12)</span></a></li>
												<li><a href="#">Garden <span>(2)</span></a></li>
											</ul>
										</li>
										<li>
											<a class="accordion-link" href="#">Kids <span>(5)</span></a>
											<ul class="accordion-list-content">
												<li><a href="#">Jackets <span>(7)</span></a></li>
												<li><a href="#">Electronics <span>(10)</span></a></li>
												<li><a href="#">Sports <span>(12)</span></a></li>
												<li><a href="#">Garden <span>(2)</span></a></li>
											</ul>
										</li>
										<li>
											<a class="accordion-link" href="#">Electronics <span>(4)</span></a>
											<ul class="accordion-list-content">
												<li><a href="#">Jackets <span>(7)</span></a></li>
												<li><a href="#">Electronics <span>(10)</span></a></li>
												<li><a href="#">Sports <span>(12)</span></a></li>
												<li><a href="#">Garden <span>(2)</span></a></li>
											</ul>
										</li>
										<li>
											<a class="accordion-link" href="#">Sports <span>(5)</span></a>
											<ul class="accordion-list-content">
												<li><a href="#">Jackets <span>(7)</span></a></li>
												<li><a href="#">Electronics <span>(10)</span></a></li>
												<li><a href="#">Sports <span>(12)</span></a></li>
												<li><a href="#">Garden <span>(2)</span></a></li>
											</ul>
										</li>
										<li>
											<a class="accordion-link" href="#">Bicycles <span>(7)</span></a>
											<ul class="accordion-list-content">
												<li><a href="#">Jackets <span>(7)</span></a></li>
												<li><a href="#">Electronics <span>(10)</span></a></li>
												<li><a href="#">Sports <span>(12)</span></a></li>
												<li><a href="#">Garden <span>(2)</span></a></li>
											</ul>
										</li>
									</ul>
								</div>

								<div class="shop-widget">
									<h4>Price Filter</h4>

									<div class="price-range">
										<!-- div to become a slider -->
										<div class="noUiSlider"></div>
										<input type="text" id="start-val"/>
										<input type="text" id="end-val"/>
									</div>

								</div>

								<div class="shop-widget">
									<h4>Popular Products</h4>
									<ul class="popular-product">
										<li>
											<img alt="" src="images/product.png">
											<div>
												<h6><a href="#">Iphone 5 black</a></h6>
												<span>$766.00</span>
											</div>
										</li>
										<li>
											<img alt="" src="images/product2.png">
											<div>
												<h6><a href="#">Samasung Galaxy note 3</a></h6>
												<span>$555.00</span>
											</div>
										</li>
										<li>
											<img alt="" src="images/product.png">
											<div>
												<h6><a href="#">Iphone 5 black</a></h6>
												<span>$766.00</span>
											</div>
										</li>
										<li>
											<img alt="" src="images/product2.png">
											<div>
												<h6><a href="#">Samasung Galaxy note 3</a></h6>
												<span>$555.00</span>
											</div>
										</li>
									</ul>
								</div>

							</div>
						</div>
					</div>
											
				</div>
			</div>

		</div>
		<!-- End content -->

		<?php include 'footer_h.php'; ?>