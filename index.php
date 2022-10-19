<!DOCTYPE html>

<html class="no-js" lang="es">

<head>
	<title>LuzArt - Distribuidora y comercializadora</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="assets/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="assets/css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animations.css">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/icomoon.css">
	<link rel="stylesheet" href="assets/css/filter.css">
	<script src="assets/js/vendor/modernizr-custom.js"></script>

	<!-- captcha -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<style type="text/css">
		.redes-flotantes {
			position: fixed;
			right: 0px;
			top: 87%;
			z-index: 999;
		}

		.redes-flotantes img {
			float: right;
			clear: right;
			margin: 5px;
			-moz-transform: scale(.8);
			-webkit-transform: scale(.8);
			-o-transform: scale(.8);
			-ms-transform: scale(.8);
			transform: scale(.8);
			-webkit-transition: all .2s ease-in-out;
			-moz-transition: all .2s ease-in-out;
			-o-transition: all .2s ease-in-out;
			transition: all .2s ease-in-out;
		}

		.redes-flotantes img:hover {
			-moz-transform: scale(1.1) rotate(6deg);
			-webkit-transform: scale(1.1) rotate(6deg);
			-o-transform: scale(1.1) rotate(6deg);
			-ms-transform: scale(1.1) rotate(6deg);
			transform: scale(1.1) rotate(6deg);
		}
	</style>
</head>

<?php
if (isset($_GET)) {
	include_once("php/msg.php");
}
?>

