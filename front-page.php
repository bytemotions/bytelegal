<?php get_header(); ?>

<?php
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
?> 

	<!-- Slider Starts -->
	<div id="main-slider" class="carousel slide" data-ride="carousel">
		<!-- Wrapper For Slides Starts -->
			<div class="carousel-inner text-center">
			<!-- Slide #1 Starts -->
				<div class="item active">
					<img src="<?php echo get_theme_file_uri( 'assets/images/slider/slider-clausula-suelo.png' ); ?>" alt="imagen de cláusulas suelo" class="img-responsive">
					<div class="carousel-caption hidden-xs" style="color: black; text-align: left">
						<h2 class="text-thin"  style="color: black;
						text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;">
						<b>¿Le han cobrado la cláusula suelo?</b></h2>
						<h1 class="text-light" style="color: black">Recupere su dinero</h1>
						<p>El <i>Tribunal de Justicia de la Unión Europea</i> ha obligado a la banca<br>
						a <b>devolver todo lo pagado desde el inicio de la hipoteca</b>.</p>
						<a href="#" class="btn btn-secondary animation text-uppercase flat">Le decimos cómo hacerlo</a>
					</div>
				</div>
			<!-- Slide #1 Ends -->
			<!-- Slide #2 Starts -->
				<div class="item">
					<img src="<?php echo get_theme_file_uri( 'assets/images/slider/slider-gastos-hipoteca2.png' ); ?>" alt="Slide 2" class="img-responsive">
					<div class="carousel-caption hidden-xs" style="color: white; text-align: left">
						<h2 class="text-thin"  style="text-shadow: 2px 0 0 black, -2px 0 0 black, 0 2px 0 black, 0 -2px 0 black, 1px 1px black, -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black;">
						<b>¿Ha firmado alguna cláusula abusiva?</b></h2>
						<h1 class="text-light">Consúltenos</h1>
						<p>Tenemos una amplia experiencia en litigios con la banca.<br />
						   Intereses de demora, vencimiento anticipado, redondeo al alza...
						</p>
						<a href="#" class="btn btn-secondary animation text-uppercase flat">Cuéntenos su caso</a>
					</div>
				</div>
			<!-- Slide #2 Ends -->
			<!-- Slide #2 Starts -->
				<div class="item">
					<img src="<?php echo get_theme_file_uri( 'assets/images/slider/slider-indice-irph.png' ); ?>" alt="Slide 2" class="img-responsive">
					<div class="carousel-caption hidden-xs" style="color: black; text-align: left">
						<h2 class="text-thin"  style="text-shadow: 2px 0 0 black, -2px 0 0 black, 0 2px 0 black, 0 -2px 0 black, 1px 1px black, -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black;">
						<b>¿Le han aplicado el índice IRPH?</b></h2>
						<h1 class="text-light" style="color: black">Revíselo ahora</h1>
						<p>Ya son miles los clientes de bancos y antiguas cajas los que han <br />
						   presentado denuncias ante los tribunales para que se revise su hipoteca
						</p>
						<a href="#" class="btn btn-secondary animation text-uppercase flat">Cuéntenos su caso</a>
					</div>
				</div>
			<!-- Slide #2 Ends -->			
			</div>
		<!-- Wrapper For Slides Ends -->
		<!-- Controls Starts -->
			<a class="left carousel-control" href="#main-slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#main-slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		<!-- Controls Ends -->
		</div>
	<!-- Slider Ends -->



	<!-- Legal Practice Section Starts -->
	<section class="section-area">
		<!-- Nested Container Starts -->
			<div class="container">
				<h3 class="main-heading-1 text-center">Áreas de Práctica</h3>				
			<!-- Nested Row Starts -->
				<ul class="row list-unstyled list-style-2 text-center">
				<!-- Col #1 Starts -->
					<li class="col-md-3 col-sm-6 col-xs-12">
						<h6>Familia y suceciones</h6>
						<p><i class="fa fa-bank"></i></p>
						<p> Separación, divorcio y nulidad matrimonial civil y eclesiástica. Disolución y liquidación de régimen matrimonial</p>
						<a href="area-familia-y-suceciones">ver más</a>
					</li>
				<!-- Col #1 Ends -->
				<!-- Col #2 Starts -->
					<li class="col-md-3 col-sm-6 col-xs-12">
						<h6>Mercantil</h6>
						<p><i class="fa fa-cubes"></i></p>
						<p>Contratación general. Asesoramiento integral de empresas y autónomos. Concursos de acreedores</p>
						<a href="area-mercantil">ver más</a>
					</li>
				<!-- Col #2 Ends -->
				<!-- Col #3 Starts -->
					<li class="col-md-3 col-sm-6 col-xs-12">
						<h6>Civil</h6>
						<p><i class="fa fa-cloud-download"></i></p>
						<p>Reclamación de impagados, indemnizaciones, desahucios, contratos</p>
						<a href="area-derecho-civil">ver más</a>
					</li>
				<!-- Col #3 Ends -->
				<!-- Col #4 Starts -->
					<li class="col-md-3 col-sm-6 col-xs-12">
						<h6>Penal</h6>
						<p><i class="fa fa-cube"></i></p>
						<p>Homicidios y asesinatos. ​Violencia de género y doméstica, Lesiones​, amenazas, coacciones</p>
						<a href="area-derecho-penal">ver más</a>
					</li>
				<!-- Col #4 Ends -->
				<!-- Col #5 Starts -->
					<li class="col-md-3 col-sm-6 col-xs-12">
						<h6>Vivienda</h6>
						<p><i class="fa fa-connectdevelop"></i></p>
						<p>Desahucios, contratos de renta antigua, redacción de Contratos, devolución de la fianza del alquiler</p>
						<a href="area-derecho-inmobiliario">ver más</a>
					</li>
				<!-- Col #5 Ends -->
				<!-- Col #6 Starts -->
					<li class="col-md-3 col-sm-6 col-xs-12">
						<h6>Herencias</h6>
						<p><i class="fa fa-area-chart"></i></p>
						<p>Aceptación de herencia, impugnación de testamentos, herencias internacionales</p>
						<a href="area-herencias">ver más</a>
					</li>
				<!-- Col #6 Ends -->
				<!-- Col #7 Starts -->
					<li class="col-md-3 col-sm-6 col-xs-12">
						<h6>Fiscal</h6>
						<p><i class="fa fa-binoculars"></i></p>
						<p>Fiscalidad nacional e internacional, negociaciones y contratos, fusiones y adquisiciones</p>
						<a href="area-fiscal">ver más</a>
					</li>
				<!-- Col #7 Ends -->
				<!-- Col #8 Starts -->
					<li class="col-md-3 col-sm-6 col-xs-12">
						<h6>Laboral</h6>
						<p><i class="fa fa-book"></i></p>
						<p>Reclamaciones de salarios e impagos. acoso laboral, mobbing, falso autónomo</p>
						<a href="area-laboral">ver más</a>
					</li>
				<!-- Col #8 Ends -->
				</ul>
			<!-- Nested Row Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Legal Practice Section Ends -->



	<!-- Free Consultation Section Starts -->
		<a name="contact"></a>
		<section class="section-area silver free-consultation-section text-center-sm text-center-xs">		
		<!-- Heading Block Starts -->
			<div class="heading-block">
				<div class="container">
					<h3>Haga su consulta GRATUITA</h3>
					<h5 class="sub-heading-1 text-light text-uppercase">Las leyes son complicadas. Déjenos ayudarle!</h5>
				</div>
			</div>
		<!-- Heading Block Ends -->
		<!-- Nested Container Starts -->
			<div class="container">
			<!-- Nested Row Starts -->
				<div class="row">
				<!-- Form Starts -->
					<div class="col-md-6 col-xs-12">
						<form action="#">
							<div class="form-group">
								<label for="fs-name" class="sr-only">Your Name</label>
								<input type="text" id="fs-name" class="form-control flat" placeholder="Your Name">
							</div>
							<div class="form-group">
								<label for="fs-name" class="sr-only">Your Email</label>
								<input type="email" id="fs-email" class="form-control flat" placeholder="Your Email">
							</div>
							<div class="form-group">
								<label for="fs-contact-no" class="sr-only">Contact Number</label>
								<input type="text" id="fs-contact-no" class="form-control flat" placeholder="Contact Number">
							</div>
							<div class="form-group">
								<label for="fs-msg" class="sr-only">Your Message</label>
								<textarea id="fs-msg" class="form-control flat" rows="8" placeholder="Your Message"></textarea>
							</div>
							<button type="submit" class="btn btn-block btn-secondary text-uppercase flat animation">send message</button>
						</form>
					</div>
				<!-- Form Ends -->
				<!-- Image Block Starts -->
					<div class="col-md-6 col-xs-12 hidden-sm hidden-xs">
						<div class="img-block">
							<img src="<?php echo get_theme_file_uri( 'assets/images/free-consultation-img1.png' ); ?>" alt="Consultation">
						</div>
					</div>
				<!-- Image Block Ends -->
				</div>
			<!-- Nested Row Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Free Consultation Section Ends -->
	
<?php
}
?>

<?php get_footer(); ?>