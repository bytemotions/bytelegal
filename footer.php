	<!-- Footer Starts -->
    <footer class="main-footer">
		<!-- Footer Links Starts -->
			<div class="footer-links text-center">
			<!-- Nested Container Starts -->
				<!--<div class="container">-->
				<!-- Nested Row Starts -->
					<!--<div class="row">-->
					<!-- Foot Col #1 Starts -->
						<!-- <div class="col-md-12 col-sm-12 col-xs-12">-->
							<h4 class="text-light-color">Síguenos en las redes sociales</h4>
							<!--Fotter social menu-->
							<?php wp_nav_menu( 
								array( 	'theme_location'  => 'footer-social',
										  'menu_class'    => 'list-unstyled list-inline sm-foot-links'	) ); 
							?><!--Fotter social menu-->
					<!--	<div> -->
					<!-- Foot Col #1 Ends -->
					<!--</div> -->
				<!-- Nested Row Ends -->
				<!--</div>-->
			<!-- Nested Container Ends -->
			</div>
		<!-- Footer Links Ends -->
		<!-- Copyright Starts -->
			<div class="copyright">
			<!-- Nested Container Starts -->
				<div class="container">
					<!--<h5 class="text-center text-uppercase text-light-color">Horario de Oficina</h5>-->
					<h6 class="text-center">Luneas a Jueves 9:00 AM to 17:30 hs &amp; Viernes 9:00 AM to 14:00 hs</h6>
					
					<div class="clearfix text-center-sm text-center-xs">
						<span class="pull-left-lg pull-left-md">Irusta Asociados &copy; 2017, Todos los derechos reservados.</span>
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