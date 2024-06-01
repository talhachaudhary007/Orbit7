<?php include 'header.php';
include 'php/database.php';
$productID = $_GET['id'];
$select = mysqli_query($database, "SELECT * FROM `product` WHERE `id`='$productID'");
$rec = mysqli_fetch_array($select);
$session_user = $_SESSION['user_session'];

$selectImgs = mysqli_query($database, "SELECT * FROM `product_meta` WHERE `productID`='$productID'");

// user select for review name of user
$select_user = mysqli_query($database, "SELECT * FROM `orbitusers` WHERE `id` = '$session_user'");
$rec_user = mysqli_fetch_array($select_user);


// $showimgs

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

	<!-- image gallery using php and jquery -->

	<div class="col-md-7">
    <div class="border rounded-4">
        <a class="rounded-4" target="_blank" id="main-image-link">
            <img style="width: 100%; height: 345px; margin: auto; object-fit: cover;" class="rounded-4 fit parent-img"
                src="" alt="Main Image" id="main-image" />
        </a>
    </div>
    <div class="small-image-box">
        <?php
        while($recImgs = mysqli_fetch_array($selectImgs)){
        ?>
        <a class="border mx-1 rounded-2 small-image">
            <img width="60" height="60" class="rounded-2 child-img"
                src="<?php echo '../admindb/assets/images/product-img/'.$recImgs['Image'] ?>"
                alt="Thumbnail 1" />
        </a>
        <?php	
        }
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Set the first child image as the main image on page load
        var firstChildImgSrc = $('.child-img').first().attr('src');
        $('#main-image').attr('src', firstChildImgSrc);
        $('#main-image-link').attr('href', firstChildImgSrc);

        // Update the main image when a specific child image is clicked
        $('.child-img').on('click', function() {
            var childImgSrc = $(this).attr('src');
            $('#main-image').attr('src', childImgSrc);
            $('#main-image-link').attr('href', childImgSrc);
        });
    });
</script>

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
								onclick="addToCart()">Add To Cart </button></a>
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
				<div class="col-md-8" style="text-align:left !important;">
          <?php
		  $select_rev = mysqli_query($database, "SELECT * FROM `reviews` WHERE `productId`='$productID'");
          while($rec_rev = mysqli_fetch_array($select_rev)){
			$UserID = $rec_rev['userId'];
			$RevStars = $rec_rev['stars'];
			$GetUserName = mysqli_query($database, "SELECT * FROM `orbitusers` WHERE `id`='$UserID'");
			$ud = mysqli_fetch_array($GetUserName);
			?>
            <div class="review-card">
                <div class="review-title">
                    <img src="https://via.placeholder.com/50" alt="Profile Icon" class="profile-icon">
                    <!-- <div> -->
                        <h4 class=""><?php echo $ud['name']; ?></h4>
						<div class="star-rating">
						<?php 
							for($i = 1; $i <=5; $i++){
						?>
                            <label for="star1-john" <?php if($i <= $RevStars){echo 'style="color:gold;"';} ?>>&#9733;</label>
						<?php } ?>
                        </div>
                    <!-- </div> -->
				</div>
				<p class="review-time">Posted on <?php  echo date('l-F-Y' , strtotime($rec_rev['dateTime']));?></p>
                <div class="review-comment">
                    <span><?php echo $rec_rev['comment'];?></span>
                </div>
            </div>
			<?php } ?>
        </div>

		<style>
.review-title{
	display: flex;
    flex-direction: row;
    align-items: center;
}	
.review-title h4{
	font-weight: 600;
	margin-left: 15px;
}
.review-comment{
	margin-top: 10px;
}		
.review-comment span{
	font-size: 15px;

}
.star-rating {
	margin-left: auto; /* Pushes the last div to the far end */
}
.star-rating input {
    display: none;
}
.star-rating label {
    font-size: 2em;
    color: lightgray;
    cursor: pointer;
}
.star-rating input:checked ~ label {
    color: gold;
}
.review-card {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    /* margin-bottom: 20px; */
}
.profile-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}
.review-time {
    color: #888;
    font-size: 12px;
    margin-left: 66px;
    margin-top: -18px;
}
		</style>
			
		<div class="col-md-4" style="text-align: left !important;">
		<?php
	$Check_review = mysqli_query($database, "SELECT * FROM `reviews` WHERE `productId`='$productID' AND `userId`='$session_user'");
	$num_rewa = mysqli_num_rows($Check_review);
	
	if ($num_rewa > 0) {
		
			echo "Feedback already given";
		} else {
		?>  
		<form method='post' action='php/review.php'>
			<div class="form-group">
				<label for="reviewStars">Rating:</label>
				<div class="star-container">
					<input type="radio" class="star-radio" id="star5" name="rating" value="5">
					<label for="star5" class="star-label" data-value="5">&#9733;</label>
					
					<input type="radio" class="star-radio" id="star4" name="rating" value="4">
					<label for="star4" class="star-label" data-value="4">&#9733;</label>
					
					<input type="radio" class="star-radio" id="star3" name="rating" value="3">
					<label for="star3" class="star-label" data-value="3">&#9733;</label>
					
					<input type="radio" class="star-radio" id="star2" name="rating" value="2">
					<label for="star2" class="star-label" data-value="2">&#9733;</label>
					
					<input type="radio" class="star-radio" id="star1" name="rating" value="1">
					<label for="star1" class="star-label" data-value="1">&#9733;</label>
				</div>
			</div>
			
			<div class="form-group">
				<input type="text" value="<?php echo $productID;?>" hidden name="prod_id">
				<input type="text" value="<?php echo $session_user;?>" hidden name="userId">
				<label for="reviewText">Your Review:</label>
				<textarea class="form-control" name='comment' id="reviewText" rows="4" placeholder="Write your review here..."></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit Review</button>
		</form>
	<?php
	}
	?>
	
			<!-- review jquery -->
			<script>
     document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star-label');

            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const rating = this.getAttribute('data-value');
                    stars.forEach(star => {
                        if (star.getAttribute('data-value') <= rating) {
                            star.style.color = '#ffcc00';
                        } else {
                            star.style.color = '#ccc';
                        }
                    });
                });
            });
        });
</script>
			<!--  -->
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