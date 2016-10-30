<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--<link rel="shortcut icon" href="images/favicon.ico" />-->
		<title>Tienda Virtual - Vimoda</title>
		<meta name="description" content="Moda y calidad en tus pies.">
		<meta name="author" content="Juan Carlos Quintanilla">
		<meta property="fb:app_id" content="113869198637480">
		<meta property="og:site_name" content="Vimoda">
		<meta property="og:title" content="Tienda Virtual - Vimoda">
		<meta property="og:type" content="web">
		<meta property="og:url" content="{{url()}}">
		<meta property="og:image" content="{{url('images/share/vimoda.jpg')}}">
		<meta property="og:locale" content="es_ES">
		<meta property="og:description" content="Moda y calidad en tus pies.">
		<!-- fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i">
		<link rel="stylesheet" href="https://use.fontawesome.com/4db0b8c4f3.css">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/flexslider.css')}}">
		<link rel="stylesheet" type="text/css" media="screen, projection" href="{{url('css/fancySelect.css')}}">
		<link rel="stylesheet" type="text/css" media="all" href="{{url('css/animate.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
	</head>
	<body class="<?php echo $claseBody ?>">
		<div id="fb-root"></div>
		<script>
		  window.fbAsyncInit = function() {
			FB.init({
			  appId   : '343828752408182',
			  xfbml   : true,
			  version : 'v2.8'
			});
		  };
		  (function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "//connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
		<!-- PRELOADER -->
		<div id="preloader"><img src="{{url('images/preloader.gif')}}" alt="" /></div>
		<!-- //PRELOADER -->
		
		<div class="preloader_hide">
			<!-- PAGE -->
			<div id="page">

				<!-- HEADER -->
				<header>

					<!-- TOP INFO -->
					<div class="top_info">

						<!-- CONTAINER -->
						<div class="container clearfix">
							<ul class="secondary_menu hidden-xs">
								<li><a href="{{url('')}}">La Empresa</a></li>
								<li><a href="{{url('')}}">Catálogos y Distribución</a></li>
							</ul>
							<div class="phone_top">
								<a href="tel:1 800 888 2828">
									<i class="fa fa-phone"></i> 1 800 888 2828
								</a>
							</div>
						</div><!-- //CONTAINER -->
					</div><!-- TOP INFO -->

					<!-- MENU BLOCK -->
					<div class="menu_block">

						<!-- CONTAINER -->
						<div class="container clearfix">

							<!-- LOGO -->
							<div class="logo">
								<a href="{{url('/')}}"><img src="{{url('images/logo.png')}}" alt="" /></a>
							</div><!-- //LOGO -->

							<!-- SEARCH FORM -->
							<div class="top_search_form">
								<a class="top_search_btn" href="javascript:void(0);"><i class="fa fa-search"></i></a>
								<form method="get" action="#">
									<input type="text" name="search" placeholder="Buscar...">
								</form>
							</div><!-- SEARCH FORM -->

							<!-- MENU -->
							<ul class="navmenu center">
								<li class="first active"><a href="{{url('/')}}">Inicio</a></li>
								<li><a href="{{url('damas')}}">Damas</a></li>
								<li><a href="javascript:void(0);">Caballeros</a></li>
								<li><a href="javascript:void(0);">Niños</a></li>
								<li class="last sale_menu"><a href="javascript:void(0);">Contacto</a></li>
							</ul><!-- //MENU -->
						</div><!-- //MENU BLOCK -->
					</div><!-- //CONTAINER -->
				</header><!-- //HEADER -->

				@yield('contenido')

				<!-- FOOTER -->
				<footer>

					<!-- CONTAINER -->
					<div class="container" data-animated='fadeInUp'>

						<!-- ROW -->
						<div class="row">
							<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-ss-12 padbot30">
								<h4>Ubícanos</h4>
								<div class="foot_address"><a href="javascript:void(0);"><span>Ver tiendas</span></a></div>
								<div class="foot_phone"><a href="tel:017130530">Lima: 713 0530</a></div>
								<div class="foot_phone"><a href="tel:017130530">Provincia 1: 713 0530</a></div>
								<div class="foot_phone"><a href="tel:017130530">Provincia 2: 713 0530</a></div>
								<div class="foot_mail"><a href="mailto:informes@vimoda.pe">informes@vimoda.pe</a></div>
							</div>

							<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-ss-12 padbot30">
								<h4>Información</h4>
								<ul class="foot_menu">
									<li><a href="javascript:void(0);">Nosotros</a></li>
									<li><a href="javascript:void(0);">Distribución</a></li>
									<li><a href="javascript:void(0);">Catálogos</a></li>
									<li><a href="javascript:void(0);">Blog</a></li>
									<li><a href="javascript:void(0);">Contactanos</a></li>
								</ul>
							</div>

							<div class="respond_clear_480"></div>

							<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
								<h4>Sobre Vimoda</h4>
								<p>Es una empresa 100% peruana, nace como parte del deseo de desarrollo y visión de crecimiento en proporcionar a la sociedad la opción de crear su propio negocio a través de la venta de calzado y accesorios por catálogo para damas, caballeros y niños(as).</p>
							</div>

							<div class="respond_clear_768"></div>

							<div class="col-lg-4 col-md-4 padbot30">
								<h4>Recibe nuestras novedades</h4>
								<form class="newsletter_form clearfix" action="javascript:void(0);" method="get">
									<input type="text" name="newsletter" placeholder="Ingrese su email" />
									<input class="btn newsletter_btn" type="submit" value="ENVIAR">
								</form>

								<h4>Síguenos en redes sociales</h4>
								<div class="social">
									<a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div><!-- //ROW -->
					</div><!-- //CONTAINER -->

					<!-- COPYRIGHT -->
					<div class="copyright">

						<!-- CONTAINER -->
						<div class="container clearfix">
							<div class="foot_logo"><a href="index.html" ><img src="{{url('images/logo-footer.png')}}" alt="" /></a></div>

							<div class="copyright_inf">
								<span>VIMODA NEW FASHION</span> |
								<a class="back_top" href="javascript:void(0);">volver arriba <i class="fa fa-angle-up"></i></a>
							</div>
						</div><!-- //CONTAINER -->
					</div><!-- //COPYRIGHT -->
				</footer><!-- //FOOTER -->
			</div><!-- //PAGE -->
			<div class="sticky-social text-center hidden-xs">
				<a href="javascript:void(0);">
					<i class="fa fa-3x fa-facebook-square"></i>
				</a>
				<a href="javascript:void(0);">
					<i class="fa fa-3x fa-twitter-square"></i>
				</a>
				<a href="javascript:void(0);">
					<i class="fa fa-3x fa-pinterest-square"></i>
				</a>
			</div>
		</div>

		<!-- TOVAR MODAL CONTENT -->
		<div id="modal-body" class="clearfix">
			<div id="tovar_content"></div>
			<div class="close_block"></div>
		</div><!-- TOVAR MODAL CONTENT -->

		<!-- SCRIPTS -->
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!--[if IE]><html class="ie" lang="en"> <![endif]-->

		<script src="{{url('js/jquery.min.js')}}" type="text/javascript"></script>
		<script src="{{url('js/bootstrap.min.js')}}" type="text/javascript"></script>
		<script src="{{url('js/jquery.sticky.js')}}" type="text/javascript"></script>
		<script src="{{url('js/parallax.js')}}" type="text/javascript"></script>
		<script src="{{url('js/jquery.flexslider-min.js')}}" type="text/javascript"></script>
		<script src="{{url('js/jquery.jcarousel.js')}}" type="text/javascript"></script>
		<script src="{{url('js/fancySelect.js')}}"></script>
		<script src="{{url('js/animate.js')}}" type="text/javascript"></script>
		<script src="{{url('js/myscript.js')}}" type="text/javascript"></script>
		<script>
			// hack iframe
			if (top !== self)
				top.location.replace(self.location.href);
		</script>
	</body>
</html>