	<!-- Footer Starts -->
    <footer class="main-footer">
		<!-- Footer Links Starts -->
			<div class="footer-links text-center-xs">
			<!-- Nested Container Starts -->
				<div class="container">
				<!-- Nested Row Starts -->
					<div class="row">
					<!-- Foot Col #1 Starts -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<h4 class="text-light-color">About Law Attorney</h4>
							<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, fermentum massa justo sit amet risus. Sed posuere consec.</p>
							<p>Suspendisse commodo auctor molestie. Mauris arisusvitae massa.</p>
							<!--Fotter social menu-->
							<?php wp_nav_menu( 
								array( 	'theme_location'  => 'footer-social',
										  'menu_class'      => 'list-unstyled list-inline sm-foot-links'	) ); 
							?><!--Fotter social menu-->
						</div>
						
					<!-- Foot Col #1 Ends -->
					<!-- Foot Col #2 Starts -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<h4 class="text-light-color">Practice Areas</h4>
							<ul class="list-unstyled list-style-1">
								<li><a href="#">Family Law</a></li>
								<li><a href="#">Business Law</a></li>
								<li><a href="#">Civil Litigation</a></li>
								<li><a href="#">Trust &amp; Estates</a></li>
								<li><a href="#">Corporate Law</a></li>
								<li><a href="#">Capital Market</a></li>
								<li><a href="#">Personal Injury</a></li>
								<li><a href="#">Employment Law</a></li>
							</ul>
						</div>
					<!-- Foot Col #2 Ends -->
					<!-- Foot Col #3 Starts -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<h4 class="text-light-color">Contact Info</h4>
							<p>Address : 4700 Millenia Blvd #175, Orlando, FL 32839, USA.</p><br>
							<ul class="list-unstyled list-style-1">
								<li>+1800 - 111 - 3333</li>
								<li>+1800 - 111 - 4444</li>
								<li><a href="mailto:support@lawattorny.com">support@lawattorny.com</a></li>
								<li>yourfriend.lawattorny</li>
							</ul>
						</div>
					<!-- Foot Col #3 Ends -->
					<!-- Foot Col #4 Starts -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<h4 class="text-light-color">Our Attorneys</h4>
							<ul class="list-unstyled list-style-1">
								<li><a href="#">Jack Simmons</a></li>
								<li><a href="#">Sainath Chillapuram</a></li>
								<li><a href="#">Jannet Jacksonne</a></li>
								<li><a href="#">Michalal Jai Kishan</a></li>
								<li><a href="#">Muthun Cherkaravarthy</a></li>
								<li><a href="#">Michael Linden</a></li>
								<li><a href="#">Paul Adreson</a></li>
								<li><a href="#">Ram Gopal Varma Kompally</a></li>
							</ul>
						</div>
					<!-- Foot Col #4 Ends -->
					</div>
				<!-- Nested Row Ends -->
				</div>
			<!-- Nested Container Ends -->
			</div>
		<!-- Footer Links Ends -->
		<!-- Copyright Starts -->
			<div class="copyright">
			<!-- Nested Container Starts -->
				<div class="container">
					<h5 class="text-center text-uppercase text-light-color">Office Timings</h5>
					<h6 class="text-center">Mon-Thu 9:00 AM to 5:30 PM &amp; Fri - Sat 10:00 AM to 3:00 PM</h6>
					<div class="clearfix text-center-sm text-center-xs">
						<span class="pull-left-lg pull-left-md">Law Attorney &copy; 2016, All Rights Reserved.</span>
						<!--Fotter links menu-->
						<?php wp_nav_menu( 
							array( 	'theme_location'  => 'footer-links',
									'menu_class'      => 'list-unstyled list-inline pull-right-lg pull-right-md pull-right-sm text-right-lg text-right-md'	) ); 
						?><!--Fotter links menu-->						
					</div>
				</div>
			<!-- Nested Container Ends -->
			</div>
		<!-- Copyright Ends -->
		</footer>
	<!-- Footer Ends -->
	<!-- Template JS Files -->
	<!--
	<script src="<?php echo get_theme_file_uri( 'assets/js/jquery-1.12.3.min.js' ); ?>"></script>
	<script src="<?php echo get_theme_file_uri( 'assets/js/jquery-migrate-1.3.0.min.js' ); ?>"></script>
	<script src="<?php echo get_theme_file_uri( 'assets/js/bootstrap.min.js' ); ?>"></script>
	<script src="<?php echo get_theme_file_uri( 'assets/js/plugins/owl-carousel/owl.carousel.js' ); ?>"></script>
	<script src="<?php echo get_theme_file_uri( 'assets/js/custom.js' ); ?>"></script>
	-->
	<!-- INICIO FOOTER -->
	<?php wp_footer(); ?>
	<!-- FIN FOOTER -->
	</body>
</html>