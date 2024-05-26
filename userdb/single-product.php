<?php include 'header.php';
include 'php/database.php';
$CPN = $_GET['cpn'];
$select = mysqli_query($database, "SELECT * FROM `product` WHERE `Coupon`='$CPN'");
$rec = mysqli_fetch_array($select);

if(isset($_SESSION['user_session'])){
echo $_SESSION['user_session'];
}else{
	echo "please login";
}
?>
<style>
	.purchase {
		width: 100%;
		text-align: center;
		padding: 10px;
		font-size: 18px;
		border: none;
	}

	.btn-purchase {
		margin-top: 20px;
	}
</style>

<div class="container">
	<div class="row" style="margin-top:70px; margin-bottom:20px">

	<div class="col-md-7">
    <div class="border rounded-4">
        <a class="rounded-4" target="_blank" id="main-image-link">
            <img style="width: 100%; height: 345px; margin: auto; object-fit: cover;" id="main-image" class="rounded-4 fit" src="" alt="Main Image"/>
        </a>
    </div>
    <div class="small-image-box">

        <?php
            $db_imgs = $rec['Images'];
            $db_imgs = rtrim($db_imgs, "~");
            $allimages = explode("~", $db_imgs);
            // Display the first image in the main image container by default
            $firstImage = $allimages[0];
        ?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                // Set the main image source to the first image on page load
                var firstImageUrl = "../admindb/assets/images/product-img/<?php echo $firstImage ?>";
                $('#main-image').attr('src', firstImageUrl);
                $('#main-image-link').attr('href', firstImageUrl);

                // Update the main image when a thumbnail is clicked
                $('.small-image').on('click', function(e) {
                    e.preventDefault();
                    var largeImageUrl = $(this).data('full');
                    $('#main-image').attr('src', largeImageUrl);
                    $('#main-image-link').attr('href', largeImageUrl);
                });
            });
        </script>

        <?php
            // Loop through each value and create a span element
            foreach ($allimages as $show) {
                $imagePath = "../admindb/assets/images/product-img/$show";
        ?>
            <a class="border mx-1 rounded-2 small-image" data-full="<?php echo $imagePath; ?>">
                <img width="60" height="60" style="object-fit: cover; border: 1px solid #524e4e5c" class="rounded-2 child-imgs" src="<?php echo $imagePath; ?>" alt="Thumbnail"/>
            </a>
        <?php
            }
        ?>

    </div>
</div>

		<!-- ================================= -->
		<div class="col-md-5">
			<div class="product_hero_disc">
				<div class="product_name">
					<?php echo $rec['Name'];?>
				</div>

				<div class="product_disc">
					<?php echo $rec['Description'];?>
				</div>
				<div class="prduct-price"><b>
						<?php echo $rec['NewPrice'].".00$";?>
					</b><s>
						<?php echo $rec['OldPrice'].".00$";?>
					</s></div>
				<div class="product_feture-box">
					<div class="product_feture">
						<div class="color">
							<?php echo $rec['Variant1'];?>
						</div>

						<?php
							$varinat1Values = explode(",", ($rec["VariantValue2"]));
							// Loop through each value and create a span element
							foreach ($varinat1Values as $show) {
							?>
						<span class="color_item">
							<?php echo $show; ?>
						</span>
						<?php
							}
							?>

					</div>
				</div>
				<div class="product_feature1">
					<div class="color">
						<?php echo $rec['Variant2']; ?>
					</div>

					<?php
							$varinat2Values = explode(",", ($rec["VariantValue1"]));
							foreach ($varinat2Values as $show) {
							?>
					<span class="color_item">
						<?php echo $show; ?>
					</span>
					<?php
							}
							?>

				</div>
			</div>


			<div class="container mt-5">
				<div class="row ">
					<div class=" text-center">

						<div class="input-group mt-3">
							<div class="quentity" style="display:flex;margin-top:20px;">
								<div class="input-group-prepend">
									<button class="btn btn-outline-secondary" type="button"
										onclick="decrease()">-</button>
								</div>
								<input type="text" style="width: 100px;" id="quantity" class="form-control text-center"
									value="0">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="button"
										onclick="increase()">+</button>
								</div>
							</div>

						</div>

						<a href="cart.php"> <button class="btn btn-primary btn-purchase" style="width: 400px;"
								onclick="addToCart()">Add To Cart</button></a>
						<button class="btn btn-success btn-purchase" style="width: 400px;" onclick="buyNow()">Buy
							Now</button>
					</div>
				</div>
			</div>
		</div>

		<script>
			function increase() {
				var quantity = document.getElementById("quantity");
				quantity.value = parseInt(quantity.value) + 1;
			}

			function decrease() {
				var quantity = document.getElementById("quantity");
				if (quantity.value > 0) {
					quantity.value = parseInt(quantity.value) - 1;
				}
			}

		</script>
	</div>
