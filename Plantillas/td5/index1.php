<!-- =======================================================
* digitalizandote.digital
* Plantilla Tarjeta Digital  1
* Author: BootstrapMade.com
* Integrador : NetRabbit, S.A. de C.V.
* Lider Proyecto: Ing. Laura Patricia Nevares del Bosque
* Dir Desarrollo: Ing. Victor Manuel Alarcón Hernández
======================================================== -->

<!DOCTYPE HTML>
<html>

<head>
	<title>Mi Negocio</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Custom  files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!----webfonts---->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Raleway:400,100,300,500,600,700,800,900,200' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,600,700,800,900,200' rel='stylesheet' type='text/css'>
	<!----//webfonts---->

	<style type="text/css">
		#Layer1 {
			position: absolute;
			width: 41px;
			height: 39px;
			z-index: 100;
			left: 0px;
			top: 200px;
			bottom: 10x;
			right: 0px;
			position: fixed;
		}
	</style>
</head>

<body>


	<!----wrap---->
	<div class="top-bannar" id="move-top">
		<div class="container">
			<div class="top-header row">
				<!---logo--->
				<div id="sb-search" class="sb-search">

				</div>
				<script src="js/classie.js"></script>
				<script src="js/uisearch.js"></script>
				<script>
					new UISearch(document.getElementById('sb-search'));
				</script>
				<!---//logo--->
				<!--top-nav---->

				<!---start-click-drop-down-menu----->
				<!----start-dropdown--->
				<script type="text/javascript">
					var $ = jQuery.noConflict();
					$(function() {
						$('#activator').click(function() {
							$('#box').animate({
								'top': '0px'
							}, 900);
						});
						$('#boxclose').click(function() {
							$('#box').animate({
								'top': '-1000px'
							}, 900);
						});
					});
					$(document).ready(function() {
						//Hide (Collapse) the toggle containers on load
						$(".toggle_container").hide();
						//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
						$(".trigger").click(function() {
							$(this).toggleClass("active").next().slideToggle("slow");
							return false; //Prevent the browser jump to the link anchor
						});

					});
				</script>
				<!---//End-click-drop-down-menu----->
				<!--top-nav---->
				<div class="clear"> </div>
				<!---header-welcomenote--->
				<div class="col-md-12 header-welcome-note">
					<div class=" col-md-6 welcome-note-left">
						<!-- <span class="divice12"><img src="images/divice.png" alt="" /></span> -->
						<h1 class="colorEncabezado" id="negocio">BurgerSota</h1>
						<h2 class="colorEncabezado1" style="color:white;" id="nombre">Propietario Ruben Garcia.</h2>
						<h3 class="colorEncabezado2" style="color:white;" id="celular">5512345678.</h3>

					</div>
					<div class="col-md-6 welcome-note-right">
						<img src="images/divice.png" alt="" id="imgFrontal" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<!---//header-welcomenote--->
			</div>
		</div>
	</div>
	<!---start-content--->
	<div class=" features" id="features">
		<div class=" row superb-feature">
			<h2 class="colorT1" id="titulo1">Check out the superb features</h2>
			<p class="colorT12" id="descChech">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</p>
		</div>
	</div>
	<div class="works" id="works">
		<!----start-works---->
		<div class="content_top">
			<div class="container">
				<div class="row content_main">
					<div class="app_img col-md-5">
						<img src="images/black-phone.png" alt="" id="imgSub1">
					</div>
					<div class="app_desc img col-md-7">
						<h3 class="colorTiServ" id="subTitulo1">Login page with social signups</h3>
						<p class="colorDesc" id="descSub1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="content_bottom">
			<div class="container ">
				<div class=" row devices- main">
					<div class=" col-md-7 devices_desc">
						<h3 class="colorTiServ1" id="subTitulo2">Todays' menus</h3>
						<p class="colorDesc1" id="descSub2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-md-5 devices">
						<img src="images/black-phone2.png" alt="" id="imgSub2">
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!---start-our story----->
	<div class="gellery" id="gallery">
		<div class="our-story">
			<h4 class="colorCarrusel" id="tituloCarr">App Gallery</h4>
		</div>
		<div class="group_2" id="Portfolio">
			<div class="group_2_items">
				<div class="container">
					<div id="owl-demo1" class="owl-carousel">

						<div class="item">
							<div class="carousel">
								<div class="group_2_img1">
									<img src="images/slider.png" alt="" id="img1">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="carousel">
								<div class="group_2_img1">
									<img src="images/slider.png" alt="" id="img2">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="carousel">
								<div class="group_2_img1">
									<img src="images/slider.png" alt="" id="img3">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="carousel">
								<div class="group_2_img1">
									<img src="images/slider.png" alt="" id="img4">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Owl Carousel Assets -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<!-- Owl Carousel Assets -->
	<!-- Prettify -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {

			$("#owl-demo").owlCarousel({
				items: 1,
				lazyLoad: true,
				autoPlay: true,
				navigation: true,
				navigationText: ["", ""],
				rewindNav: true,
				scrollPerPage: true,
				pagination: true,
				paginationNumbers: false,
			});

		});
		$(document).ready(function() {

			$("#owl-demo1").owlCarousel({
				items: 1,
				lazyLoad: true,
				autoPlay: true,
				navigation: true,
				navigationText: ["", ""],
				rewindNav: true,
				scrollPerPage: true,
				pagination: false,
				paginationNumbers: false,
			});

		});
	</script>
	<!--start-testimonials-->
	<!---/start-text-slider----->
	<div class="testimonials" id="testimonials">
		<div class="wmuSlider example1">
			<div class="container-flueid">
				<article style="position: absolute; width:64%; opacity: 0;">

					<div class=" cont span_2_of_3 client-main">
						<div class="client">
							<img src="images/client.png" alt="" id="imgP1">
						</div>
						<div class="client-des">
							<h4 class="color3" id="perfil1">Alif noor</h4>
							<p class="color31" id="desP1">Love this app!gravida proin nibh vel velit autor.Aenean sollicitudin,I am an experienced and passionate user interface designer with interaction design background.Lorem ipsum has been the printing and typesetting industry's standard dummy text ever since the 500..</p>
							<span> </span>
						</div>
						<div class="clearfix"> </div>
					</div>
				</article>
				<article style="position: absolute; width:64%; opacity: 0;">
					<div class=" cont span_2_of_3  client-main">
						<div class="client">
							<img src="images/client3.jpg" alt="" id="imgP2">
						</div>
						<div class="client-des">
							<h4 class="color32" id="perfil2">Alif noor</h4>
							<p class="color33" id="desP2">Love this app!gravida proin nibh vel velit autor.Aenean sollicitudin,I am an experienced and passionate user interface designer with interaction design background.Lorem ipsum has been the printing and typesetting industry's standard dummy text ever since the 500.</p>
							<span> </span>
						</div>
						<div class="clearfix"> </div>
					</div>
				</article>

				<script src="js/jquery.wmuSlider.js"></script>
				<script>
					$('.example1').wmuSlider();
				</script>
			</div>
		</div>
	</div>
	<!---//text-slider----->
	<!-- //end-testimonials-->
	<!---/contact----->

	<!---//contact----->
	<!-- /footer-->

	<!-- //footer-->
	<a href="#move-top" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
	<!---smoth-scrlling---->
	<script type="text/javascript">
		$(document).ready(function() {
			$('a[href^="#"]').on('click', function(e) {
				e.preventDefault();
				var target = this.hash,
					$target = $(target);
				$('html, body').stop().animate({
					'scrollTop': $target.offset().top
				}, 1000, 'swing', function() {
					window.location.hash = target;
				});
			});
		});
	</script>
	<!---//smoth-scrlling---->

</body>

</html>