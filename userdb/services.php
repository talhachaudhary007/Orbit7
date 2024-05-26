<?php include 'header.php'; 
$select = mysqli_query($database,"SELECT * FROM `service`");
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
					</ul>				
				</div>
			</div>

			<div class="portfolio-box with-4-col">
				<div class="container">
					<ul class="filter">
						<li><a href="#" class="active" data-filter="*"><i class="fa fa-th"></i>Show All</a></li>
						<li><a href="#" data-filter=".web-design">Web Design</a></li>
						<li><a href="#" data-filter=".photography">Photography</a></li>
						<li><a href="#" data-filter=".nature">Nature</a></li>
						<li><a href="#" data-filter=".logo">Logo</a></li>
						<li><a href="#" data-filter=".brochures">Brochures</a></li>
						<li><a href="#" data-filter=".website">Website</a></li>
					</ul>

					<div class="portfolio-container">

					<?php while($rec = mysqli_fetch_array($select)){?>

							<div class="work-post web-design brochures">
								<div class="work-post-gal">
									<img alt="" src="../admindb/assets/images/service-img/<?php echo $rec['image'] ?>">
									<div class="hover-box">
										<a class="zoom video" href="https://www.youtube.com/watch?v=h_5sQjRrFIs"><i class="fa fa-plus-circle"></i></a>
										<a class="page" href="service-detail.php?id=<?php echo $rec['id'];?>"><i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
								<div class="work-post-content">
									<h2><a href="service-detail.php?id=<?php echo $rec['id'];?>"> <?php echo $rec['title'];?> </a></h2>
									<span><?php echo $rec['description'];?></span>
								</div>
							</div>
					<?php } ?>		

					</div>

					<ul class="pagination-list">
						<li><a class="active" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>				
				</div>
			</div>

		</div>
		<!-- End content -->


		<!-- footer 
		<?php include 'footer.php'; ?>