</div>
</div>
</div>
<!-- nav -->
<div class="container ">
	<div class="row ">
		<div class="col-md-12 nav_outer">
			<ul class="nav m-auto nav-edit">
				<li class="nav-item">
					<a class="" id='disc' aria-current="page">Description</a>
				</li>
				<li class="nav-item">
					<a class="" id='adt-inf'>Additional Information</a>
				</li>
				<li class="nav-item">
					<a class="" aria-current="page" id='return-policy'>
						Shipping & Return</a>
				</li>
				<li class="nav-item">
					<a class="" id='reviw-cont'>
						Review</a>
				</li>


			</ul>
			<hr>
		</div>
		<div class="col-md-12" id="discription_overall">
			<div>
				<h4 class="mt-3">Overview:</h4>
				<p>
					<?php echo $rec['Description'];?>
				</p>

			</div>
		</div>
		<div class="col-md-12" id="adtinfo">
			<div>
				<h4 class="mt-3">Extra Information:</h4>
				<p>
					<?php echo $rec['Information'];?>
				</p>


			</div>
		</div>
		<div class="col-md-12">
			<div id="returnpolicy">
				<h4 class="mt-3">Returns Policy</h4>
				<p>
					<?php echo $rec['Policy'];?>
				</p>

			</div>
		</div>
		<div class="col-md-12" id="reviwcont">
			<div class="cust-rev mt-3">

				<div class="row">
					<div class="col-md-6">

						<form class="form-edit">
							<div class="mb-3">
								<label for="" class="form-label">Name</label>
								<input type="text" class="form-control" id="" placeholder="Enter Your Name">
							</div>
							<div class="mb-3">
								<label for="" class="form-label">Email</label>
								<input type="email" class="form-control" id="" placeholder="Enter Your Email">
							</div>
							<div class="over_view view_ d-flex" style="margin-bottom: 10px;">


							</div>
							<div class="mb-3">
								<label for="" class="form-label">Review Title</label>
								<input type="text" class="form-control" id="" placeholder="Enter Review Title">
							</div>
							<div class="form-group">
								<label for="comment">Body Of Review (1500)</label>
								<textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
							<button type="submit" class="btn btn-primary btn-primaryedt">Submit Review</button>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="single-project-page">
	<div class="container">
		<div class="row">

			<div class="latest-projects">
				<h3>Latest Projects</h3>
				<div class="row">
					<div class="col-md-4">
						<div class="work-post">
							<div class="work-post-gal">
								<img alt="" src="upload/image1.jpg">
								<div class="hover-box">
									<a class="zoom video" href="https://www.youtube.com/watch?v=h_5sQjRrFIs"><i
											class="fa fa-plus-circle"></i></a>
									<a class="page" href="single-project.html"><i
											class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<div class="work-post-content">
								<h2>Attractive Admin UI</h2>
								<span>short description of portfolio item</span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="work-post">
							<div class="work-post-gal">
								<img alt="" src="upload/image2.jpg">
								<div class="hover-box">
									<a class="zoom" href="upload/image2.jpg"><i class="fa fa-plus-circle"></i></a>
									<a class="page" href="single-project.html"><i
											class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<div class="work-post-content">
								<h2>Green Leaf Falling Dawn</h2>
								<span>short description of portfolio item</span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="work-post">
							<div class="work-post-gal">
								<img alt="" src="upload/image3.jpg">
								<div class="hover-box">
									<a class="zoom video" href="http://www.youtube.com/watch?v=6v2L2UGZJAM"><i
											class="fa fa-plus-circle"></i></a>
									<a class="page" href="single-project.html"><i
											class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<div class="work-post-content">
								<h2>Beautiful Wallpaper</h2>
								<span>short description of portfolio item</span>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

</div>

<?php include 'footer.php';?>