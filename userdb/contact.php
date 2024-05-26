<?php include 'header.php'; ?>

		<!-- content 
			================================================== -->
		<div id="content">

			<!-- contact box -->
			<div class="contact-box">
				<div class="container">
					<div class="row">

						<div class="col-md-3">
							<div class="contact-information">
								<h3>Contact info</h3>
								<ul class="contact-information-list">
									<li><span><i class="fa fa-home"></i>lorem ipsum street</span></li>
									<li><span><i class="fa fa-phone"></i>9930 1234 5679</span></li>
									<li><a href="#"><i class="fa fa-envelope"></i>info@orbit7.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3">
							<div class="contact-information">
								<h3>Working hours</h3>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit duis set odio sit amet nibh vulputate cursus </p>
								<p class="work-time"><span>Mon - Fri</span> : 10 AM to 5 PM</p>
								<p class="work-time"><span>Sat - Sun</span> : 10 AM to 2 PM</p>
							</div>
						</div>

						<div class="col-md-6">
							<h3>Send us a message</h3>
							<form id="contact-form">

								<div class="text-input">
									<div class="float-input">
										<input name="name" id="name" type="text" placeholder="name">
										<span><i class="fa fa-user"></i></span>
									</div>

									<div class="float-input2">
										<input name="mail" id="mail" type="text" placeholder="email">
										<span><i class="fa fa-envelope"></i></span>
									</div>
								</div>

								<div class="textarea-input">
									<textarea name="comment" id="comment" placeholder="message"></textarea>
									<span><i class="fa fa-comment"></i></span>
								</div>

								<div id="msg" class="message"></div>
								<input type="submit" id="submit_contact" value="Send Message">

							</form>
						</div>

					</div>
				</div>
			</div>

		</div>
		<!-- End content -->
		<?php include 'footer.php'; ?>

		