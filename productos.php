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
	<style>
		#more {
			display: none;
		}

		#more2 {
			display: none;
		}

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

<body>
	<!-- <div class="preloader">
		<div class="preloader_image"></div>
	</div> -->

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="widget widget_search">
					<form method="get" class="searchform search-form" action="https://html.modernwebtemplates.com/">
						<div class="form-group">
							<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
						</div>
						<button type="submit" class="btn">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>

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

	<div class="modal fade " id="loginModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal_login_form">
				<div class="modal-body ">
					<div class="menu-left cover-image">
						<img src="assets/images/events/01.jpg" alt="img">
					</div>
					<div class="menu-right ls">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<p>
							<a href="#" class="link-underline">Sign in</a>
							<span class="pl-3 pr-3">or</span>
							<a href="#" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#registerModal" class="color-font">Sign up</a>
						</p>

						<div class="divider-50"></div>

						<form>

							<div class="form-group">
								<label for="login-email">Email address</label>
								<input type="text" class="form-control" id="login-email" placeholder="Email">
							</div>

							<div class="form-group">
								<label for="login-password">Password</label>
								<input type="password" class="form-control" id="login-password" placeholder="Password">
							</div>

							<div class="checkbox form-group mt-35">
								<input type="checkbox" id="remember_me_checkbox">
								<label class="mb-0" for="remember_me_checkbox">Remember Me
								</label>
							</div>

							<button type="submit" class="btn mt-20 btn-maincolor">Get Started</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade " id="registerModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal_login_form">
				<div class="modal-body ">
					<div class="menu-left cover-image">
						<img src="assets/images/events/02.jpg" alt="img">
					</div>
					<div class="menu-right ls">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<p>
							<a href="#" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#loginModal" class="link-underline">Sign in</a>
							<span class="pl-3 pr-3">or</span>
							<a href="#" class="color-font">Sign up</a>
						</p>

						<div class="divider-50"></div>

						<form>

							<div class="form-group">
								<label for="login-email">Full Name</label>
								<input type="text" class="form-control" id="login-name" placeholder="Enter your full name">
							</div>

							<div class="form-group">
								<label for="login-password-registr">Password</label>
								<input type="password" class="form-control" id="login-password-registr" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="login-email-registr">Email</label>
								<input type="text" class="form-control" id="login-email-registr" placeholder="Your email goes here">
							</div>


							<div class="checkbox form-group mt-35">
								<input type="checkbox" id="agree_me_checkbox">
								<label class="mb-0" for="agree_me_checkbox">I agree all terms of science
								</label>
							</div>

							<button type="submit" class="btn btn-maincolor mt-20">Get Started</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			<!--topline section visible only on small screens|-->
			<section class="page_topline ls ms c-my-10">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-12 d-flex">
							<!-- <div class="me-auto me-4">
								<span class="social-icons">

									<span class="color-dark small-text me-4">
										Síguenos:
									</span>

									<a href="#" class="fa fa-facebook @@iconClass" title="facebook"></a>
									<a href="#" class="fa fa-instagram @@iconClass" title="google"></a>

								</span>
							</div> -->
							<div>
								<div id="topline_dropdown" class="dropdown meta-dropdown">
									<span id="toplineDropdown" class="nav-btn type-dots dark" data-bs-toggle="dropdown" aria-expanded="false" role="button">
										<span></span>
									</span>
									<ul class="dropdown-menu dropdown-menu-md site-meta" aria-labelledby="toplineDropdown" style="font-size:12px ;">
										<li class="icon-inline">
											<span class="meta-item"><i class="ico-clock"></i>Lunes-Viernes : 9:00 a 18:00 - Sabado 10:00 a 2:00 pm</span>
										</li>
										<li class="icon-inline">
											<span class="meta-item"><i class="ico-phone"></i><a href="tel:3311729300">331 172 930 0</a></span>
										</li>
										<li class="icon-inline">
											<span class="meta-item"><i class="ico-send"></i><a href="mailto:contacto@distribuidoraluzart.com"><span class="__cf_email__">contacto@distribuidoraluzart.com</span></a></span>
										</li>
										<li class="icon-inline">
											<span class="meta-item"><i class="ico-pin"></i>Guadalajara Jal, George Santayana, Col. Jardines Universidad 45110</span>
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
					<a href="https://api.whatsapp.com/send?phone=+5213311729300&text=Hola, quiero más información sobre los servicios de LuzArt." style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" target="_blank"><img border="0" data-original-height="59" data-original-width="59" src="/imagenes/WA.png" /></a>
				</div>
			</div>

			<section class="page_title ds s-overlay s-py-90 s-py-xl-150">
				<div class="container">
					<div class="row">
						<!-- <div class="col-md-12 text-center">
							<h1 class="emptytext">Services</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index-2.html">Home</a>
								</li>
								<li class="breadcrumb-item">
									<a href="#">Pages</a>
								</li>
								<li class="breadcrumb-item active">
									Services
								</li>
							</ol>
						</div> -->
					</div>
				</div>
			</section>

			<!--Servicios Start-->
			<section id="steps" class="ls s-py-90 s-py-xl-150 c-gutter-80 leaf-wrap overflow-visible with-leaf-2 parallax" style="margin-bottom: 2rem;">

				<h1 style="margin-top:4rem;">
					NUESTROS SERVICIOS
				</h1>

				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-6">
							<div class="icon-box">
								<img src="assets/images/logistica.png" alt="">
								<h5 class="mb-3 position-relative">
									Comercialización<span class="text-special emptytext">01</span>
								</h5>
								<p>
									Contamos con una cadena de suministros, sistema de logística y almacenaje bien segmentada que nos permite negociar mejores precios y calidades para nuestros clientes. Tenemos un Equipo de Bróker expertos en el ahorro, mejora de tiempos y calidades.
								</p>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6">
							<div class="divider-60 divider-lg-0 divider-xl-80"></div>
							<div class="icon-box">
								<img src="assets/images/renovacion.png" alt="">
								<h5 class="mb-3 position-relative">Construcción<span class="text-special emptytext">02</span></h5>
								<p>
									Distribución directa de materiales.
								</p>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 me-md-auto ms-md-auto">
							<div class="divider-60 divider-xl-160"></div>
							<div class="icon-box">
								<img src="assets/images/logistic.png" alt="">
								<h5 class="mb-3 position-relative">Logística<span class="text-special emptytext">03</span></h5>
								<p>
									Somos una empresa capacitada en operaciones de importación y exportación, Contamos con un equipo experto de Bróker, brindamos soluciones de logísticas de punto a punto, procedimiento completo en asesoría aduanal todo esto para absorbiendo los riesgos y garantizando los tiempos de entrega.
									• Logística punto a punto
									• Estrategia de cadena de suministros
									• Asesoría en procesos de importación y exportación.
								</p>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6">
							<div class="divider2-60 divider2-xl-160"></div>
							<div class="icon-box">
								<img src="assets/images/comercio.png" alt="">
								<h5 class="mb-3 position-relative">Alta De Producto<span class="text-special emptytext">04</span></h5>
								<p>
									Negociamos con los compradores para dar de alta tu marca en las principales cadenas de autoservicio, conveniencia y farmacias.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Servicios End-->

			<!--Cases Start-->
			<section id="cases" class="ls s-pt-90 s-pb-50 s-pt-xl-20 s-pb-xl-110" style="margin-bottom: 5rem;">
				<div class="catalogo-productos" id="productos" style="padding: 2rem;">
					<div class="row text-center">
						<div class="col-12">
							<h2 style="font-size: 3rem;">
									<strong>
										Nuestros Productos
									</strong>
							</h2>
							<div class="divider-30 divider-xl-50"></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<?php
						include("modules/listMenu.php");
						?>
					</div>
				</div>
			</section>
			<!--Cases End-->



			<!-- <section class="before-footer before-footer1">
				<div class="container ">
					<div class="row">
						<div class="col-12 text-center text-xl-start">
							<div class="cs">
								<div class="title-custom-footer">
									<h6 class="emptytext">24/7</h6>
								</div>
								<div class="before-footer-content d-xl-flex align-items-center">
									<div class="mb-4 mb-xl-0">
										<h4 class="special-heading mb-2">
											<span>
												<span class="text-white">Still have any questions?</span> Get a free consultancy!
											</span>
										</h4>
										<p>You can contact us through phone: <a href="tel:+08001234567">0800 123 4567</a> or email:
											<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection#2d484e42595f4c43496d5e585d5d425f59034e4240"><span class="__cf_email__" data-cfemail="0c696f63787e6d62684c7f797c7c637e78226f6361">[email&#160;protected]</span></a></p>
									</div>
									<div class="text-xl-end flex-grow-1">
										<a class="btn btn-white" href="#">Request a quote</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->

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