<body>

	<!-- 
	<div class="preloader">
		<div class="preloader_image"></div>
	</div> -->

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="modal-dialog">
			<div class="fw-messages-wrap ls p-normal">
				<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
				<!--
			<ul class="list-unstyled">
				<li>Message To User</li>
			</ul>
			-->

			</div>
		</div>
	</div><!-- eof .modal -->


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			<!--topline section visible only on small screens|-->
			<section class="page_topline ls ms c-my-10">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-12 d-flex">
							<!--<div class="me-auto me-4">
								<span class="social-icons">

									<span class="color-dark small-text me-4">
										Síguenos:
									</span>

									<a href="#" class="fa fa-facebook @@iconClass" title="facebook"></a>
									 <a href="#" class="fa fa-twitter @@iconClass" title="twitter"></a> 
									<a href="#" class="fa fa-instagram @@iconClass" title="instagram"></a>

								</span>
							</div>-->
							<div>
								<div id="topline_dropdown" class="dropdown meta-dropdown">
									<span id="toplineDropdown" class="nav-btn type-dots dark" data-bs-toggle="dropdown" aria-expanded="false" role="button">
										<span></span>
									</span>
									<ul class="dropdown-menu dropdown-menu-md site-meta" aria-labelledby="toplineDropdown">
										<li class="icon-inline">
											<span class="meta-item"><i class="ico-clock"></i>Lunes-Viernes : 9:00 a 18:00 - Sabado 10:00 a 2:00 pm</span>
										</li>
										<li class="icon-inline">
											<span class="meta-item"><i class="ico-phone"></i><a href="tel:3311729300">331 172 9300</a></span>
										</li>
										<li class="icon-inline">
											<span class="meta-item"><i class="ico-send"></i><a href="mailto:contacto@distribuidoraluzart.com"><span class="__cf_email__">contacto@distribuidoraluzart.com</span></a></span>
										</li>
										<li class="icon-inline">
											<span class="meta-item"><i class="ico-pin"></i>GDL. Jal, George Santayana, Col. Jardines Universidad 45110</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!--eof topline-->

			<!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
			<?php
			include("includes/header.php");
			?>

			<div class='redes-flotantes'>
				<div class="separator" style="clear: both; text-align: left;">
					<a href="https://api.whatsapp.com/send?phone=+5213328343793&text=Hola, quiero más información sobre los servicios de LuzArt." style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" target="_blank"><img border="0" data-original-height="59" data-original-width="59" src="/imagenes/WA.png" /></a>
				</div>
			</div>

			<section class="intro_section page_slider line-gradient">
				<div class="flexslider">
					<ul class="slides slider_height_desktop_850 slider_height_laptop_700 slider_height_tablet_500">
						<li class="slide cover-image ds text-center s-overlay">
							<img src="assets/images/slide04.jpg" alt="img">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12">
										<div class="intro_layers">
											<div class="intro_layer" data-animation="fadeInRight">
												<div class="d-inline-block">
													<h3 class="emptytext bigger text-uppercase">Luz Art</h3>
												</div>
												<div class="d-inline-block text-white mt-xl-3">
													<h4 class="bigger">Distribuidora <br>y comercializadora</h4>
												</div>
											</div>
										</div> <!-- eof .intro_layers -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
						<li class="slide cover-image ds text-center s-overlay">
							<img src="assets/images/slide02.jpg" alt="img">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12">
										<div class="intro_layers">
											<div class="intro_layer" data-animation="fadeInRight">
												<div class="d-inline-block">
													<h3 class="emptytext bigger text-uppercase">Alimentos</h3>
												</div>
												<div class="d-inline-block text-white mt-xl-3">
													<!-- <h4 class="bigger">Distribuidora y comercializadora<span class="color-main4">.</span></h4> -->
												</div>
											</div>
										</div> <!-- eof .intro_layers -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
						<li class="slide cover-image ds text-center s-overlay s-overlay-dark">
							<img src="assets/images/slide03.jpg" alt="img">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12">
										<div class="intro_layers">
											<div class="intro_layer" data-animation="fadeInRight">
												<div class="d-inline-block">
													<h3 class="emptytext bigger text-uppercase">Insumos<br>Médicos</h3>
												</div>
												<div class="d-inline-block text-white mt-xl-3">
													<!-- <h4 class="bigger">Distribuidora y comercializadora<span class="color-main3">.</span></h4> -->
												</div>
											</div>
										</div> <!-- eof .intro_layers -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
						<li class="slide cover-image ds text-center s-overlay s-overlay-dark">
							<img src="assets/images/slide01.jpg" alt="img">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12">
										<div class="intro_layers">
											<div class="intro_layer" data-animation="fadeInRight">
												<div class="d-inline-block">
													<h3 class="emptytext bigger text-uppercase">Herramientas</h3>
												</div>
												<div class="d-inline-block text-white mt-xl-3">
													<!-- <h4 class="bigger">energy</h4> -->
												</div>
											</div>
										</div> <!-- eof .intro_layers -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
					</ul>
				</div> <!-- eof flexslider -->
				<div class="custom-navigation flexslider-count-nav">
					<a href="#" class="flex-prev">
						<svg width="50" height="10" viewBox="0 0 50 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0)">
								<path d="M49.5 5C29.9738 5 20.0262 5 0.5 5L4.5 1" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
							</g>
							<defs>
								<clipPath id="clip0">
									<rect width="50" height="9" transform="translate(0 0.5)" />
								</clipPath>
							</defs>
						</svg>
						<span class="flex-counter"></span>
					</a>
					<a href="#" class="flex-next">
						<span class="flex-counter"></span>
						<svg width="50" height="10" viewBox="0 0 50 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip1)">
								<path d="M0.5 5C20.0262 5 29.9738 5 49.5 5L45.5 9" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
							</g>
							<defs>
								<clipPath id="clip1">
									<rect width="50" height="9" transform="translate(50 9.5) rotate(-180)" />
								</clipPath>
							</defs>
						</svg>
					</a>
				</div>
				<a href="#events" class="ico-link">
					<i class="ico-mouse"></i>
				</a>
			</section>
			<section class="slider-video container-px-0 overflow-visible">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
						</div>
					</div>
				</div>
			</section>

			<!--Events Start-->
			<section id="events" class="ls c-gutter-0 container-px-0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-xl-3">
							<div class="service-shortcode text-center ds position-relative">
								<a href="#">
									<div class="cover-image image-back">
										<img class="h-100 d-none" src="assets/images/events/10.jpg" alt="img">
									</div>
									<div class="z-index-2 position-relative">
										<!-- <i class="ico-wind fs-64 text-white"></i> -->
										<h3 class="mt-2 mb-0 text-uppercase"><span data-content="" class="emptytext">Insumos<br> Médicos</span>
										</h3>
										<!-- <h5 class="mt-1">médicos</h5> -->
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-xl-3">
							<div class="service-shortcode text-center ds position-relative">
								<a href="#">
									<div class="cover-image image-back">
										<img class="h-100 d-none" src="assets/images/events/11.jpg" alt="img">
									</div>
									<div class="z-index-2 position-relative">
										<!-- <i class="ico-water fs-64 text-white"></i> -->
										<h3 class="mt-2 mb-0 text-uppercase"><span data-content="" class="emptytext">Herramientas<br> Truper</span></h3>
										<h5 class="mt-1"></h5>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-xl-3">
							<div class="service-shortcode text-center ds position-relative">
								<a href="#">
									<div class="cover-image image-back">
										<img class="h-100 d-none" src="assets/images/events/12.jpg" alt="img">
									</div>
									<div class="z-index-2 position-relative">
										<!-- <i class="ico-sun fs-64 text-white"></i> -->
										<h3 class="mt-2 mb-0 text-uppercase"><span data-content="" class="emptytext">Semillas<br> y Azucar</span> </h3>
										<h5 class="mt-1"></h5>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-xl-3">
							<div class="service-shortcode text-center ds position-relative">
								<a href="#">
									<div class="cover-image image-back">
										<img class="h-100 d-none" src="assets/images/events/13.jpg" alt="img">
									</div>
									<div class="z-index-2 position-relative">
										<!-- <i class="ico-flame fs-64 text-white"></i> -->
										<h3 class="mt-2 mb-0 text-uppercase"><span data-content="" class="emptytext">Alimentos Canasta Basica</span>
										</h3>
										<!-- <h5 class="mt-1">Canasta Basica</h5> -->
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Events End-->


			<!--About Start-->
			<section class="ls s-py-90 s-pt-xl-150 s-pb-xl-130">
				<div class="container">
					<h2 class="special-heading text-center">
						<span>Sobre Nosotros</span>
					</h2>
					<div class="divider-30 divider-lg-50"></div>
					<p>
						Contamos con un equipo de expertos en la comercialización y distribución de productos en el mercado mexicano, así como un conocimiento amplio en la importación y la exportación de productos en todos los sectores.
						Comercializamos, distribuimos y brindamos soluciones sobre los productos de nuestros clientes y proveedores, brindando calidad y servicio al cliente final.
					</p>
					<p>
						En Distribuidora Luzart creemos en el comercio justo y nos solidarizamos a la situación financiera del mexicano, por lo que ofrecemos productos de la más alta calidad en los mejores precios, tiempos y calidad.
						Sabemos que una buena relación entre ellos garantiza un mayor crecimiento para todos, en especial para nuestros clientes y socios comerciales.
						Contamos con experiencia en diversos sectores que nos permiten ser competitivos contando con distribución Nacional.
					</p>
					<div class="row align-center" style="margin-top: 5rem;">
						<div class="col-lg-5 col-xl-5 offset-xl-1">
							<div class="img-shortcode leaf-wrap">
								<!-- <div class="leaf leaf-left about-1 animate animated" data-animation="fadeInRight" data-delay="150">
									<img src="assets/images/img-leaf-1.png" alt="img">
								</div>
								<div class="leaf leaf-right about-1 animate animated" data-animation="fadeInLeft" data-delay="150">
									<img src="assets/images/img-leaf-2.png" alt="img">
								</div> -->
								<div class="icon-box fs-32 d-inline-flex align-items-center justify-content-center">
									<span class="iq-rotate-text">Mision * Visión * Filosofía * Confianza *</span>
									<i class="ico color-main ico-quote"></i>
								</div>
								<img src="assets/images/events/34.jpg" alt="img">
							</div>
						</div>
						<div class="col-lg-6 offset-lg-1 col-xl-4 offset-xl-2">
							<div class="divider-50 divider-lg-0"></div>
							<h2 class="special-heading">
								<span>Misión</span>
							</h2>
							<div class="divider-30 divider-lg-50"></div>
							<p>
								Ofrecer a nuestros clientes productos de alta calidad al mejor precio, confianza a través de un trato honesto y un servicio amable, ocuparnos por las necesidades de cada uno de nuestros colaboradores. Ser una organización de mejores resultados año tras año.
							</p>
							<div class="divider-50" id="sobrenosotros"></div>
							<!-- <a class="btn btn-outline-dark" href="about.html">Sobre nosotros</a> -->
						</div>
					</div>
				</div>
			</section>
			<!--About End-->

			<!--Banner Start-->
			<section class="ls banner-section">
				<div class="title-custom position-relative">
					<span class="emptytext color-darkgrey-light">DISTRIBUIDORA LUZART</span>
				</div>
				<div class="title-custom right position-relative">
					<span class="color-darkgrey">DISTRIBUIDORA LUZART</span>
				</div>
			</section>
			<!--Banner End-->

			<!--Steps Start-->
			<section id="steps" class="ls s-py-90 s-py-xl-150 c-gutter-80 leaf-wrap overflow-visible with-leaf-2 parallax">
				<div class="leaf-theme">
					<img class="parallax-layer" data-parallax-deep="100" src="assets/images/leaf-3.png" alt="img">
				</div>
				<div class="leaf leaf-bottom about-1 animate animated" data-animation="fadeInUp" data-delay="150">
					<img src="assets/images/features-leaf.png" alt="img">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-6">
							<div class="icon-box">
								<h5 class="mb-3 position-relative">Visión <span class="text-special emptytext">01</span></h5>
								<p>
									Ser la empresa líder para proveerse en nuestra localidad de crecimiento permanente, a base del esfuerzo de cada uno de nuestros colaboradores en el compromiso hacia nuestros clientes.
								</p>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6">
							<div class="divider-60 divider-lg-0 divider-xl-80"></div>
							<div class="icon-box">
								<h5 class="mb-3 position-relative"> Filosofía <span class="text-special emptytext">02</span></h5>
								<p>
									El cliente es la parte central para nuestra organización, por eso le brindamos un trato excelente, excediendo sus expectativas y así logramos nuestra meta: <b> clientes satisfechos.</b>
								</p>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 me-md-auto ms-md-auto">
							<div class="divider-60 divider-xl-160"></div>
							<div class="icon-box">
								<h5 class="mb-3 position-relative">Confianza <span class="text-special emptytext">03</span></h5>
								<p>
									Nuestros clientes pueden estar seguros de que les hacemos llegar a sus manos producto de la mejor calidad.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>


			<!-- Clientes -->
			<section class="ls ls" style="margin-top: 8rem;">
				<div class="container">
					<h3 class="text-center" style="margin-bottom: 3rem;"> <strong> NUESTROS CLIENTES</strong></h3>
					<div class="row">
						<div class="col-12">
							<div class="firm-shortcode">
								<div>
									<a href="#">
										<img src="assets/images/firm/c-1.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/c-2.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/c-3.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/c-4.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/c-5.png" alt="firm">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Fin de Clientes -->


			<!--Proveedores Start-->
			<section class="ls ls">
				<div class="container">
					<h2 class="text-center" style="margin-bottom: 3rem;"><strong>PROVEEDORES</strong></h2>
					<div class="row">
						<div class="col-12">
							<div class="firm-shortcode">
								<div>
									<a href="#">
										<img src="assets/images/firm/firm-1.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/firm-2.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/firm-3.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/firm-4.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/firm-5.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/firm-6.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/firm-7.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/1.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/2.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/3.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/4.png" alt="firm">
									</a>
								</div>
								<div>
									<a href="#">
										<img src="assets/images/firm/5.png" alt="firm">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Proveedores End-->


			<!--Features Start-->
			<section class="ls texture-1 s-pt-90 s-pb-30 s-pt-xl-150 s-pb-xl-90 c-mb-60">
				<div class="container">
					<div class="row">

						<div class="col-sm-6 col-lg-3 text-center">
							<div class="icon-box d-inline-flex align-items-center justify-content-center">
								<span class="iq-rotate-text">DISTRIBUIDORA * Luz Art * Guadalajara * Jalisco</span>
								<h3 class="special-heading text-uppercase counter-wrap d-flex">
									<span class="emptytext color-main">SEGURO</span>
									<!-- <span class="counter-add emptytext color-main"></span> -->
								</h3>
							</div>
							<!-- <p class="small-text color-darkgrey mb-1 mt-2">Completed</p> -->
							<!-- <h5 class="mt-0">Projects</h5> -->
						</div>

						<div class="col-sm-6 col-lg-3 text-center">
							<div class="icon-box d-inline-flex align-items-center justify-content-center">
								<span class="iq-rotate-text">Clientes Felices * Con Nuestro servicio * </span>
								<h3 class="special-heading text-uppercase counter-wrap d-flex">
									<span class="counter emptytext color-main" data-from="0" data-to="100" data-speed="1500">100</span>
									<span class="counter-add emptytext color-main">%</span>
								</h3>
							</div>
							<!-- <p class="small-text color-darkgrey mb-1 mt-2">Satisfied</p> -->
							<!-- <h5 class="mt-0">Customers</h5> -->
						</div>

						<div class="col-sm-6 col-lg-3 text-center">
							<div class="icon-box d-inline-flex align-items-center justify-content-center">
								<span class="iq-rotate-text">CONFIANZA CON NUESTROS CLIENTES CON CALIDAD* </span>
								<h3 class="special-heading text-uppercase counter-wrap d-flex">
									<span class="counter emptytext color-main" data-from="0" data-to="100" data-speed="1500">100</span>
									<span class="counter-add emptytext color-main">%</span>
								</h3>
							</div>
							<!-- <p class="small-text color-darkgrey mb-1 mt-2">Earned</p> -->
							<!-- <h5 class="mt-0">Awards</h5> -->
						</div>

						<div class="col-sm-6 col-lg-3 text-center">
							<div class="icon-box d-inline-flex align-items-center justify-content-center">
								<span class="iq-rotate-text">EXPERIENCIA EN DISTRIBUCIÓN Y TRANSPORTACIÓN </span>
								<h3 class="special-heading text-uppercase counter-wrap d-flex">
									<span class="counter emptytext color-main" data-from="10" data-to="100" data-speed="1500">0</span>
									<span class="counter-add emptytext color-main">%</span>
								</h3>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!--Features End-->

			<section style="margin-bottom: 250px;" class="ls s-pt-90 s-pt-xl-50">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-xl-5" id="contacto">
							<p class="special-heading text-uppercase color-dark small-text">
								<span>Contacto</span>
							</p>
							<div class="divider-40 divider-xl-50"></div>
							<h6 class="special-heading">
								<span>Guadalajara, Jalisco, George Santayana #4962, Colonia Jardines Universidad C.P. 45110.</span>
							</h6>
							<h6 class="special-heading my-3">
								<span><a href="tel:+523328343793">33 2834 3793</a></span> <br><br>
								<span><a href="tel:+523314340316">33 1434 0316</a></span>
							</h6>
							<h6 class="special-heading">
								Contacto Admnistrativo <br>
								<span><a href="mailto:contacto@distribuidoraluzart.com"><span class="__cf_email__">contacto@distribuidoraluzart.com</span></a></span>
							</h6>

							<h6 class="special-heading">
								<br><br> Luz Elena Uribe <br>
								<span><a href="mailto:contacto@distribuidoraluzart.com"><span class="__cf_email__">
											luribe@distribuidoraluzart.com</span></a></span>
							</h6>

							<h6 class="special-heading">
								<br><br> Arturo Rivera <br>
								<span><a href="mailto:contacto@distribuidoraluzart.com"><span class="__cf_email__">
											arivera@distribuidoraluzart.com</span></a></span>
							</h6>
						</div>

						<div class="col-lg-6 offset-xl-1">
							<div class="divider-40 divider-lg-0"></div>

							<form class=" c-gutter-40 c-mb-30" action="php/contact.php" method="post">
								<div class="row">
									<div class="col-lg-6">
										<p class="contact-form-name form-group has-placeholder">
											<label for="name">Nombre Completo </label>
											<i class="ico-user color-darkgrey"></i>
											<input type="text" aria-required="true" size="30" value="" id="nombre" name="nombre" class="form-control" placeholder="Nombre Completo ">
										</p>
										<p class="contact-form-email form-group has-placeholder">
											<label for="email">Correo Electronico</label>
											<i class="ico-send color-darkgrey"></i>
											<input type="email" aria-required="true" size="30" value="" id="mail" name="mail" class="form-control" placeholder="Correo electronico">
										</p>
									</div>
									<div class="col-lg-6">
										<p class="contact-form-message form-group has-placeholder mt-30 mt-lg-0">
											<label for="message">Tu Mensaje</label>
											<i class="ico-pencil color-darkgrey"></i>
											<textarea aria-required="true" rows="4" cols="30" name="msj" id="msj" class="form-control" placeholder="Mensaje"></textarea>
										</p>
									</div>
									<div style="margin-top:2rem" class="g-recaptcha" data-sitekey="6Lf92OAfAAAAAEy9m8sf2kbU0ojkdDs5CNOnaNYS"></div>
									<div class="col-lg-6">
										<p class="contact-form-submit mt-50">
											<input type="submit" name="submit" value="submit" class="btn btn-outline-dark btn-medium w-100">
											</input>
										</p>
									</div>
								</div>

							</form>

						</div>
					</div>
				</div>
			</section>
			<!--Contacts End-->

			<?php
			include("includes/footerIndex.php");
			?>
		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->
	<?php
	include("includes/scripts.php");
	?>
</body>

</html>