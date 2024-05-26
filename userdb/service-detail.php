
<?php
include 'php/database.php';
include 'header.php';
$id = $_GET['id'];
$select = mysqli_query($database, "SELECT * FROM `service` WHERE `id`='$id'");
$rec = mysqli_fetch_array($select);
?>

		<!-- content 
			================================================== -->
		<div id="content">

			<!-- Page Banner -->
			<div class="page-banner">
				<div class="container">
					<h2>Portfolio</h2>
					<ul class="page-tree">
						<li><a href="#">Home</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Attractive Admin UI</a></li>
					</ul>				
				</div>
			</div>

			<!-- blog-box Banner -->
			<div class="single-project-page">
				<div class="container">
					<div class="row">

						<div class="col-md-9">
							<div class="single-project-content">
								<img alt="" src="../admindb/assets/images/service-img/<?php echo $rec['image']; ?>">
								<h2><?php echo $rec['title']; ?></h2>
								<p><?php echo $rec['description']; ?></p>
							</div>
						</div>

						<div class="col-md-3 sidebar">
							<div class="sidebar-widgets">
								<div class="tags-widget widget">
									<h5>Tags</h5>
									<ul class="tag-widget-list">

					<?php
						$ser_tags = explode(",", ($rec["tags"]));
						// Loop through each value and create a span element
						foreach ($ser_tags as $show) {
						?>
							<li><a href="#"><?php echo $show; ?></a></li>
					<?php
					}
					?>
									</ul>
								</div>

								<div class="text-widget widget">
									<h5>Text Widget</h5>
									<p><?php echo $rec['detail']; ?></p>
								</div>

							</div>
						</div>
					</div>

					<div class="latest-projects">
						<h3>Latest Projects</h3>
						<div class="row">
							<div class="col-md-4">
								<div class="work-post">
									<div class="work-post-gal">
										<img alt="" src="upload/image1.jpg">
										<div class="hover-box">
											<a class="zoom video" href="https://www.youtube.com/watch?v=h_5sQjRrFIs"><i class="fa fa-plus-circle"></i></a>
											<a class="page" href="single-project.html"><i class="fa fa-arrow-circle-right"></i></a>
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
											<a class="page" href="single-project.html"><i class="fa fa-arrow-circle-right"></i></a>
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
											<a class="zoom video" href="http://www.youtube.com/watch?v=6v2L2UGZJAM"><i class="fa fa-plus-circle"></i></a>
											<a class="page" href="single-project.html"><i class="fa fa-arrow-circle-right"></i></a>
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
		<!-- End content -->

		<?php include 'footer.php'; ?>