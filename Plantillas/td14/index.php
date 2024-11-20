<?php
include('../../conexion/conexion.php'); //para llamar a la bd
$id = $_REQUEST['id'];
if (empty($id)) {
	$id = 0;
}
$query = $link->query("SELECT * FROM planestilista WHERE id = $id AND activo = 1");

if (mysqli_num_rows($query) != 0) {
	while ($dato = mysqli_fetch_array($query)) {
		$id = $dato['id'];
		$title = $dato['title'];
		$colorLogo = $dato['colorLogo'];
		$nomLogo = $dato['nomLogo'];
		$colorEnc = $dato['colorEnc'];
		$nombre = $dato['nombre'];
		$cargo = $dato['cargo'];
		$telefono = $dato['telefono'];
		$imgEncabezado = $dato['imgEncabezado'];
		$imgEnc2 = $dato['imgEnc2'];
		$colorServ = $dato['colorServ'];
		$servicios = $dato['servicios'];
		$imgServ1 = $dato['imgServ1'];
		$imgServ2 = $dato['imgServ2'];
		$imgServ3 = $dato['imgServ3'];
		$imgServ4 = $dato['imgServ4'];
		$colorTserv = $dato['colorTserv'];
		$tituloSer1 = $dato['tituloSer1'];
		$tituloSer2 = $dato['tituloSer2'];
		$tituloSer3 = $dato['tituloSer3'];
		$tituloSer4 = $dato['tituloSer4'];
		$colorDeServ = $dato['colorDeServ'];
		$descSer1 = $dato['descSer1'];
		$descSer2 = $dato['descSer2'];
		$descSer3 = $dato['descSer3'];
		$descSer4 = $dato['descSer4'];
		$img3Perfil = $dato['img3Perfil'];
		$colorWho = $dato['colorWho'];
		$tituloWho = $dato['tituloWho'];
		$colorDesc = $dato['colorDesc'];
		$descWho = $dato['descWho'];
		$imgEnc3 = $dato['imgEnc3'];
		$colorComen = $dato['colorComen'];
		$tituloComent = $dato['tituloComent'];
		$colorC = $dato['colorC'];
		$descC1 = $dato['descC1'];
		$descC2 = $dato['descC2'];
		$nombreC1 = $dato['nombreC1'];
		$nombreC2 = $dato['nombreC2'];
	}

?>
	<!DOCTYPE html>
	<html>

	<head>
		<title><?= $title; ?></title>


		<!-- =======================================================
      * digitalizandote.digital
      * Plantilla Tarjeta Digital  1
      * Author: BootstrapMade.com
      * Integrador : NetRabbit, S.A. de C.V.
      * Lider Proyecto: Ing. Laura Patricia Nevares del Bosque
      * Dir Desarrollo: Ing. Victor Manuel Alarcón Hernández
    ======================================================== -->


		<style type="text/css">
			#Layer1 {
				position: absolute;
				width: 41px;
				height: 39px;
				z-index: 100;
				left: 0px;
				top: 550px;
				bottom: 10x;
				right: 0px;
				position: fixed;
			}
		</style>
		<style>
			.home {
				background: url("<?= "img/$id/$imgEncabezado"; ?>");
				background-repeat: no-repeat;
				background-position: center center;
				background-size: cover;
			}

			.services {
				background: url("<?= "img/$id/$imgEnc2"; ?>");
				background-repeat: no-repeat;
				background-position: top right;
			}

			.sec-bg-02 {
				background: url("<?= "img/$id/$img3Perfil"; ?>");
				background-repeat: no-repeat;
				background-position: top left;
				background-size: cover;
			}

			/* .sec-bg-03 {
				background: url("img/sec-bg-03.jpg");
				background-repeat: no-repeat;
				background-position: top left;
				background-size: cover;
			} */

			/* .sec-bg-04 {
				background: url("img/sec-bg-04.jpg");
				background-repeat: no-repeat;
				background-position: top left;
				background-size: cover;
			} */
		</style>
	</head>
	<!-- bootstrap Style CSS File -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Custom Style CSS File -->
	<link rel="stylesheet" type="text/css" href="css/custom-style.css">
	<link rel="stylesheet" type="text/css" href="css/loaders.css" />
	<!-- Font-Awesome Style CSS File -->
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">



	<body>



		<!-- Page loading animation -->
		<div class="loader loader-bg">
			<div class="loader-inner ball-pulse">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>

		<!-- Top navigation -->
		<nav class="navbar navbar-expand-md fixed-top top-nav">
			<div class="container-fluid">
				<a class="navbar-brand" href=""><strong><?= $nomLogo; ?></strong></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><img src="img/icons/menu.png"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav m-auto text-sm-center text-md-center">
						<li class="nav-item">
							<a class="nav-link" href="#home">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#services">SERVICIOS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">QUIEN SOY</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#testimonial">TESTIMONIOS</a>
						</li>
					</ul>
				</div>
				<!--
		  <ul class="navbar-nav ml-auto search-box">
		    <li class="nav-item">
		      <a class="nav-link" href="#"><i class="fa fa-search text-white"></i></a>
		    </li>
		  </ul>
          
        -->
			</div>
		</nav>

		<!-- Intro Three -->
		<section id="home" class="intro intro-bg bg-overlay parallax">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 caption-two-panel ml-auto pt-5">
						<div class="intro-caption mt-5">
							<h1 class="text-white mb-2">J<?= $nombre; ?></h1>
							<p class="text-white mb-4"><?= $cargo; ?> </p>
							<a class="btn btn-primary text-white mr-3"><?= $telefono; ?></a>

						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Info block 1 -->
		<section id="services" class="info-section text-white bg-right bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="head-box">
							<h2 class="font-abril "><?= $servicios; ?></h2>
						</div>
						<div class="three-panel-block mt-5">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="service-block mb-5">
										<i class="icon-box mb-3 float-left w-100"><img src="<?= "img/$id/$imgServ1"; ?>" class="img-fluid"></i>
										<h3 class="text-primary"><?= $tituloSer1; ?></h3>
										<p><?= $descSer1; ?></p>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="service-block mb-5">
										<i class="icon-box mb-3 float-left w-100"><img src="<?= "img/$id/$imgServ2"; ?>" class="img-fluid"></i>
										<h3 class="text-primary"><?= $tituloSer2; ?></h3>
										<p><?= $descSer2; ?></p>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="service-block mb-5">
										<i class="icon-box mb-3 float-left w-100"><img src="<?= "img/$id/$imgServ3"; ?>" class="img-fluid"></i>
										<h3 class="text-primary"><?= $tituloSer3; ?></h3>
										<p><?= $descSer3; ?></p>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="service-block">
										<i class="icon-box mb-3 float-left w-100"><img src="<?= "img/$id/$imgServ4"; ?>" class="img-fluid"></i>
										<h3 class="text-primary"><?= $tituloSer4; ?></h3>
										<p><?= $descSer4; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- Content block 1 -->
		<section id="about" class="copy-content-sec sec-bg-02 h-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 copy-container ml-auto">
						<div class="copy-content pr-4">
							<h2 class="font-abril text-primary">
								<?= $tituloWho; ?>
							</h2>
							<p class="lead ml-2">
								<?= $descWho; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Info block 2 -->



		<!-- Testimonial Block 01-->
		<section id="testimonial" class="testimonial-section sec-bg-04 py-5 h-100">
			<div class="container">
				<div class="row">
					<div class="head-box text-center mb-3 col-md-12 mt-5">
						<h2 class="font-abril"><?= $tituloComent; ?></h2>
					</div>
				</div>
				<div class="single-testimonial">
					<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner pt-5" role="listbox">
							<div class="carousel-item active">
								<div class="testimonial-box text-center">
									<div class="testimonial-content w-100 bg-faded">
										<p class="mb-0"><i class="fa fa-quote-left fa-3x" aria-hidden="true"></i></p>
										<p class="lead font-abril"><?= $descC1; ?></p>
										<div class="testimonial-footer">
											<h4 class="mt-2 mb-0 text-primary"><?= $nombreC1; ?></h4>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testimonial-box text-center">
									<div class="testimonial-content w-100 bg-faded">
										<p class="mb-0"><i class="fa fa-quote-left fa-3x" aria-hidden="true"></i></p>
										<p class="lead font-abril"><?= $descC2; ?></p>
										<div class="testimonial-footer">
											<h4 class="mt-2 mb-0 text-primary"><?= $nombreC2; ?></h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="navigator-box">
							<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
								<span class="fa fa-angle-left" aria-hidden="true"></span>
								<span class="sr-only">
									<< /span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
								<span class="fa fa-angle-right" aria-hidden="true"></span>
								<span class="sr-only">></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Contact Block -->


		<!-- footer Block -->




		<!-- Javascript Files  -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script async deffer type="text/javascript" src="https://maps.google.com/maps/api/js?key= AIzaSyB52BfJHBtqiqYBn_D4ZUqujiWxAOiRyTc&callback=initMap"></script>
		<script src="js/gmap-custom.js"></script>
		<script src="js/core.js"></script>
	</body>

	</html>
<?php
}
?>